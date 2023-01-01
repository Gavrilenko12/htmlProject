<?php include 'C:\xampp\htdocs\lmv\counting.php';?>

<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Review</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="css/index.css">
    <link href="css/light-theme.css" rel="stylesheet" id="theme-link">
    <style>
    form {
        margin: 0 auto;
        padding: 20px;
        width: 450px;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 0 10px #ccc;
    }
    fieldset {
        margin-bottom: 15px;
        padding: 10px;
        border: 1px solid #34495e;
        border-radius: 5px;
    }
    fieldset legend {
        color: #34495e;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input,
    select,
    output,
    textarea {
        margin: 0 0 10px 0;
        padding: 2px 5px;
        width: 95%;
        border: 1px solid #ccc;
        border-radius: 5px;
        vertical-align: middle;
        font-family: "Roboto";
    }
    input,
    select {
        height: 24px;
    }
    output {
        display: inline-block;
        margin: 0 5px 10px 0;
        width: 30px;
        height: 20px;
        text-align: center;
    }
    select[multiple] {
        height: 100px;
    }
    input[type="submit"],
    input[type="reset"] {
        display: inline-block;
        margin: 0 5px;
        padding: 6px 15px;
        width: auto;
        height: auto;
        border: none;
        border-radius: 5px;
        background: #2c3e50;
        color: #fff;
    }
    input[disabled] {
        background-color: #ebebe3;
    }
    .one-third-width {
        width: 33.3%;
    }
    .two-third-width {
        width: 66.6%;
    }
    .half-width {
        width: 50%;
    }
    .one-third-width,
    .two-third-width,
    .half-width {
        display: inline-block;
        margin-right: -4px;
    }
    .one-third-width input,
    .two-third-width select {
        width: 80%;
    }
    .half-width input,
    .half-width select {
        width: 80%;
    }
    .half-width input[type="range"] {
        width: 65%;
    }
    .output-area {
        vertical-align: top;
    }
    .buttons {
        margin-top: 10px;
        text-align: center;
    }
    body {
    	min-width: 553px;
    }
    main {
        min-height: 400px;
    }
    .signin {
        position: relative;
        background-color: #f1f1f1;
        height: 120px;
        line-height: 50px; 
        text-align: center;
        font-size: x-large;
      }
    #child{
        font-size: x-large;
        position: absolute;
        
            top: 5%;
        
            left: 40%;
            
        
            
    }

    .larger {
        font-size: larger;
    }
    </style>
</head>
<body class="dark-theme || light-theme">
    <?php include 'C:\xampp\htdocs\lmv\show_stats.php';?>
    <script src="form1.js"></script>
    <div id="header"></div>
    <div id="products"></div>
    <div id="shopping"></div>
    <!-- Constants and Utils -->
    <script src="constants/catalog.js"></script>
    <script src="constants/root.js"></script>
    <script src="utils/localStorageUtil.js"></script>
    <!-- Header -->
    <script src="components/Header/Header.js"></script>
    <link rel="stylesheet" href="components/Header/Header.css">
    <html>


            <main>
                <form action="reviews1.php" method="post" oninput="daysoutput.value=dayscount.value">
                <fieldset>
                    <legend>Личные данные</legend>
                    <div class="half-width">
                        <label>ID отзыва</label>
                        <input type="text"  id="id12" value="<?php echo $row['views']?>" name="id12" disabled >
                    </div>
                    <div class="half-width">
    			        <label for="1">Имя Покупателя</label>
    			        <input id="name12" name="name12" type="text" value="ФИО">
    		        </div>
    		    </fieldset>
    		    <fieldset>
                    <legend>Отзыв о услуге</legend>
    			    <div class="half-width">
    			    <label>Оценка ремонта автомобиля</label>
        			    0 <input type="range" min="0" max="10" step="1" name="dayscount" value="10"> 10
        			</div>
        			<div class="half-width output-area">
        			      <output id="value12" name="daysoutput" name="value12">10</output>
        			</div>
        			<label for="4">Текст отзыва</label>
        			<textarea id="4" id="text12" name="text12" rows="5">Спасибо за покраску!</textarea>
                </fieldset>
                
            		<div class="buttons">
            		    <input type="submit" value="Оценить">
            		    <input type="reset" value="Сбросить">
        			</div>
    		    </form>
                <div class="container signin">
                    <div id="child"><p class="larger">Do you need help? <a href="http://localhost:8080/Newtopic1.html">Help</a></p></div>
                  </div>
            </main>
            <footer class="page-footer"></footer>
        </body>
    </html>
</body>
</html>