

jQuery(document).ready(function($) {
	$('#load-content').click(function(e)) {
		e.preventDefault();
	});
	
	$.get(BASE+'/content', function(data) {
		$('#content').html(data);
	});
});
