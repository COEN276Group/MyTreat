$(document).ready(function(){
        $('.edit_button').on('click', function() {        
             $('.edit_text').attr("contenteditable", "true");
        });
});

$(document).ready(function(){
        $('.save_button').on('click', function(event) {  
            var editElem = document.getElementsByClassName("edit_text");    
            var userVersion = editElem.innerHTML;
            localStorage.userEdits = userVersion;  
             $('.edit_text').attr("contenteditable", "false");
        });
});

function checkEdits() {

//find out if the user has previously saved edits
if(localStorage.userEdits!=null)
document.getElementById("edit").innerHTML = localStorage.userEdits;
}