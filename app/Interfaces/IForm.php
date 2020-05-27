<?php

namespace App;

interface IForm{
    public function getFormFields(IFormChecking $checking, $step_id);
    public function saveFormFields($request);
    public function updateFormFields($request);
}