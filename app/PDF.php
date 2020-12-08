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
            'apiKey' => config('services.html2pdf.key'),
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
            }elseif($id == 1){
                $filename = 'Basis-Lastschrift.pdf';
            }elseif($id == 2){
                $filename = 'Firmen-Lastschrift.pdf';
            }
            Storage::disk('public')->put($filename, $response);
            $path = 'app/public/' . $filename;
        }

        return compact(['path', 'filename']);
    }

}
