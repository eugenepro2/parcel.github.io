<?php

namespace App;

use App\Mail\AdminMail;
use App\Mail\UserMail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class FormMailer extends Model implements IMailer
{

    public function sendEmailFormToAdmin($user)
    {
        $email_recipients = Admin::where('id', 1)->first()['email_recipient'];


        if(isset($email_recipients))
        {
            $data = json_decode($email_recipients, true);
            $emails = [];
            foreach($data as $key => $value){
                array_push($emails, $value['value']);
            }

            Mail::to($emails)->send(new AdminMail($user));
        }
    }

    public function sendEmailFormToUser($user)
    {
        $customer_notification = Admin::where('id', 1)->first();

        if($customer_notification['customer_notification'] == true)
        {
            Mail::send(new UserMail($user));
        }
    }
}
