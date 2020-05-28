<?php

namespace App;

interface IForm{
    public function getFormFields($id);
    public function saveFormFields($request, $id);
    public function updateFormFields($request, $id);
}