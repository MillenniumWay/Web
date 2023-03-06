<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="CSS/reg-display.css" />

  <style>
    body {
      background-image: url(background-1418065.png);
      /* Путь к фоновому изображению */
      background-color: white;
      /* Цвет фона */
    }
  </style>

  <title>Register</title>
</head>

<body>
  <div class="block-yuri" style="position:relative; left:550px; top:-30px;">
    <?php
    require "Shablons/header.php";
    ?>
  </div>

  <div class="countainer-main" style="position: relative; left:1px;   background-color: white; box-shadow: -3px 5px 59px 48px rgba(34, 60, 80, 0.3);


">
    <div class=" blocks" id="blocks">
      <h1 style="color: black;">Welcome</h1>
      <form action="Core/SignUp.php" method="post">
        <input required type="text" style="
        box-shadow: 0px 5px 10px 2px rgba(34, 60, 80, 0.2);
              padding-left: 10px;
              font-size: 17px;
              width: 300px;
              height: 30px;
              border-radius: 20px;
              position: relative;
              top: -75px;
            " id="login" name="login" autocomplete="off" placeholder="Login" class="form-control" />
        <br />
        <br />
        <input required type="password" style="
        box-shadow: 0px 5px 10px 2px rgba(34, 60, 80, 0.2);
              padding-left: 10px;
              width: 300px;
              height: 30px;
              border-radius: 20px;
              position: relative;
              top: -75px;
            " id="password" name="password" autocomplete="off" placeholder="Password" class="form-control" />
        <br />
        <br />
        <input autocomplete="off" required type="email" id="email" name="email" placeholder="Email" style="
          box-shadow: 0px 5px 10px 2px rgba(34, 60, 80, 0.2);
              width: 300px;
              height: 30px;
              border-radius: 20px;
              position: relative;
              top: -75px;
              padding-left: 10px;
            " class="form-control" />
        <br />
        <br />
        <button type="submit" class="bottom" id="bottom" style="position: relative; top: -50px; font-size: 25px; border-radius:60px; border-color:white
        ">
          <center>
            Continue</center>
        </button>
      </form>
    </div>
  </div>

  <div class="last-footer" style="position: relative; top:300px; padding:30px;">
    <?php
    require "Shablons/footer.php";
    ?>
  </div>


</body>

</html>