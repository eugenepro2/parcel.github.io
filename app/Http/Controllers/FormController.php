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
use Illuminate\Support\Facades\Queue;
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
            dd('123', $id, $step_id);
            $data = $form->getFormFields($id);
            $step = $form->getFormStep($step_id);

            if($id == 5 and !isset($data[0])){
                $data = $form->getFormFields(1);
                return view('step.index-step-5', compact(['data', 'step']));
            }else{
                return view('step.index', compact(['data', 'step']));
            }
        }
        elseif($step_id != 7 and $step_id > $id)
        {
            dd('456', $id, $step_id);
            $data = $form->getFormFields($id);
            $step = $form->getFormStep($id);

            return view('step.index', compact(['data', 'step']));

        }
    }

    public function store(FormValidator $request, $id, IForm $form)
    {
        $form->saveFormFields($request->except(['_token', 'checkbox']), $id);

        if($id == 6){

            $pdf = new PDF();
            $file1 = $pdf->savePdfOnStorage('1');
            $file2 = $pdf->savePdfOnStorage('2');
            $file3 = $pdf->savePdfOnStorage('3');

            SendMail::dispatch($file1, $file2, $file3)->delay(now()->addMinutes(10));

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
            $file1 = $pdf->savePdfOnStorage('1');
            $file2 = $pdf->savePdfOnStorage('2');
            $file3 = $pdf->savePdfOnStorage('3');

            SendMail::dispatch($file1, $file2, $file3)->delay(now()->addMinutes(10));

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
