    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
        <style>
            div.animation {
                width: 100px;
                height: 100px;
                position: relative;
                background-color: red;
                animation-name: test3;
                animation-duration: 5s;
                animation-iteration-count: infinite;
                animation-direction: alternate-reverse;
            }
            @keyframes test1 {
                from {background-color: red;}
                to {background-color: yellow;}
            }
            @keyframes test2 {
                0% {background-color: red;}
                25% {background-color: yellow;}
                50% {background-color: green;}
                100% {background-color: blue;}
            }
            @keyframes test3 {
                0% {background-color: red; left:0px; top:0px;}
                10% {background-color: yellow; left:100px; top:0px;}
                20% {background-color: yellow; left:100px; top:0px;}
                30% {background-color: green; left:200px; top:0px;}
                40% {background-color: green; left:200px; top:0px;}
                50% {background-color: blue; left:300px; top:0px;}
                55% {background-color: darkblue; left:300px; top:0px;}                
                60% {background-color: darkgreen; left:200px; top:0px;}                
                70% {background-color: darkgreen; left:200px; top:0px;}                
                80% {background-color: darkgoldenrod; left:100px; top:0px;}                
                90% {background-color: darkgoldenrod; left:100px; top:0px;}                
                100% {background-color: darkred; left:0px; top:0px;}
            }
        </style>
    </head>
   
    <body>

    <div class="animation">
            LOADING...
    </div>
    
    <?= "Short syntax for ECHO";?>
    
    <?php 
        echo "<p style='color:red; font-size:300%;'>Hello <b style=color:blue>World</b>!!!</p>";
        echo "<h1>Hello LAUNCH Time!</h1>";
        echo "<hr>";
        echo "PHP Version is: ";
        echo phpversion();
        echo "<hr>";
        phpinfo();
    ?>
    </body>
    </html>
