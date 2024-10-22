<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?><!DOCTYPE html>
<html>
  <head>
    <title>Welcome to AWS Technical Essentials v4.1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>葉耀鈞的自我介紹</title>
    <link rel="stylesheet" href="index.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

  	<div class="row">
  		<div class="col-md-12">

      <?php include('menu.php'); ?>
      <div class="jumbotron">
      <p>
      <?php include("get-index-meta-data.php"); ?>

      <hr />

      <?php include('get-cpu-load.php'); ?>
			</p>
      <p>
      </p>
    </div>
    </div>
    </div>
    </div>

    <div class="container">
        <header class="header-with-image">
            <div class="header-content">
                <h1>你好！我是葉耀鈞 歡迎來到我的網站</h1>
            </div>
            <div class="header-image">
                <img src="image2.jpg" alt="頭像圖片">
            </div>
        </header>

        <section class="introduction">
            <div class="image-container">
                <img src="images.jpg" alt="最難的問題是每一天晚餐要吃什麼">
            </div>
            <div class="info">
                <h1>個人簡介：</h1>
                <p>我是資工三甲的同學，學號是29號，生日就不說了，平常最喜歡看漫畫，韓漫和日漫都有涉略，
                    另外，也喜歡打戰旗和打牌，歡迎來找我聊天，Email:andrew535456@gmail.com
                </p>
            </div>
        </section>


        <section class="video-section">
            <h2>這真的不是我</h2>
            <img src="LOL.gif" alt="搞笑圖片">
            <div class="video-and-audio">
                <video controls>
                    <source src="IMG_1314.mov" type="video/mp4">
                </video>
                <div class="audio-player">
                    <h3>打遊戲菜怎麼了嘛(聲音超小)</h3>
                    <audio controls>
                        <source src="Cloud.m4a" type="audio/mp3">
                    </audio>
                </div>
            </div>
        </section>

        <footer>
            <p>&copy; 2024 本人也就是我 還是抽卡必歪</p>
        </footer>
    </div>


  </body>
</html>
