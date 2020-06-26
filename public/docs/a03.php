<?php

use App\Form;
use App\PDF;
use App\Step;
use Illuminate\Support\Facades\Auth;

$fields = PDF::getFieldValues(new Form);
$user = Auth::user();
$steps = Step::with('group')->get();
$user_id = \Illuminate\Support\Facades\Auth::id();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Zusammenfassung</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="http://parcel.iocube.de/docs/css/app.css">
    <style>.out{max-width: 780px; margin: 0 auto}</style>
  </head>
  <body>
    <!--BEGIN out-->
    <div class="out">
      <section class="zusammenfassung">
        <div class="header">
          <div class="header__logo"><img src="http://parcel.iocube.de/docs/img/logo.png" alt="parcel.one"></div>
        </div>
        <div class="lines">
          <div class="line line_red">
            <p>Wir stemmen deinen</p>
          </div>
          <div class="line line_blue">
            <p>internationalen Versand</p>
          </div>
        </div>
        <div class="zusammenfassung__content">
            <?php foreach($fields as $field)
            if($field['field_id'] == 1){ ?>
                <h1 class="title zusammenfassung__title"><?= $field['value'] ?></h1>
            <?php };?>
          <h2 class="subtitle zusammenfassung__subtitle">Online-Registrierung</h2>
          <div class="zusammenfassung__details">
            <p class="text">Datum: 03.06.2020</p>
              <?php foreach($fields as $field)
              if($field['field_id'] == 6 and $field['value'] != null): ?>
                <p class="text">Kundennummer: <?= $field['value'] ?></p>
              <?php elseif($field['field_id'] == 6 and $field['value'] == null): ?>
                <p class="text">Kundennummer: <?= $user_id ?></p>
              <?php endif ?>
          </div>
            <?php foreach($steps as $step): ?>
            <h2 class="subtitle zusammenfassung__text"><?= $step['name'] ?></h2>
            <?php foreach($user['form'] as $field):
                if($field['value'] != null && $step['id'] == $field['step_id']){?>
                    <p class="text zusammenfassung__text"><b><?=$field->field->first()['name']?><br></b>
                        <?php if($field->field->first()['type'] == 'select'){
                            foreach($field->field->first()->option as $option)
                            {
                                if($option->id == $field['value']){
                                    echo $option->name;
                                }
                            }
                        }else{
                            echo $field['value'];} ?></p>
                <?php }endforeach; endforeach;?>
        </div>
        <div class="zusammenfassung__footer">
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
        </div>
      </section>
    </div>
    <!--END out-->
    <!--LOAD SCRIPTS-->
    <script type="text/javascript" src="http://parcel.iocube.de/docs/js/app.js"></script>
  </body>
</html>
