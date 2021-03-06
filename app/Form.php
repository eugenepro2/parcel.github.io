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

    public function getFormFields($id)
    {
        $data = Form::where('user_id', Auth::id())->where('step_id', $id)->get();
        return $data;
    }

    public function getFormStep($id)
    {
        $step = Step::where('id', $id)->with('group.field.option')->first();
        return $step;
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
        self::where('field_id', $field_id[1])->where('user_id', Auth::id())->update(['value' =>  $value]);
        }

        return true;
    }

}
