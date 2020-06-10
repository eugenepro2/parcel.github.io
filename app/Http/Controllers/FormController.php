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
use App\Step;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    public function endSteps(IFormChecking $checking)
    {
        $step_id = $checking->checkStepId();

        if($step_id == 7){
            return view('step.go-live');
        }else{
            return redirect()->route('step', $step_id);
        }
    }

    public function test()
    {

        $html = file_get_contents('docs/a01.html');

        $data = [
            'html' => $html,
            'apiKey' => '343b0a3713976c3089f26eb15308a8552ff861def1878efdd53e5f00d35dbfab',
        ];

        $dataString = json_encode($data);

        $ch = curl_init('https://api.html2pdf.app/v1/generate');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);

        $response = curl_exec($ch);
        $err = curl_error($ch);

        curl_close($ch);

        if ($err) {
            echo 'Error #:' . $err;
        } else {
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename="your-file-name.pdf"');
            header('Content-Transfer-Encoding: binary');
            header('Accept-Ranges: bytes');

            echo $response;
        }
    }


}
