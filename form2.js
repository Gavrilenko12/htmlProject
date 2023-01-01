var btn = document.querySelector('#btn'),
radio_1 = document.querySelector('#radio_1'),
radio_2 = document.querySelector('#radio_2'),
radio_3 = document.querySelector('#radio_3'),
range = document.querySelector('.demo').innerHTML = 500;
count = document.querySelector('#select1');
    // range slider
    range.onchange = function(){
        var range = document.querySelector('.demo').innerHTML = range.value;
      }
    // Basic function  
  btn.onkeydown = function(){
    if (radio_1.checked || radio_2.checked || radio_3.checked) {
        if (radio_1.checked){ 
            radio_1.value = 500; }
          else 
          {
            radio_1.value = 0;
        }
        if (radio_2.checked){ 
            radio_2.value = 400; }
          else 
          {
            radio_2.value = 0;
        }
        if (radio_3.checked){ 
            radio_3.value = 600; }
          else 
          {
            radio_3.value = 0;
        }
   
  var sum = radio_1.value + radio_2.value +radio_3.value;
  out.innerHTML = sum;
    }else{
  alert('Выберите хоть одну галочку');
  }
  }