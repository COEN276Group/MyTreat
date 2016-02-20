$(document).ready(function(){
        $('.delete').on('click', function(event) {        
             $(this).parent().remove(); 
        });
});


$(document).ready(function(){
        $('.edit_button').on('click', function(event) {        
             $('.edit_text').attr("contenteditable", "true");
        });
});

function saveEdits() {  
            var editElem = $('.edit_div');   
            var userVersion = editElem.innerHTML;
            localStorage.userEdits = userVersion; 
            $('.edit_text').attr("contenteditable", "false");
};

function checkEdits() {

//find out if the user has previously saved edits
if(localStorage.userEdits!=null)
document.getElementById("edit").innerHTML = localStorage.userEdits;
}