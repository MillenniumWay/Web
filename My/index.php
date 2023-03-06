<!DOCTYPE html>

<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>MainPage</title>
  <link rel="stylesheet" href="CSS/index-all.css">
  <style>
    body {
      background-image: url(background-1418065.png);
      /* Путь к фоновому изображению */
      background-color: white;
      /* Цвет фона */
    }
  </style>
</head>

<body>

  <div class="head-div-index" style="position: relative; left:85px; 
   height:50px;">
    <?php
    require "Shablons/header.php";
    ?>
  </div>


  <div class="main-class" style="position:relative; top:150px; right:-80px;">
    <div class="top-box" style="position: relative; background-color:aliceblue; height:450px; border-radius:70px; width:1000px; right: -250px;   height: 500px;
">
      <div class="box-logo" style=" box-shadow: 0px 5px 10px 2px rgba(34, 60, 80, 0.2);
">

        <h1>.script/company</h1>

      </div>

      <div class="box-info" style="position:relative; left: 750px; box-shadow: 0px 5px 10px 2px rgba(34, 60, 80, 0.2); top:180px;
      "></div>
      <?php
      if ($_COOKIE['user'] == '') :
      ?>
        <div class="box-login" style="position: relative; left:750px;box-shadow: 0px 5px 10px 2px rgba(34, 60, 80, 0.2);top:-250px ">

          <br />
          <br />
          <center>
            <form action="Core/Login.php" method="post">
              Login: <input style="
              font-size: 17px;
              width: 200px;
              height: 30px;
              border-radius: 20px;
              position: relative;

            " type="text" id="login" name="login" class="form-control " required />
              <br />
              <br />
              Pass: <input style=" 
              font-size: 17px;
              width: 200px;
              height: 30px;
              border-radius: 20px;
              position: relative;
          
            " type="password" kk" id=" password" name="password" class="form-control" required />
              <br />
              <br />
              <button type="submit" style="position: relative; height:50px; width:100px;
            top: -5px; left:1px;" class="button-28" "><center>Log in  </center></button>
          </form>
      

        </div>
        <?php else : ?>
        
          <div class=" box-login" style="
          position: relative; 
          left:750px; 
          box-shadow: 0px 5px 10px 2px rgba(34, 60, 80, 0.2);
          top:-250px ">
                <br>
                <center>

                  <p>Username : <?= $_COOKIE['user'] ?> </p>

                  <p>Eamil: <?php
                            $mysql = new mysqli('localhost', 'root', 'root', 'mybase');
                            $about =  $mysql->query("SELECT * FROM `saymyname`");
                            $info = $about->fetch_assoc();
                            echo  $info['email'];
                            ?> </p>
                </center>
                <p style="position:relative;  
                top:200px; 
                font-family: Verdana, sans-serif;
                "> Чтобы выйти нажмите <a href=" Core/exit.php" class="button1"> Здесь </a></p>
          </center>
        </div>
      <?php endif; ?>
    </div>

    <div class=" box-one"> </div>
    <div class="box-two"></div>
    <div class="box-three"></div>
  </div>
  </div>

  <div class="footer-last">
    <?php
    require "Shablons/footer.php";
    ?>

  </div>
</body>

</html>