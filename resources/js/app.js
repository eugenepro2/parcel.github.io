import $ from 'jquery'
import Tagify from '@yaireo/tagify'
import dayjs from 'dayjs';

// The DOM element you wish to replace with Tagify
var input = document.querySelector('#email_recipient');

// initialize Tagify on the above input node reference
new Tagify(input)


// $('#27').change(function() {
//   if ($(this).val() == '54') {
//     $('#field-28,#field-29,#field-30').slideDown()
//     $('#field-28 select,#field-29 select,#field-30 select').attr('required', true);
//   } else{
//     $('#field-28,#field-29,#field-30').slideUp()
//     $('#field-28 select,#field-29 select,#field-30 select').attr('required', false);
//   }
// });

// //On Change  Abrechnungsmodell LETTER *
// $('#17').change(function() {
//   $("#18").prop('selectedIndex',0)
//   $('#18 option').attr('disabled', false)
//   if ($(this).val() == '1') {
//     console.log(1);
//     $('#18 option:nth-of-type(2)').attr('disabled', true);
//   }
//   if ($(this).val() == '2' || $(this).val() == '3') {
//     console.log(2);
//     $('#18 option:nth-of-type(3)').attr('disabled', true);
//   }
// });
// //on Change Gewichts- & Produktauswahl *
// $('#18').change(function() {
//   $("#19").prop('selectedIndex',0)
//   $('#19 option').attr('disabled', false)
//   $('#field-19').slideUp()
//   $('#19').attr('required', false);
//   if ($(this).val() == '6') {
//     $('#field-19').slideDown()
//     $('#19').attr('required', true);
//     $('#option-9').attr('disabled', true);
//     $('#option-10').attr('disabled', true);
//     $('#option-11').attr('disabled', true);
//     $('#option-12').attr('disabled', true);
//     $('#option-13').attr('disabled', true);
//     $('#option-14').attr('disabled', true);
//   }
//   if ($(this).val() == '5') {
//     $('#field-19').slideDown()
//     $('#19').attr('required', true);
//     $('#option-15').attr('disabled', true);
//     $('#option-16').attr('disabled', true);
//   }
// });
// if ($('#18').val() == '6') {
//   $('#field-19').slideDown()
//   $('#19').attr('required', true);
// }
// if ($('#18').val() == '5') {
//   $('#field-19').slideDown()
//   $('#19').attr('required', true);
// }



// $('#20').change(function() {
//   if ($(this).val() == '68') {
//     $('#field-21,#field-22').slideDown()
//     $('#field-21 input, #field-22 input').attr('required', true);
//   } else{
//     $('#field-21,#field-22').slideUp()
//     $('#field-21 input,#field-22 input').attr('required', false);
//   }
// });

// $('#23').change(function() {
//   if ($(this).val() == '33') {
//     $('#field-24').slideDown()
//     $('#field-24 input').attr('required', true);
//   } else{
//     $('#field-24').slideUp()
//     $('#field-24 input').attr('required', false);
//   }
// });

// $('#25').change(function() {
//   if ($(this).val() == '46') {
//     $('#field-26').slideDown()
//     $('#field-26 input').attr('required', true);
//   } else{
//     $('#field-26').slideUp()
//     $('#field-26 input').attr('required', false);
//   }
// });

const month  = dayjs().subtract('1', 'year').format('YYYY-MM-DD');
const today  = dayjs().format('YYYY-MM-DD');
$('input[type="date"]').attr('min', month)
$('input[type="date"]').attr('max', today)


$('input[type=number]').attr('min', '1');

$('.iban').click(function(){
  const iban = $('#field-37 input').val()
  $.ajax({
    type: "GET",
    url: `/iban/${iban}`,
  }).done(function( data ) {
    $('.error').slideUp()
    $('#field-38').slideDown();
    $('#field-39').slideDown();
    $('#field-38 input').val(data.bic);
    $('#field-39 input').val(data.bank);
  }).fail(function(xhr, status, error) {
    if (status) {
      $('#field-38').slideUp();
      $('#field-38').slideUp();
      $('.error').slideDown()
    }
    
  })
})