<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Profile</title>

    <style>
      .Cover{

        color: black;

      }
      body{
        //background-color: #333;
      }
      #up{
        background-color: #333;
      }
    </style>
  </head>
  <body>
    <div id="up">
      <h1>  </h1>
    </div>
    <div class="Cover">

      <h2>Name: <?php echo $_COOKIE['username'] ?></h2>
      <h2>Role: <?php echo $_COOKIE['role'] ?></h2>
      <h2>Bio: </h2>
    </div>
  </body>
</html>
