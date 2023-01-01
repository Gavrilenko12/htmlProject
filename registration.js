function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
document.form1.email1.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.email1.focus();
return false;
}
}

function verifyPassword(inputText1,inputText2) 
{  
    let flag = true;
    var pw = inputText1.value; 
    var pw2 = inputText2.value;
     
    if(pw == "") {  
       alert("Fill the password please!"); 
       flag = false;  
    }  
     
   
    if(pw.length < 5) {  
        alert("Password length must be atleast 8 characters!");
       flag = false;  
    }  
    
  
    if(pw.length > 15) {  
       alert("Password length must not exceed 15 characters!");  
       flag = false;  
    }   
    if(pw != pw2)  
    {   
      alert("Passwords did not match");
      flag = false;

    } 
if (flag == true){
    window.location.href = "unlock";
}

  }
  