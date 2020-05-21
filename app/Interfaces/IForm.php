<?php

namespace App;

interface IForm{
    public function getFormFields($step_id);
    public function saveFormFields($request);
}