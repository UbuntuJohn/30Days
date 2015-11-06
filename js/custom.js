$(document).ready(function() {
	$('p:not(.version)').each(function() {
		$(this).on("click", function() {
			var chStatus = 'completed',
			day = $(this).attr("class");
			console.log("Day is giving us: " + day);

			$.ajax({
				url: 'admin/update.php',
				type: 'get',
				data: {
					status: 'completed',
					day: day
				},
				success: function(response) {
					
					if(response.error) {
					
						alert(response.error);
					
					} else {
						window.location.assign("index.php");
						
					} 
					
					
				}


			});



		});

	});

	var milesRan = $('.green').length,
	total = 528,
	tDays = 30,
	fieldsSoFar = 17.6 * milesRan,
	fieldsLeft = total - fieldsSoFar,
	daysLeft = tDays - milesRan;
	//alert("You have ran " + milesRan + " miles!");
	$('.fbfl').text(fieldsLeft);
	$('.daysLeft').text(daysLeft);

	if(daysLeft == 0) {
		$('.checkComplete').text("Challenge Completed!");
	}


	$('.reset').on("click", function() {

		

		$.ajax({
			url: 'admin/reset.php',
			type: 'post',
			success: function(response) {
					
					if(response.error) {
					
						alert(response.error);
					
					} else {
						window.location.assign("index.php");
						
					} 
					
					
				}
		});
	});

	$('.icon').hover(function() {
		$('.instructions').fadeIn(1000);
	});

	$('.close').on("click", function() {
		$('.instructions').fadeOut(300);
	});

	
	
});