<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Form extends Model implements IForm
{
    protected $fillable = [
        'value',
        'field_id',
        'user_id',
        'step_id'
    ];

    public function field()
    {
        return $this->hasMany(Field::class, 'id', 'field_id');
    }

    public function getFormFields(IFormChecking $checking, $id)
    {
        $step_id = $checking->checkStepId();

        if($step_id == 7 and $step_id >= $id)
        {
            return redirect()->route('go-live');
        }
        elseif($step_id != 7 and $step_id >= $id)
        {
            $step = Step::where('id', $id)->with('group.field.option')->first();
            $data = Form::where('user_id', Auth::id())->where('step_id', $id)->get();
            return view('step.index', compact(['step', 'data']));
        }
        elseif($step_id != 7 and $step_id < $id)
        {
            return redirect()->route('step', $step_id);
        }

    }

    public function saveFormFields($data, $step_id)
    {
        foreach($data as $key => $value) {
            $field_id = explode('-', $key);
            self::create([
                'value' =>  $value,
                'field_id' => $field_id[1],
                'user_id' => Auth::id(),
                'step_id' => $step_id
            ]);
        }

        return true;
    }

    public function updateFormFields($data, $step_id)
    {
        foreach($data as $key => $value) {
        $field_id = explode('-', $key);
        self::where('field_id', $field_id[1])->update(['value' =>  $value]);
        }

        return true;
    }

}
