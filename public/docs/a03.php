<?php
use App\Form;
use App\PDF;
use App\Step;
use Illuminate\Support\Facades\Auth;

$fields = PDF::getFieldValues(new Form);
$user = Auth::user();
$steps = Step::with('group')->get();
$user_id = \Illuminate\Support\Facades\Auth::id();
$countries = include('../resources/views/step/components/countries.php');

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
    <link rel="stylesheet" media="all" href="https://go.parcel.one/docs/css/app.css">
    <style>.out{max-width: 780px; margin: 0 auto}</style>
    <style type="text/css">
      div.page
      {
        min-height: 1100px;
        max-height: 1100px;
        overflow: hidden;
        page-break-after: always;
        page-break-inside: avoid;
      }
    </style>
  </head>
  <body>
    <div class="out">
      <section class="zusammenfassung">
        <div class="page">
          <div class="header">
            <div class="lines">
              <img src="https://go.parcel.one/docs/img/slogan.png" alt="">
            </div>
            <div class="header__logo"><img src="https://go.parcel.one/docs/img/logo.png" alt="parcel.one"></div>
          </div>
          <div class="main">
            <div class="zusammenfassung__content">
              <?php foreach($fields as $field):
                if($field['field_id'] == 1): ?>
                  <h1 class="title zusammenfassung__title">
                    <?= $field['value'] ?>
                  </h1>
                <?php endif;?>
              <?php endforeach; ?>

              <h2 class="subtitle" style="text-align: center">Online-Registrierung</h2>

              <div class="zusammenfassung__details">
                <p class="text">Datum: <?= date('d.m.Y')?></p>
                <p class="text">Deine Kundennummer: <?= $user_id ?></p>
                <p class="text">Seite: 1 von 4</p>
              </div>
            </div>


            <?php foreach($steps as $step): ?>

              <?php if($step['id'] == 1): ?>
                <h2 class="color zusammenfassung__text"><?php if($step['id'] < 7) echo $step['name'] ?></h2>
                <?php foreach($user['form'] as $field):
                  if($field['value'] != null && $step['id'] == $field['step_id']):?>
                    <p class="text zusammenfassung__text"><b><?=$field->field->first()['name']?><br></b>
                      <?php 
                      if($field->field->first()['type'] == 'select'){
                        if($field->field->first()['id'] == 6){
                          foreach($countries as $key => $value){
                            if($key == $field['value']){
                              echo $value['name'];
                            }
                          }
                        } else {
                          foreach($field->field->first()->option as $option)
                          {
                            if($option->id == $field['value']){
                              echo $option->name;
                            }
                          }
                        }
                      } else {
                        echo $field['value'];
                      } ?>
                    </p>
                  <?php endif;?>
                <?php endforeach; ?>
                
              <?php endif; ?>

            <?php endforeach; ?>
          </div>
        
          <div class="zusammenfassung__footer footer">
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
        </div>
        <div class="page">
          <div class="header">
            <div class="lines">
              <img src="https://go.parcel.one/docs/img/slogan.png" alt="">
            </div>
            <div class="header__logo"><img src="https://go.parcel.one/docs/img/logo.png" alt="parcel.one"></div>
          </div>
          <div class="main">
            <div class="zusammenfassung__content opacity">
              <h1 class="title zusammenfassung__title">
                Kerbs & Kremer GbR    
              </h1>
            </div>
            <h2 class="subtitle opacity" style="text-align: center">Online-Registrierung</h2>

            <?php foreach($steps as $step): ?>

              <?php if($step['id'] == 2): ?>
                <div class="zusammenfassung__content">
                  <div class="zusammenfassung__details">
                    <p class="text">Datum: <?= date('d.m.Y')?></p>
                    <p class="text">Deine Kundennummer: <?= $user_id ?></p>
                    <p class="text">Seite: 2 von 4</p>
                  </div>
                </div>

                <h2 class="color zusammenfassung__text"><?php if($step['id'] < 7) echo $step['name'] ?></h2>

                <?php foreach($user['form'] as $field):?>
                  <?php if($field['value'] != null && $step['id'] == $field['step_id']):?>
                    <p class="text zusammenfassung__text"><b><?=$field->field->first()['name']?><br></b>
                      <?php 
                        if($field->field->first()['type'] == 'select'){
                          foreach($field->field->first()->option as $option) {
                            if($option->id == $field['value']){
                              echo $option->name;
                            }
                          }
                        } else {
                          echo $field['value'];
                        } 
                      ?>
                    </p>
                  <?php endif;?>
                <?php endforeach;?>

                <?php endif;?>

            <?php endforeach; ?>
          </div>
          <div class="zusammenfassung__footer footer">
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
        </div>
        <div class="page">
          <div class="header">
            <div class="lines">
              <img src="https://go.parcel.one/docs/img/slogan.png" alt="">
            </div>
            <div class="header__logo"><img src="https://go.parcel.one/docs/img/logo.png" alt="parcel.one"></div>
          </div>
          <div class="main">
            <div class="zusammenfassung__content opacity">
              <h1 class="title zusammenfassung__title">
                Kerbs & Kremer GbR    
              </h1>
            </div>
            <h2 class="subtitle opacity" style="text-align: center">Online-Registrierung</h2>
            <?php foreach($steps as $step): ?>

              <?php if($step['id'] == 3): ?>
                <div class="zusammenfassung__content">
                  <div class="zusammenfassung__details">
                    <p class="text">Datum: <?= date('d.m.Y')?></p>
                    <p class="text">Deine Kundennummer: <?= $user_id ?></p>
                    <p class="text">Seite: 3 von 4</p>
                  </div>
                </div>

                <h2 class="color zusammenfassung__text"><?php if($step['id'] < 7) echo $step['name'] ?></h2>

                <?php foreach($user['form'] as $field):?>
                  <?php if($field['value'] != null && $step['id'] == $field['step_id']):?>
                    <p class="text zusammenfassung__text"><b><?=$field->field->first()['name']?><br></b>
                      <?php 
                        if($field->field->first()['type'] == 'select'){
                          foreach($field->field->first()->option as $option) {
                            if($option->id == $field['value']){
                              echo $option->name;
                            }
                          }
                        } else {
                          echo $field['value'];
                        } 
                      ?>
                    </p>
                  <?php endif;?>
                <?php endforeach;?>


                <?php elseif($step['id'] == 4): ?>

                  <h2 class="color zusammenfassung__text"><?php if($step['id'] < 7) echo $step['name'] ?></h2>

                  <?php foreach($user['form'] as $field):?>
                      <?php if($field['value'] != null && $step['id'] == $field['step_id']):?>
                        <p class="text zusammenfassung__text"><b><?=$field->field->first()['name']?><br></b>
                          <?php 
                            if($field->field->first()['type'] == 'select'){
                              foreach($field->field->first()->option as $option) {
                                if($option->id == $field['value']){
                                  echo $option->name;
                                }
                              }
                            } else {
                              echo $field['value'];
                            } 
                          ?>
                        </p>
                      <?php endif; ?>
                  <?php endforeach; ?>

                <?php endif;?>

            <?php endforeach; ?>
          </div>
          <div class="zusammenfassung__footer footer">
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
        </div>
        <div class="page">
          <div class="header">
            <div class="lines">
              <img src="https://go.parcel.one/docs/img/slogan.png" alt="">
            </div>
            <div class="header__logo"><img src="https://go.parcel.one/docs/img/logo.png" alt="parcel.one"></div>
          </div>
          <div class="main">
            <div class="zusammenfassung__content opacity">
              <h1 class="title zusammenfassung__title">
                Kerbs & Kremer GbR    
              </h1>
            </div>
            <h2 class="subtitle opacity" style="text-align: center">Online-Registrierung</h2>
            <?php foreach($steps as $step): ?>



            <?php if($step['id'] == 5): ?>

              <div class="zusammenfassung__content">
                <div class="zusammenfassung__details">
                  <p class="text">Datum: <?= date('d.m.Y')?></p>
                  <p class="text">Deine Kundennummer: <?= $user_id ?></p>
                  <p class="text">Seite: 4 von 4</p>
                </div>
              </div>

              <h2 class="color zusammenfassung__text"><?php if($step['id'] < 7) echo $step['name'] ?></h2>

              <?php foreach($user['form'] as $field): ?>
                <?php if($field['value'] != null && $step['id'] == $field['step_id']):?>
                  <p class="text zusammenfassung__text"><b><?=$field->field->first()['name']?><br></b>
                    <?php 
                      if($field->field->first()['type'] == 'select'){
                        if($field->field->first()['id'] == 45){
                          foreach($countries as $key => $value){
                            if($key == $field['value']){
                              echo $value['name'];
                            }
                          }
                        } else {
                          foreach($field->field->first()->option as $option){
                            if($option->id == $field['value']){
                              echo $option->name;
                            }
                          }
                        }
                      } else {
                        echo $field['value'];
                      } 
                    ?>
                  </p>
                <?php endif; ?>
              <?php endforeach;?>

              <?php elseif($step['id'] == 6): ?>

                <h2 class="color zusammenfassung__text"><?php if($step['id'] < 7) echo $step['name'] ?></h2>

                <?php foreach($user['form'] as $field):?>
                  <?php if($field['value'] != null && $step['id'] == $field['step_id']):?>
                    <p class="text zusammenfassung__text">
                      <b><?=$field->field->first()['name']?><br></b>
                      <?= $field['value']; ?>
                    </p>
                  <?php endif; ?>
                <?php endforeach;?>

              <?php endif; ?>
            <?php endforeach; ?>
          </div>
          <div class="zusammenfassung__footer footer">
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
        </div>
      </section>
    </div>
  </body>
</html>
