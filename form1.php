<!DOCTYPE html>
<html>
  <head>
    <title>СТО форма 1</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
    <script src="form1.js"></script>
    <div class="testbox">
      <form action="form1db.php" method="post">
        <div class="banner">
          <h1>Форма бронирования покрасочного цеха СТО</h1>
        </div>
        <div class="item">
          <p>ФИО</p>
          <div class="item">
            <input type="text" name="name12" placeholder="Имя" required>
            <input type="text" name="surname12" placeholder="Фамилия" required>
            <input type="text" name="patro12" placeholder="По отчеству" required>
          </div>
        </div>
        <div class="item">
          <p>Электронная почта</p>
          <input type="text" name="email12"required/>
        </div>
        <div class="item">
          <p>Телефон</p>
          <input type="text" name="phone12"required/>
        </div>
        <div class="item">
            <div class="item">
            <select name="country12">
              <option value="">Страна</option>
              <option value="1">Украина</option>
              <option value="2">Грузия</option>
              <option value="3">Польша</option>
              <option value="4">Молдова</option>
              <option value="5">Чехия</option>
            </select>
            <input type="text" name="town12" placeholder="Город" />
          </div>
        </div>
        <div class="t">
        <div class="question">
          <p>Тип автомобиля:</p>
          <div class="">
            <div>
                <input type="radio" value="1" id="radio_1" name="vehicle" />
                <label for="radio_1" class="radio"><span>Легковой автомобиль(1-4 человека)</span></label>
              </div>
            <div>
              <input type="radio" value="2" id="radio_2" name="vehicle" />
              <label for="radio_2" class="radio"><span>Лимузин (8-12 людей)</span></label>
            </div>
            <div>
              <input type="radio" value="3" id="radio_3" name="vehicle" />
              <label for="radio_3" class="radio"><span>Внедорожник (6-7 людей)</span></label>
            </div>
            <div>
              <input type="radio" value="4" id="radio_4" name="vehicle" />
              <label for="radio" class="radio"><span>Микроавтобус (12-15 людей)</span></label>
            </div>
            <div>
              <input type="radio" value="5" id="radio_5" name="vehicle" />
              <label for="radio_5" class="radio"><span>Автобус (50+ людей)</span></label>
            </div>
            <div>
              <input type="radio" value="6" id="radio_6" name="vehicle" />
              <label for="radio_6" class="radio other"><span>Другой:</span></label>
              
            </div>
          </div>
        </div>
        <div class="item">
          <p>Выберите дату:</p>
          <input type="date" name="date12" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
          <p>Выберите время:</p>
          <input type="time" name="time12" required/>
          <i class="fas fa-clock"></i>
        </div>
    
        <div class="item">
          <p>Комментарии к заказу(необязательно):</p>
          <textarea name="comm12" rows="3"></textarea>
        </div>
        <div class="btn-block">
          <button type="submit" onclick="ValidateEmail(document.form1.email1)" href="/">SEND</button>
        </div>
    </div>
      </form>
    </div>
    <div class="container signin">
      <div id="child"><p class="larger">Do you need help? <a href="http://localhost:8080/Newtopic1.html">Help</a></p></div>
    </div>
  </body>
</html>