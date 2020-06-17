<?php

namespace App;

use function Composer\Autoload\includeFile;
use DOMDocument;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PDF extends Model
{
    public static function getFieldValues(IForm $form)
    {
        $step_1 = $form->where('user_id', Auth::id())->where('step_id', 1)->get()->toArray();
        $step_5 = $form->where('user_id', Auth::id())->where('step_id', 5)->get()->toArray();

        return array_merge($step_1, $step_5);
    }

    public function savePdfOnStorage($id)
    {
        $file_path = 'docs/a0' . $id . '.php';

        ob_start();
        $html = includeFile($file_path);
        print($html);
        $a01 = ob_get_clean();

        $data = [
            'html' => $a01,
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

            if($id == 3){
                $filename = 'Zusammenfassung.pdf';
            }else{
                $filename = 'a0' . $id . '_user_' . Auth::id() . '.pdf';
            }
            Storage::disk('public')->put($filename, $response);
            $path = 'app/public/' . $filename;
        }

        return compact(['path', 'filename']);
    }

}
