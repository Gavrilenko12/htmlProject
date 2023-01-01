function verifylogin(inputText1,inputText2) 
{  
    let flag = true;
    var pw = inputText1.value; 
    var pw2 = inputText2.value;
     
    if(pw == "" || pw2 == "") {  
       alert("Fill login and password please!"); 
       flag = false;  
    }  
   
  }