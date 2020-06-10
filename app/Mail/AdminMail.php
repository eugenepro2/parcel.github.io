<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
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
        $file3_path = storage_path('app/public/a01_user_' . $user->id . '.pdf');

        return $this
                ->subject("Neue Kunden-Registrierung (Kunden-Nr.: $user->id)")
                ->from('info@parcel.io', 'PARCEL.ONE-Team')
                ->view('emails.admin', compact('user'))
                ->attach($file1_path, [
                    'mime' => 'application/pdf'
                ])
                ->attach($file2_path, [
                    'mime' => 'application/pdf'
                ])
                ->attach($file3_path, [
                    'mime' => 'application/pdf'
                ]);
    }
}
