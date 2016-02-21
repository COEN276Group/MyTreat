

$(document).ready(function(){
        $('.delete_app').on('click', function(event) {        
             $(this).parent().parent().parent().hide(1000); 
        });
});

$(document).ready(function(){
        $('.accept_app_1').on('click', function(event) { 
             var app_div = $(this).parent().prev();
             app_div.addClass("profile_img_div");
             app_div.append('<input class="delete" type="button" value="X"/>'); 
             $("#my_event_people_1").append(app_div);

             $(this).parent().parent().parent().hide(1000); 
        });
});

$(document).ready(function(){
        $(document).on('click', ".delete", function(event) {        
             $(this).parent().hide(800); 
        });
});


$(document).ready(function(){
        $('.accept_app_2').on('click', function(event) { 
             var app_div = $(this).parent().prev();
             app_div.addClass("profile_img_div");
             app_div.append('<input class="delete" type="button" value="X"/>');  
             $("#my_event_people_2").append(app_div);

             $(this).parent().parent().parent().hide(1000); 
        });
});

$(document).ready(function(){
        $('.edit_button').on('click', function(event) {        
             $('.edit_text').attr("contenteditable", "true");
        });
});

$(document).ready(function(){
        $('.save_button').on('click', function(event) {        
             $('.edit_text').attr("contenteditable", "false");
        });
});
/*function saveEdits() {  
            var editElem = $('.edit_div');   
            var userVersion = editElem.innerHTML;
            localStorage.userEdits = userVersion; 
            $('.edit_text').attr("contenteditable", "false");
};*/

function checkEdits() {

//find out if the user has previously saved edits
if(localStorage.userEdits!=null)
document.getElementById("edit").innerHTML = localStorage.userEdits;
}
