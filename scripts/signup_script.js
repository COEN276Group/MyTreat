
function previewFile(){
       var preview = document.querySelector('img');
       var file    = document.querySelector('input[type=file]').files[0]; 
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
       }

       if (file) {
           reader.readAsDataURL(file); 
       } else {
           preview.src = "";
       }
  }

function passwordValidate(){
  var psw1 = document.getElementById("psw1").value;
  var psw2 = document.getElementById("psw2").value;
  if(psw1==""||psw1==null){
    alert("Please enter a password in the first field");
  }
  else{
    if(psw1!=psw2){
      alert("The passwords you entered are not the same");
    }
  }

}
