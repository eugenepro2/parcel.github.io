<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Form extends Model implements IForm
{
    protected $fillable = [
        'value',
        'field_id',
        'user_id'
    ];

    public function field()
    {
        return $this->hasMany(Field::class, 'id', 'field_id');
    }

    public function getFormFields(IFormChecking $checking, $step_id)
    {
        $check_step = $checking->checkStepId();

        if($check_step == 7)
        {
            return redirect()->route('go-live');
        }else{
            $step = Step::where('id', $step_id)->with('group.field.option')->first();
            $data = Form::where('user_id', Auth::id())->get();
            return view('step.index', compact(['step', 'data']));
        }

    }

    public function saveFormFields($data)
    {
        foreach($data as $key => $value) {
            $field_id = explode('-', $key);
            self::create([
                'value' =>  $value,
                'field_id' => $field_id[1],
                'user_id' => Auth::id()
            ]);
        }

        return true;
    }

}
