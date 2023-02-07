<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/classes.css">
    <link rel="stylesheet" href="../style/basic.css">
    <link rel="stylesheet" href="../style/timeline.css">
    <link rel="icon" type="image/x-icon" href="../img/cup.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Sara's class projects</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <div class="container">
      <div class="row botones" id="back">
        <a style="--clr:#dc00d4" href="../index.html" data-text="&nbsp;Go&nbsp;Back">&nbsp;Go&nbsp;Back&nbsp;</a>
      </div>
      <div class="row" id="actividades">
      <div class="card-deck">
      <?php
        $dir    = 'classes/';
        $files1 = scandir($dir);
        $array = count($files1);
        for($i = 2; $i < $array; $i++)
        {
          echo 
          '<div class="card col-4">' .
            '<img class="card-img-top" src="..." alt="Card image cap">'.
            '<div class="card-body">'.
              '<h5 class="card-title">'.$files1[$i].'</h5>'.
              '<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>'.
              '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>'.
            '</div>'.
          '</div>';
        }
        ?>
      </div>
      </div>
      <div class="row botones" id="gotop">
        <a style="--clr:#dc00d4" href="" data-text="&nbsp;Go&nbsp;top">&nbsp;Go&nbsp;top&nbsp;</a>
      </div>
    </div>
  </body>
</html>
