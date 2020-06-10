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

    public function __construct($data)
    {
        $this->user = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = $this->user;
        $file1_path = storage_path('app/public/a02_user_' . $user->id . '.pdf');
        $file2_path = storage_path('app/public/a03_user_' . $user->id . '.pdf');

        return $this
                ->to($user->email)
                ->subject("Deine Registrierung bei PARCEL.ONE (Kunden-Nr.: $user->id)")
                ->from('info@parcel.io', 'PARCEL.ONE-Team')
                ->view('emails.user', compact('user'))
                ->attach($file1_path, [
                    'mime' => 'application/pdf'
                ])
                ->attach($file2_path, [
                'mime' => 'application/pdf'
                ]);
    }
}
