$(document).ready(function(){	
	$('#months').on('change', function() {	
		var months = $('#months').val();
		var years = $('#years').val();
		$.ajax({
			url: 'js/years.php',
			data: {years: years, months: months},
			dataType: 'JSON',
			method: 'GET',
			success: function(response) {
				var days = response.days;
				var str = '';
				for (i = 1; i <= days; i++) {
					str += '<option value="' + i +'">';
					str += i;
					str += '</option>';
				}
				$('#days').html(str);
				$('#print').html(
					'<h1>' + response.years + '</h1>'
					+ '<h1>' + response.months + '</h1>'
					+ '<h1>' + response.days + '</h1>'
				);
			}
		});
	});
	$('#years').on('change', function() {
		var years = $('#years').val();
		var months = $('#months').val();
		$.ajax({
			url: 'js/years.php',
			data: {years: years, months: months},
			dataType: 'JSON',
			method: 'GET',	
			success: function(response) {
				var days = response.days;
				var str = '';
				for (i = 1; i <= days; i++) {
					str += '<option value="' + i +'">';
					str += i;
					str += '</option>';
				}
				$('#days').html(str);
				$('#print').html(
					'<h1>' + response.years + '</h1>'
					+ '<h1>' + response.months + '</h1>'
					+ '<h1>' + response.days + '</h1>'
				);
			},
			error: function(err) {
				alert('NONO');
			}
		});
	});
});
