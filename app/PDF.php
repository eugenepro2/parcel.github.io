<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PDF extends Model
{
    public static function getFieldValues(IForm $form)
    {
        $step_1 = $form->where('user_id', Auth::id())->where('step_id', 1)->get()->toArray();
        $step_5 = $form->where('user_id', Auth::id())->where('step_id', 5)->get()->toArray();

        return array_merge($step_1, $step_5);
    }
}
