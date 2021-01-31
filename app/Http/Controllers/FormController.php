<?php

namespace App\Http\Controllers;

use App\FormMailer;
use App\IFormChecking;
use App\IForm;
use App\Http\Requests\FormValidator;
use App\Jobs\SendMail;
use App\Mail\AdminMail;
use App\PDF;
use Illuminate\Support\Facades\Auth;
use function Ramsey\Uuid\v1;

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

            $data = $form->getFormFields($id);
            $data_step_1 = $form->getFormFields(1);
            $step = $form->getFormStep($step_id);

            return view('step.index', compact(['data', 'step', 'data_step_1']));
        }
        elseif($step_id != 7 and $step_id > $id)
        {
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

//            SendMail::dispatch($file1, $file2, $file3)->delay(now()->addMinutes(10));
            SendMail::dispatch($file1, $file2, $file3);
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
    public function checkIBAN($iban)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://fintechtoolbox.com/validate/iban.json?iban=" . $iban,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTPHEADER => array(
                "Authorization: token " . config('services.iban.key')
            ),
        ));

        $responseIBAN = curl_exec($curl);
        $failIBAN = curl_error($curl);

        $resultIBAN = json_decode($responseIBAN);
        $errorIBAN = json_decode($failIBAN);

        $bic = $resultIBAN->iban->bic;

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://fintechtoolbox.com/bankcodes/" . $bic . ".json",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTPHEADER => array(
                "Authorization: token " . config('services.iban.key')
            ),
        ));

        $responseBIC = curl_exec($curl);
        $failBIC = curl_error($curl);

        $resultBIC = json_decode($responseBIC);
        $errorBIC = json_decode($failBIC);

        $bank = $resultBIC->bank_code->bank_name;

        if ($errorIBAN) {
            return response()->json($errorIBAN, 500);
        } elseif($errorBIC) {
            return response()->json($errorBIC, 500);
        } else {
            return response()->json(compact("bic", "bank"), 200);
        }

        curl_close($curl);

    }

}
