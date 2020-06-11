<?php

namespace App;

interface IMailer{

    public function sendEmailFormToAdmin($user, $file1_path, $file2_path, $file3_path);
    public function sendEmailFormToUser($user, $file2_path, $file3_path);

}