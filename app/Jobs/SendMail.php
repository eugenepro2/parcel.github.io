<?php

namespace App\Jobs;

use App\Admin;
use App\FormMailer;
use App\IMailer;
use App\Mail\UserMail;
use App\Notifications\UserNotification;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $user;
    protected $file1;
    protected $file2;
    protected $file3;

    public function __construct($file1, $file2, $file3)
    {
        $this->user = Auth::user();
        $this->file1 = $file1;
        $this->file2 = $file2;
        $this->file3 = $file3;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(IMailer $mailer)
    {
        $mailer->sendEmailFormToAdmin($this->user, $this->file1['path'], $this->file2['path'], $this->file3['path']);
        $mailer->sendEmailFormToUser($this->user, $this->file2['path'], $this->file3['path']);
        Storage::delete([$this->file1['filename'], $this->file2['filename'], $this->file3['filename']]);
    }
}
