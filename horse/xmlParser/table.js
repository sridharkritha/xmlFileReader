$(document).ready(function(){
    $('.editbtn').click(function(e){
		// Show / Hide name change
        $(this).html($(this).html() == 'edit' ? 'modify' : 'edit');
        
        e.preventDefault();
      
		// Toggle the class for getting different properties at run time ( show / hide)
		$('.optionalRow').toggleClass('hideRow favRow');			
    });
});
