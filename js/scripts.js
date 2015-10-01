$(function(){
  $('#toggle-button').click(function() {
    $('#toggle-form').slideToggle(300);
    var $el = $(this).find('span');
    $el.text($el.text() == "^" ? "v": "^");
  });

  $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 2,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 2,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });

    $('#toggle-form').load('partials/admin.html');

    $('#admin').click(function(){
      $('#toggle-form').load('partials/admin.html');
    });

    $('#manage').click(function(){
      $('#toggle-form').load('partials/manage.html');
      console.log('hello');
    });

    $('#messages').click(function(){
      $('#toggle-form').load('partials/messages.html');
      console.log('hello');
    });
});
