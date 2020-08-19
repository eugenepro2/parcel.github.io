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
            'headerTemplate' => '<div class="header">
            <div class="lines">
              <div class="line line_red">
                <p>Wir stemmen deinen</p>
              </div>
              <div class="line line_blue">
                <p>internationalen Versand</p>
              </div>
            </div>
            <div class="header__logo"><img src="https://go.parcel.one/docs/img/logo.png" alt="parcel.one"></div>
        </div>',
        'footerTemplate' => '<div class="zusammenfassung__footer">
        <div class="col">
        <p class="text-footer">PARCEL.ONE 21 GmbH</p>
        <p class="text-footer">Otto-Hahn-Str. 21</p>
        <p class="text-footer">35510 Butzbach</p>
        <p class="text-footer">Deutschland</p>
        </div>
        <div class="col">
        <p class="text-footer">Tel +49 6033 - 35225 -0</p>
        <p class="text-footer">Fax +49 6033 - 35225 - 88</p>
        <p class="text-footer">info@parcel.one</p>
        <p class="text-footer">www.parcel.one</p>
        </div>
        <div class="col">
        <p class="text-footer">Amtsgericht Friedberg HRB8537</p>
        <p class="text-footer">Sitz der Gesellschaft ist Butzbach</p>
        <p class="text-footer">Geschäftsführung: Micha Augstein</p>
        <p class="text-footer">UST-ID: DE312186140</p>
        </div>
        <div class="col">
        <p class="text-footer">Sparkasse Wetzlar</p>
        <p class="text-footer">IBAN DE66515500350002102291</p>
        <p class="text-footer">BIC HELADEF1WET</p>
        </div>
    </div>'
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
