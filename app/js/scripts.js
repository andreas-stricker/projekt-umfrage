function loadProgressBars(){
			$(".meter > span").each(function() {
				$(this)
					.width(0)
					.fadeIn()
					.animate({
						width: $(this).data("width")
					}, 1200);
			});
	}

function loadErgebnis(){

	$('#umfrage').fadeOut(500);
	setTimeout(function(){
		$('#ergebnis').fadeIn(500);
	}, 500);
	setTimeout(function(){
			$('body').css('background-color','#6eb4fc');
	}, 1000);

	setTimeout(function(){
		loadProgressBars();
	}, 1000);

	$.ajax({
	   type: "GET",
	   url: "includes/get_clicks.php",
	   data: "",                        
      dataType: 'json',  
      success: function(data) 
      {
        $clicks1 = parseInt(data[0]);  
        $clicks2 = parseInt(data[1]);

        $('#stimmen1').html($clicks1);
        $('#stimmen2').html($clicks2);

        //rechne Prozent
        $summeClicks = parseInt($clicks1) + parseInt($clicks2);
		$prozent1 = ($clicks1/$summeClicks) * 100;
		$prozent2 = ($clicks2/$summeClicks) * 100;
		$('.percentage1').html($prozent1+'%');
		$('.percentage2').html($prozent2+'%');

		$('.meter1 span').data('width', $prozent1+'%');
		$('.meter2 span').data('width', $prozent2+'%');

      } 
	});

	
}


function updateErgebnis(){
			/* update ergebnis */
			if ( $('input[name=antwort]:checked').val() == '1'){
				$antwort = '1';
			}else if ($('input[name=antwort]:checked').val() == '2'){
				$antwort = '2';
			}

		    $.ajax({
			   type: "GET",
			   url: "includes/update_clicks.php",
			   data: 'antwort=' + $antwort,
			   dataType: 'json'
			 });
}


$('document').ready(function(){

	$(".meter > span").hide();
	// radio active
	$('#umfrage .radioContainer .flex-item').click(function() {
	    $('#umfrage .radioContainer .flex-item').removeClass('active');
	    $( this ).addClass('active');
	});

	//click on absenden
	$('#absenden').click(function(e){
		e.preventDefault();
		if( $('#umfrage input[type=radio]:checked').length ){
			updateErgebnis();
			loadErgebnis();
		}else{
			$('#umfrage .hinweis').addClass('show');
			$('body').css('overflow','hidden');
		}
	});

	//click zum Ergebnis
	$('.zumErgebnis').click(function(e){
		e.preventDefault();
		loadErgebnis();
	});

	//hinweis ausblenden
	$('.hinweis .btn').click(function(e){
		e.preventDefault();
		$('.hinweis').removeClass('show');
		$('body').css('overflow','auto');
	})




	/* ------------ ADMIN ----------- */

	//click on absenden
	$('#umfrageBeenden').click(function(e){
		e.preventDefault();

		$.ajax({
			url: 'includes/save_umfrage.php',
         	data: {action: 'save'},
         	type: 'post',
         	success: function(data) {
                      if (data == 'saved'){
                      	$('.backend .hinweis.saved').addClass('show');
                      }else if( data == 'exists'){
                      	$('.backend .hinweis.exists').addClass('show');
                      }
                      $('html, body').animate({
					        scrollTop: $('#bisherigeUmfragen').offset().top
					    }, 500);
                  }
		});
	});

	if($('.backend').hasClass('alte_umfragen')){
		loadProgressBars();
	}
		

});