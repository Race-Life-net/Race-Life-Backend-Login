<html lang="en-GB">
  <head>
    <title>Race-Life | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/animations.css">
    <link rel="stylesheet" href="./assets/fonts/fonts.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
  </head>
  <body>
       <div class="loader">
         <img src=""
</div>
    <div id="error">
      <?
$count_my_page = ("./assets/hitcounter/hits.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);
// $sno=$hits[0];
// echo $sno;
?>
    </div>
    <div id="content">
    </div>
       <script>
            const loader = document.querySelector(".loader");
            window.onload = function(){
              setTimeout(function(){
                loader.style.opacity = "0";
                setTimeout(function(){
                  loader.style.display = "none";
                }
                           , 500);
              }
                         ,1500);
            }
          </script>
  </body>
</html>