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
	$('#umfrage .hinweis .btn').click(function(e){
		e.preventDefault();
		$('#umfrage .hinweis').removeClass('show');
		$('body').css('overflow','auto');
	})








});