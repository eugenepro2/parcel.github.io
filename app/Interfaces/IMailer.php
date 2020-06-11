<?php

namespace App;

interface IMailer{

    public function sendEmailFormToAdmin($user);
    public function sendEmailFormToUser($user);

}