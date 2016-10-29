<?php session_start(); ?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title> What do you see </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <nav id="archives">
      <h2 class="centerText">Archives</h2>
      <ul>
        <li> <a href="#">hi</a></li>
        <li> <a href="#">hello</a></li>
        <li> <a href="#">lol</a></li>
      </ul>
    </nav>
    <div id="div2">
      <?php include 'menu.html'; ?>
      <div id="content">
      <h1 class="centerText"> What Do You See? </h1>
        <h3 class="centerText">a picture is worth a thousand words</h3>
      <form id="uploadForm">
        <fieldset>
          <legend>Upload</legend>
          <div id="uploadPart">
            <div id="dragFile" class="centerText">Drag your picture here</div>
            <label for="fileselect">Or select your files</label>
            <input type="file" name="fileselect[]" id="fileSelect"/>
          </div>
          <input type="text" class="centerText" placeholder="Title my Picture" id="toUpload"/>
          <input type="button" value="Upload"/>
        </fieldset>
      </form>
      <div id="img1" class="images">
        <img src="http://www.w3schools.com/css/trolltunga.jpg" alt="myIMG">
        <h4> Author : First </h4>
        <div class="commentSection">
          <div id="comment-n" class="comment">
            <p class="author">
              Anonymous -- 02/10/2016
            </p>
            <img class="likes" alt="likes" src="css/pictures/heart-icon-valentine-2.png" >
            <p class="commentText">
              Hi David, I find your picture particularily impressive :D
            </p>
          </div>
        </div>
        <hr>
      </div>
      <div id="img2" class="images">
        <img src="http://www.w3schools.com/css/trolltunga.jpg" alt="myIMG">
        <h4> Author : First </h4>
      </div>
      <div id="img3" class="images">
        <img src="http://www.w3schools.com/css/trolltunga.jpg" alt="myIMG">
        <h4> Author : First </h4>
      </div>
      <div id="img4" class="images">
        <img src="http://www.w3schools.com/css/trolltunga.jpg" alt="myIMG">
        <h4> Author : First </h4>
      </div>
      <p id="currentTime"></p>
    </div>
    </div>
        <script src="js/index.js"></script>

  </body>
</html>
