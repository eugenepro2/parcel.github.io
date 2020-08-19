<?php

use App\Form;
use App\PDF;

$fields = PDF::getFieldValues(new Form);
$user_id = \Illuminate\Support\Facades\Auth::id();
$countries = include('../resources/views/step/components/countries.php');

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Firmen-Lastschrift</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="https://go.parcel.one/docs/css/app.css">
    <!-- <link rel="stylesheet" media="all" href="docs/css/app.css"> -->
    <style>.out{max-width: 780px; margin: 0 auto} div.page
      {
        max-width: 780px; margin: 0 auto;
        page-break-after: always;
        page-break-inside: avoid;
      }</style>
  </head>
  <body>
    <!--BEGIN out-->
    <div class="out">

      <section class="firmen page">
        <div class="header">
          <div class="lines">
            <div class="line line_red">
              <p>Wir stemmen deinen</p>
            </div>
            <div class="line line_blue">
              <p>internationalen Versand</p>
            </div>
          </div>
          <div class="header__logo"><img src="https://go.parcel.one/docs/img/logo.png" alt="parcel.one"></div>
        </div>
        <div class="main">
          <h1 class="title lastschrift__title">SEPA-Firmenlastschrift-Mandat für SEPA-Firmenlastschriften</h1>
          <div class="row lastschrift__row">
            <div class="frame frame_sm">
              <h2 class="subtitle">Name und Anschrift des Zahlers</h2>

              <?php foreach($fields as $field)
                if($field['field_id'] == 40): ?>
                  <p class="text"><?= $field['value']?></p>
                <?php elseif($field['field_id'] == 41): ?>
                  <p class="text inline"><?= $field['value']?></p>
                <?php elseif($field['field_id'] == 42): ?>
                  <p class="text inline"><?= $field['value']?></p><br>
                <?php elseif($field['field_id'] == 43): ?>
                  <p class="text inline"><?= $field['value']?></p>
                <?php elseif($field['field_id'] == 44): ?>
                  <p class="text inline "><?= $field['value']?></p><br>
                <?php elseif($field['field_id'] == 45):
                  foreach($countries as $key => $value):
                    if($key == $field['value']):
                      ?>
                      <p class="text"><?= $value['name']?></p>
                    <?php endif; endforeach; endif; ?>

            </div>
            <div class="frame frame_lg">
              <h2 class="subtitle">Name des Zahlungsdienstleisters des Zahlers</h2>

                <?php foreach($fields as $field)
                    if($field['field_id'] == 49): ?>
                        <p class="text"><?= $field['value']?></p>
                    <?php endif; ?>

              <div class="row frame__row">
                <div class="col">
                  <h2 class="subtitle">BIC</h2>

                    <?php foreach($fields as $field)
                        if($field['field_id'] == 48): ?>
                            <p class="text"><?= $field['value']?></p>
                        <?php endif; ?>

                </div>
                <div class="col">
                  <h2 class="subtitle">IBAN</h2>

                    <?php foreach($fields as $field)
                        if($field['field_id'] == 47): ?>
                            <p class="text"><?= $field['value']?></p>
                        <?php endif; ?>

                </div>
              </div>
            </div>
          </div>
          <div class="row lastschrift__row">
            <div class="frame frame_sm">
              <h2 class="subtitle">Name und Anschrift des Zahlungsempfängers</h2>
                <p class="text">PARCEL.ONE GmbH</p>
                <p class="text">Otto-Hahn-Str. 21</p>
                <p class="text">35510 Butzbach</p>
            </div>
            <div class="frame frame_lg">
              <h2 class="subtitle">Gläubiger-Identifikationsnummer des Zahlungsempfängers</h2>
              <p class="text">DE67ONE00002014326</p>
              <div class="row frame__row">
                <div class="col">
                  <h2 class="subtitle">Mandatsreferenz</h2>
                    <p class="text">KD<?= $user_id ?></p>
                </div>
                <div class="col">
                  <p class="text text-checkbox">Mandat für einmalige Zahlungen</p>
                  <p class="text text-checkbox text-checkbox_true">Mandat für wiederkehrende Zahlungen</p>
                </div>
              </div>
            </div>
          </div>
          <h2 class="subtitle lastschrift__subtitle">SEPA-Firmenlastschrift</h2>
          <p class="text"><b>1.1 SEPA-Firmenlastschrift-Mandat an den Zahlungsempfänger</b></p>
          <p class="text lastschrift__text">Ich/Wir ermächtige(n) den oben genannten Zahlungsempfänger, Zahlungen von meinem/unserem Konto mittels Lastschrift einzuziehen. Zugleich weise ich meinen/weisen wir unseren oben genannten Zahlungsdienstleister an, die vom oben genannten Zahlungsempfänger auf mein/unser Konto gezogenen Lastschriften einzulösen.</p>
          <p class="text lastschrift__text"><b>Hinweis:</b>Dieses Lastschriftmandat dient nur dem Einzug von Lastschriften, die auf Konten von Unternehmen gezogen sind. Ich bin/Wir sind nicht berechtigt, nach der erfolgten Einlösung eine Erstattung des belasteten Betrages zu verlangen. Ich bin/Wir sind berechtigt, meinen/unseren Zahlungsdienstleister bis zum Fälligkeitstag anzuweisen, Lastschriften nicht einzulösen.</p>
          <p class="text"><b>2 Bestätigung des SEPA-Firmenlastschrift-Mandats gegenüber dem Zahlungsdienstleister d. Zahlers</b></p>
          <p class="text lastschrift__text">Ich bestätige/Wir bestätigen gegenüber meinem/unseren oben genannten Zahlungsdienstleister die Erteilung des oben aufgeführten SEPA-Firmenlastschriftmandats an den oben genannten Zahlungsempfänger.</p>
          <div class="row lastschrift__bottom">
            <div class="frame frame_another">
              <h2 class="subtitle">Firmenstempel und Unterschrift(en)</h2>
            </div>
            <div class="frame frame_another">
              <h2 class="subtitle">Ort, Datum</h2>
            </div>
          </div>
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
      </section>

    </div>
    <!--END out-->
    <!--LOAD SCRIPTS-->
    <script type="text/javascript" src="https://go.parcel.one/docs/js/app.js"></script>
  </body>
</html>
