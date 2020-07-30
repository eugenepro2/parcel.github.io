import $ from 'jquery'
import Tagify from '@yaireo/tagify'
import dayjs from 'dayjs';

// The DOM element you wish to replace with Tagify
var input = document.querySelector('#email_recipient');

// initialize Tagify on the above input node reference
new Tagify(input)

//Hast Du eine USt-IdNr.? *
$('#8').change(function(){
  if ($(this).val() == 72) {
    $('#field-9').slideDown()
    $('#9').attr('required', true);
    $('.notify').slideUp()
  } else{
    $('#field-9').slideUp()
    $('#9').attr('required', false);
    $('.notify').slideDown()
  }
})


// $('#27').change(function() {
//   if ($(this).val() == '54') {
//     $('#field-28,#field-29,#field-30').slideDown()
//     $('#field-28 select,#field-29 select,#field-30 select').attr('required', true);
//   } else{
//     $('#field-28,#field-29,#field-30').slideUp()
//     $('#field-28 select,#field-29 select,#field-30 select').attr('required', false);
//   }
// });

//On Change  Abrechnungsmodell LETTER *
$('#22').change(function() {
  $("#23").prop('selectedIndex',0)
  $('#23 option').attr('disabled', false)
  if ($(this).val() == '1') {
    $('#23 option:nth-of-type(2)').attr('disabled', true);
  }
  if ($(this).val() == '2' || $(this).val() == '3') {
    $('#23 option:nth-of-type(3)').attr('disabled', true);
  }
});
//on Change Gewichts- & Produktauswahl *
$('#23').change(function() {
  $("#24").prop('selectedIndex',0)
  $('#24 option').attr('disabled', false)
  $('#field-24').slideUp()
  $('#24').attr('required', false);
  if ($(this).val() == '6') {
    $('#field-24').slideDown()
    $('#24').attr('required', true);
    $('#option-9').attr('disabled', true);
    $('#option-10').attr('disabled', true);
    $('#option-11').attr('disabled', true);
    $('#option-12').attr('disabled', true);
    $('#option-13').attr('disabled', true);
    $('#option-14').attr('disabled', true);
  }
  if ($(this).val() == '5') {
    $('#field-24').slideDown()
    $('#24').attr('required', true);
    $('#option-15').attr('disabled', true);
    $('#option-16').attr('disabled', true);
  }
});


// if ($('#23').val() == '6') {
//   $('#field-24').slideDown()
//   $('#24').attr('required', true);
// }
// if ($('#23').val() == '5') {
//   $('#field-24').slideDown()
//   $('#24').attr('required', true);
// }


//PARCEL Volume *
$('#25').change(function() {
  if ($(this).val() == '68') {
    $('#field-26,#field-27').slideDown()
    $('#field-26 input, #field-27 input').attr('required', true);
  } else{
    $('#field-26,#field-27').slideUp()
    $('#field-26 input,#field-27 input').attr('required', false);
  }
});

//Welches Betriebssystem nutzt Du? *
// $('#option-55').attr('disabled', true);
$('#28').change(function() {
  $("#33").prop('selectedIndex',0)
  $('#33 option').attr('disabled', false)
  if ($(this).val() == '74') {
    $('#option-54').hide()
    $('#option-55').show()
  }else{
    $('#option-54').show()
    $('#option-55').hide()
  }
});

//Wawi/ERP System
$('#29').change(function() {
  if ($(this).val() == '33') {
    $('#field-30').slideDown()
    $('#field-30 input').attr('required', true);
  } else{
    $('#field-30').slideUp()
    $('#field-30 input').attr('required', false);
  }
});

//Shopsystem
$('#31').change(function() {
  if ($(this).val() == '46') {
    $('#field-32').slideDown()
    $('#field-32 input').attr('required', true);
  } else{
    $('#field-32').slideUp()
    $('#field-32 input').attr('required', false);
  }
});

//API-Anbindung *
$('#field-34').prev().hide()
$('#33').change(function() {
  if ($(this).val() == '55') {
    $('#field-34').prev().slideDown()
    $('#field-34').slideDown()
    $('#34').attr('required', true);
    $('#field-35').slideDown()
    $('#35').attr('required', true);
    $('#field-36').slideDown()
    $('#36').attr('required', true);
  } else{
    $('#field-34').prev().slideUp()
    $('#field-34').slideUp()
    $('#34').attr('required', false);
    $('#field-35').slideUp()
    $('#35').attr('required', false);
    $('#field-36').slideUp()
    $('#36').attr('required', false);
  }
});

const month  = dayjs().subtract('1', 'year').format('YYYY-MM-DD');
const today  = dayjs().format('YYYY-MM-DD');
$('input[type="date"]').attr('min', month)
$('input[type="date"]').attr('max', today)


$('input[type=number]').attr('min', '1');

$('.iban').click(function(){
  const iban = $('#47').val()
  $.ajax({
    type: "GET",
    url: `/iban/${iban}`,
  }).done(function( data ) {
    $('.notify').slideUp()
    $('#field-48').slideDown();
    $('#field-49').slideDown();
    $('#48').val(data.bic);
    $('#49').val(data.bank);
  }).fail(function(xhr, status, error) {
    if (status) {
      $('#field-48').slideUp();
      $('#field-49').slideUp();
      $('.notify').slideDown()
    }
    
  })
})