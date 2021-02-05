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
    <title>Lastschrift</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="https://go.parcel.one/docs/css/app.css">
    <style>.out{max-width: 780px; margin: 0 auto} div.page
      {
        page-break-after: always;
        page-break-inside: avoid;
      }
      </style>
</head>
<body>
<div class="out">
    <section class="lastschrift page">
        <div class="header">
            <div class="lines">
                <img src="https://go.parcel.one/docs/img/slogan.png" alt="">
            </div>
            <div class="header__logo"><img src="https://go.parcel.one/docs/img/logo.png" alt="parcel.one"></div>
        </div>
        <div class="main">
            <h1 class="title lastschrift__title">SEPA-Lastschrift-Mandat</h1>
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
                        <p class="text inline"><?= $field['value']?></p>
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
                    <p class="text">Am Pfahlgraben 4-10</p>
                    <p class="text">35415 Pohlheim-Garbenteich</p>
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
            <h2 class="subtitle lastschrift__subtitle">SEPA-Lastschrift</h2>
            <p class="text"><b>1.1 SEPA-Lastschrift-Mandat an den Zahlungsempfänger</b></p>
            <p class="text lastschrift__text">Ich ermächtige (Wir ermächtigen) PARCEL.ONE GmbH, Zahlungen von meinem (unserem) Konto mittels Lastschrift einzuziehen. Zugleich weise ich mein (weisen wir unser) Kreditinstitut an, die von PARCEL.ONE GmbH auf mein (unser) Konto gezogenen Lastschriften einzulösen.</p>
            <p class="text lastschrift__text"><b>Hinweis:</b>Ich kann (Wir können) innerhalb von acht Wochen, beginnend mit dem Belastungsdatum, die Erstattung des belasteten Betrages verlanden. Es gelten dabei die mit meinem (unserem) Kreditinstitut vereinbarten Bedingungen.</p>
            <p class="text"><b>1.1 Bestätigung des SEPA-Mandats gegenüber dem Zahlungsdienstleister d. Zahlers</b></p>
            <p class="text lastschrift__text">Ich bestätige/Wir bestätigen gegenüber meinem/unseren oben genannten Zahlungsdienstleister die Erteilung des oben aufgeführten SEPA-Lastschriftmandats an den oben genannten Zahlungsempfänger.</p>
            <div class="row lastschrift__bottom" style="margin-top: 137px;">
                <div class="frame frame_another">
                    <h2 class="subtitle">Unterschrift(en) des/der Kontoinhabers/Kontoinhaber</h2>
                    <p class="text">Dokument wurde elektronisch signiert</p>
                    <p class="text">IP-Adresse: <?= $_SERVER['REMOTE_ADDR'] ?></p>
                </div>
                <div class="frame frame_another">
                    <h2 class="subtitle">Ort, Datum</h2>
                    <?php foreach($fields as $field)
                        if($field['field_id'] == 5): ?>
                            <p class="text"><?= $field['value']?>, <?= date('d.m.Y')?></p>
                        <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="zusammenfassung__footer footer">
            <img src="https://go.parcel.one/docs/img/footer.png" alt="">
        </div>
    </section>
</div>
</body>
</html>