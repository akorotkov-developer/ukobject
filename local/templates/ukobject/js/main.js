$(function() {
    $(document).on('submit', '.frmcnt', function () {
            
		  $.post( "/ajax/contacts.php", $(".frmcnt").serialize() , function( data )
		  {
		          $(".frmcres").html("Спасибо, мы свяжемся с Вами в ближайшее время");
          });
          
          });
          
          });