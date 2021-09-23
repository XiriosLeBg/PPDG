<?php

?>


<!DOCTYPE html>
<html lang="en">
<head >
    <link rel="stylesheet" href="Style.css">
    <meta name="viewport" content="width=device-width,initial-scale=0.35,maximum-scale=0.35,user-scalable=no"/>
    <meta charset="UTF-8">
    <title>PPDG</title>
</head>
<body  class="Background" onload="ChangeImagesOne()">
<script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

<h1 class="Title">
    les Petipas du Gard
</h1>
<div class="BackgroundImageMoving" id="divOne">
<article class="RightDonnee">

    <p class="Text">
        354 route Baraques De Fons<br>
        30730 SAINT MAMERT DU GARD
    </p>
    <p class="Text">
        Telephone : xxxxxx<br>
        Mail: xxxx
    </p>
</article>
    <article class="RightDonnee">
        <p class="Text">
            Histoire?xxxx
        </p>
    </article>
    <article class="RightDonnee">
        <p class="Text">
            Price card ? xxxx
        </p>
    </article>
</div>
    <img alt="" class="LowImages" src="Images/Dancer3.jpg" id="images" style="margin: auto">
    <button id="ButtonLeft" onclick="ChangeImagesOne()" class="Button" style="margin-left: 45%" ></button>
    <button id="ButtonMidle" onclick="ChangeImagesTwo()" class="Button" style="margin-left: 5%"></button>
    <button id="ButtonRight" onclick="ChangeImageThree()" class="Button" style="margin-left: 5%"></button>
    <article class="MarginBottom">x</article>
    <script type="text/javascript">
        function ChangeImagesOne(){
                    document.getElementById("images").src = "Images/Dancer4.jpg";
                    document.getElementById("ButtonLeft").style.border = "10px solid black";
                    document.getElementById("ButtonMidle").style.border = "10px solid #969ce6";
                    document.getElementById("ButtonRight").style.border = "10px solid  #969ce6";
        }
        function ChangeImagesTwo(){
                    document.getElementById("images").src = "Images/Dancer3.jpg";
            document.getElementById("ButtonLeft").style.border = "10px solid #969ce6";
            document.getElementById("ButtonMidle").style.border = "10px solid black";
            document.getElementById("ButtonRight").style.border = "10px solid  #969ce6";
        }
        function ChangeImageThree(){
            document.getElementById("images").src = "Images/Dancer5.jpg";
            document.getElementById("ButtonLeft").style.border = "10px solid #969ce6";
            document.getElementById("ButtonMidle").style.border = "10px solid #969ce6";
            document.getElementById("ButtonRight").style.border = "10px solid black";
        }
    </script>
<script type="text/javascript">
   var moving = document.getElementById("divOne")
   window.addEventListener("scroll", function (){
       moving.style.backgroundPositionX =+window.pageYOffset / 5+'px'
   })
</script>
</body>
</html>
