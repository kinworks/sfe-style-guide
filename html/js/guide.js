$(function() {
	$('#theme').on('change', function(e){
	    var locAppend = $(this).find('option:selected').val();
	        //locSnip   = window.location.href.split('?')[0];
	    //console.log(locSnip);
	    window.location.href = /*locSnip +*/ locAppend;
	});
});
