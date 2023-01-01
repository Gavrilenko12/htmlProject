<!DOCTYPE html>
<html>
  <head>
    <title>СТО форма 2</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js" integrity="sha512-zP5W8791v1A6FToy+viyoyUUyjCzx+4K8XZCKzW28AnCoepPNIXecxh9mvGuy3Rt78OzEsU+VCvcObwAMvBAww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
  
  <?php
if(isset($_POST["vehicle[]"])){
     
    $technologies = $_POST["vehicle[]"];
    foreach($technologies as $item) echo "$item<br />";   
}
?>
    <script src="form1.js"></script>
    <div class="testbox">
      <form action="form2db.php" method="post">
        <div class="banner">
          <h1>Форма бронирования обслуживания автомобиля на СТО</h1>
        </div>
        <div class="item">
          <p>ФИО</p>
          <div class="item">
            <input type="text" name="name12" id="text11" placeholder="Имя" required/>
            <input type="text" name="surname12" id="text11" placeholder="Фамилия" required/>
            <input type="text" name="patro12" id="text11" placeholder="По отчеству" required/>
          </div>
        </div>
        <div class="item">
          <p>Электронная почта</p>
          <input type="text" name="email12" id="text11" required/>
        </div>
        <div class="item">
          <p>Телефон</p>
          <input type="text" name="phone12" id="text11" required/>
        </div>
        <div class="item">
            <div class="item">
            
            <select id="select1" name="country12">
              <option value="">Страна</option>
              <option value="4">Украина</option>
              <option value="2">Грузия</option>
              <option value="3">Польша</option>
              <option value="4">Молдова</option>
              <option value="5">Чехия</option>
            </select>
            <input type="text" name="town12" placeholder="Город" id="text11" />
          </div>
        </div>
        <div class="t">
            <div class="">
              <p>Тип услуг: </p>
              <div class="">
                <div>
                    <input type="checkbox" value="1" id="radio_1" name="vehicle[]" />
                    <label for="radio_1" class="radio"><span>ТО</span></label>
                  </div>
                <div>
                  <input type="checkbox" value="2" id="radio_2" name="vehicle[]" />
                  <label for="radio_2" class="radio"><span>Ремонт</span></label>
                </div>
                <div>
                  <input type="checkbox" value="3" id="radio_3" name="vehicle[]" />
                  <label for="radio_3" class="radio"><span>Детейлинг</span></label>
                </div>
                <div>
                  <input type="checkbox" value="4" id="radio_4" name="vehicle[]" />
                  <label for="radio_3" class="radio"><span>Замена масла</span></label>
                </div>
                <div>
                  <input type="checkbox" value="5" id="radio_5" name="vehicle[]" />
                  <label for="radio_3" class="radio"><span>Диагностика и ремонт подвески</span></label>
                </div>
                <div>
                  <input type="checkbox" value="6" id="radio_6" name="vehicle[]" />
                  <label for="radio_3" class="radio"><span>Диагностика и ремонт ходовой</span></label>
                </div>
                <div>
                  <input type="checkbox" value="7" id="radio_7" name="vehicle[]" />
                  <label for="radio_3" class="radio"><span>Компьютерная диагностика</span></label>
                </div>
                <div>
                  <input type="checkbox" value="8" id="radio_8" name="vehicle[]" />
                  <label for="radio_3" class="radio"><span>Развал схождение</span></label>
                </div>
                <div>
                  <input type="checkbox" value="9" id="radio_9" name="vehicle[]" />
                  <label for="radio_3" class="radio"><span>Ремонт тормозов</span></label>
                </div>
                <div>
                  <input type="checkbox" value="0" id="radio_10" name="vehicle[]" />
                  <label for="radio_3" class="radio"><span>Диагностика и обслуживание двигателя</span></label>
                </div>
                Количество дней :
                  <div class="slidecontainer">
                    0<input type="range" min="1" max="10" value="5" name="days12" class="slider" id="myRange">10
                    <p>Value: <span id="demo" name="days12"></span></p>
                    Итого : <span class="sum" name="value12"></span>долларов.
                  </div>
                  
                  <script>
                  var slider = document.getElementById("myRange");
                  var output = document.getElementById("demo");
                  output.innerHTML = slider.value;
                  
                  slider.oninput = function() {
                    output.innerHTML = this.value;
                  }
                  </script>

           
              </div>
            </div>
    
        <div class="item">
          <p>Комментарии к заказу:</p>
          <textarea name="comm12" rows="3"></textarea>
        </div>
        <div class="btn-block">
          <button type="submit" onclick="ValidateEmail(document.form1.email1)" href="/">SEND</button>
        </div>
    </div>
    <div class="container signin">
      <div id="child"><p class="larger">Do you need help? <a href="http://localhost:8080/Newtopic1.html">Help</a></p></div>
    </div>
      </form>
      
    </div>
    <script>
      $('#radio_1,#radio_2,#radio_3,#radio_4,#radio_5,#radio_6,#radio_7,#radio_8,#radio_9,#radio_10,#select1,#myRange').on('change',function(){
        sum();
      })
      function sum(){
        var radio1 = $('#radio_1');
        var radio2 = $('#radio_2');
        var radio3 = $('#radio_3');
        var radio4 = $('#radio_4');
        var radio5 = $('#radio_5');
        var radio6 = $('#radio_6');
        var radio7 = $('#radio_7');
        var radio8 = $('#radio_8');
        var radio9 = $('#radio_9');
        var radio10 = $('#radio_10');
        var select = $('#select1').val();
        var range = $('#myRange').val();
        if(radio1.prop('checked')){
          radio1.val(90);
        
        }else{
          radio1.val(0);
        }
        if(radio2.prop('checked')){
          radio2.val(110);
        }else{
          radio2.val(0);
        }
        if(radio3.prop('checked')){
          radio3.val(150);
        }else{
          radio3.val(0);
        }
        if(radio4.prop('checked')){
          radio4.val(75);
        
        }else{
          radio4.val(0);
        }
        if(radio5.prop('checked')){
          radio5.val(60);
        
        }else{
          radio5.val(0);
        }
        if(radio6.prop('checked')){
          radio6.val(150);
        
        }else{
          radio6.val(0);
        }
        if(radio7.prop('checked')){
          radio7.val(190);
        
        }else{
          radio7.val(0);
        }
        if(radio8.prop('checked')){
          radio8.val(40);
        
        }else{
          radio8.val(0);
        }
        if(radio9.prop('checked')){
          radio9.val(40);
        
        }else{
          radio9.val(0);
        }
        if(radio10.prop('checked')){
          radio10.val(70);
        
        }else{
          radio10.val(0);
        }
        var sum = (Number(select)*50+(100-15*Number(range))+Number(radio1.val()) +Number(radio2.val()) +Number(radio3.val()) +Number(radio4.val()) +Number(radio5.val()) +Number(radio6.val()) +Number(radio7.val()) +Number(radio8.val()) + Number(radio9.val()) + Number(radio10.val()));
        console.log(sum);
        $('.sum').text(sum);
      }
    </script>
  </body>
</html>