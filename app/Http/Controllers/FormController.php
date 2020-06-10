<?php

namespace App\Http\Controllers;

use App\Form;
use App\FormChecking;
use App\FormMailer;
use App\IFormChecking;
use App\IMailer;
use App\IForm;
use App\Http\Requests\FormValidator;
use App\Jobs\SendMail;
use App\Mail\AdminMail;
use App\Mail\UserMail;
use App\PDF;
use App\Step;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function index(IForm $form, IFormChecking $checking, $id)
    {

        $step_id = $checking->checkStepId();
        if($step_id == 7 and $step_id > $id)
        {
            return redirect()->route('go-live');
        }
        elseif($step_id != 7 and $step_id <= $id)
        {
            $data = $form->getFormFields($step_id);
            return view('step.index', $data);
        }
        elseif($step_id != 7 and $step_id > $id)
        {
            $data = $form->getFormFields($id);
            return view('step.index', $data);
        }


    }

    public function store(FormValidator $request, $id, IForm $form)
    {
        $form->saveFormFields($request->except(['_token', 'checkbox']), $id);

        if($id == 6){

            $pdf = new PDF();
            $pdf->savePdfOnStorage('1');
            $pdf->savePdfOnStorage('2');
            $pdf->savePdfOnStorage('3');

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

            $pdf = new PDF();
            $pdf->savePdfOnStorage('1');
            $pdf->savePdfOnStorage('2');
            $pdf->savePdfOnStorage('3');

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

    public function endSteps(IFormChecking $checking)
    {
        $step_id = $checking->checkStepId();

        if($step_id == 7){
            return view('step.go-live');
        }else{
            return redirect()->route('step', $step_id);
        }
    }

}
