<?php

namespace App\Http\Controllers;

use App\FormChecking;
use App\FormMailer;
use App\IFormChecking;
use App\IMailer;
use App\IForm;
use App\Http\Requests\FormValidator;
use App\Jobs\SendMail;
use App\Mail\AdminMail;
use App\Mail\UserMail;
use App\Step;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function index(IForm $form, $id)
    {

        return $form->getFormFields(new FormChecking, $id);

    }

    public function store(FormValidator $request, $id, IForm $form)
    {
        $form->saveFormFields($request->except(['_token', 'checkbox']), $id);

        if($id == 6){

            $user = Auth::user();

            $mailer = new FormMailer();
            $mailer->sendEmailFormToUser($user);
            $mailer->sendEmailFormToAdmin($user);

//            SendMail::dispatch()->delay(now()->addMinutes(10));
            return redirect()->route('go-live');
        }

        $id = $id+1;

        return redirect()->route('step', $id);
    }

    public function update(FormValidator $request, $id, IForm $form)
    {
        $form->updateFormFields($request->except(['_token', 'checkbox', '_method']), $id);

        if($id == 6){

            $user = Auth::user();

            $mailer = new FormMailer();
            $mailer->sendEmailFormToUser($user);
            $mailer->sendEmailFormToAdmin($user);

//            SendMail::dispatch()->delay(now()->addMinutes(10));
            return redirect()->route('go-live');
        }

        $id = $id+1;

        return redirect()->route('step', $id);
    }

    public function endSteps()
    {
        return view('step.go-live');
    }

}
