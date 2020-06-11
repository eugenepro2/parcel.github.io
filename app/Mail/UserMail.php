<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $user;
    protected $file1_path;
    protected $file2_path;

    public function __construct($data, $file1_path, $file2_path)
    {
        $this->user = $data;
        $this->file1_path = $file1_path;
        $this->file2_path = $file2_path;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = $this->user;

        return $this
                ->to($user->email)
                ->subject("Deine Registrierung bei PARCEL.ONE (Kunden-Nr.: $user->id)")
                ->from('info@parcel.io', 'PARCEL.ONE-Team')
                ->view('emails.user', compact('user'))
                ->attach(storage_path($this->file1_path), [
                    'mime' => 'application/pdf'
                ])
                ->attach(storage_path($this->file2_path), [
                'mime' => 'application/pdf'
                ]);
    }
}
