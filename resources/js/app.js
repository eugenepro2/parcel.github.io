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


$('#20').change(function() {
  if ($(this).val() == '68') {
    $('#field-21,#field-22').slideDown()
    $('#field-21 input, #field-22 input').attr('required', true);
  } else{
    $('#field-21,#field-22').slideUp()
    $('#field-21 input,#field-22 input').attr('required', false);
  }
});

$('#23').change(function() {
  if ($(this).val() == '33') {
    $('#field-24').slideDown()
    $('#field-24 input').attr('required', true);
  } else{
    $('#field-24').slideUp()
    $('#field-24 input').attr('required', false);
  }
});

$('#25').change(function() {
  if ($(this).val() == '46') {
    $('#field-26').slideDown()
    $('#field-26 input').attr('required', true);
  } else{
    $('#field-26').slideUp()
    $('#field-26 input').attr('required', false);
  }
});

const month  = dayjs().subtract('1', 'year').format('YYYY-MM-DD');
const today  = dayjs().format('YYYY-MM-DD');
$('input[type="date"]').attr('min', month)
$('input[type="date"]').attr('max', today)


$('input[type=number]').attr('min', '1');

$('.iban').click(function(){
  const iban = $('#field-38 input').val()
  $.ajax({
    type: "GET",
    url: `/iban/${iban}`,
  }).done(function( data ) {
    $('.error').slideUp()
    $('#field-39').slideDown();
    $('#field-37').slideDown();
    $('#field-39 input').val(data.bic);
    $('#field-37 input').val(data.bank);
  }).fail(function(xhr, status, error) {
    if (status) {
      $('#field-39').slideUp();
      $('#field-37').slideUp();
      $('.error').slideDown()
    }
    
  })
})