$(document).ready(function(){


	// Category
	$('#categories').click(function() {
        $('.categories').show();
        $('#createFormCategory').attr('hidden',true);
        $('#indexCategory').attr('hidden', false);
	});

    //Modal Category
    $('#changeViewCategory').on('click',function() {
        // $('.news').hide();
        $('#categoryModal').modal('show');
    });

	// Modal News
	$('#changeViewNews').on('click',function() {
        // $('.news').hide();
        $('#newsModal').modal('show');
    });

	// News
	$('#news').click(function() {
    	$('.news').show();
        $('#createFormNews').attr('hidden',true);
        $('#indexNews').attr('hidden', false);
	});
})