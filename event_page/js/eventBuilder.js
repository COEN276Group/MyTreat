$(document).ready(function(){
        $('.delete').on('click', function(event) {        
             $(this).parent().remove(); 
        });
    });