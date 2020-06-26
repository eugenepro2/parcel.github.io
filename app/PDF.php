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
        $steps = $form->where('user_id', Auth::id())->get()->toArray();

        return $steps;
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
            'apiKey' => '6ee161313c052eab8b5c5a739593b7aaed96ebbe52ec635dd5db6fef54663111',
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
