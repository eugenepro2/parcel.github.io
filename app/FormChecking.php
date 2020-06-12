<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class FormChecking extends Model implements IFormChecking
{
    public function checkStepId()
    {
        $data = Form::where('user_id', Auth::id())->get('field_id');

        $step_id = 1;
        if ($data) {
            foreach($data as $key => $value){
                switch ($value['field_id']) {
                    case '1':
                        $step_id = 2;
                        break;
                    case '11':
                        $step_id = 3;
                        break;
                    case '16':
                        $step_id = 4;
                        break;
                    case '22':
                        $step_id = 5;
                        break;
                    case '34':
                        $step_id = 6;
                        break;
                    case '40':
                        $step_id = 7;
                        break;
                    default:
                        break;
                }
            }
        }
        return $step_id;
    }
}
