$(document).ready(function() {
	$(".swday-fields").hide();

	$(document).on('change', '#tipo', function(e){
		if ($(this).val() == 1) {
			$(".webcast-fields").show();
			$(".swday-fields").hide();
		} else {
			$(".webcast-fields").hide();
			$(".swday-fields").show();
		}
	});

});

