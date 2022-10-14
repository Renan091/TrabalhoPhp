<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Galeria de Cômodos </title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
      
      /* #img1{
        background-image: url(sala/sala1.jpg.jpg);
        background-size: cover;
      } */
      
      div{
        border: 1px solid black;
        height: 300px;
      }
    </style>
</head>
<body>

<div class="container">
  <?php
  $one = scandir('../trabalhoPHP');
  array_shift($one);
  array_shift($one);
  foreach($one as $two){
    if(strpos($two,'.')){}
    else{
        echo " <div class=\"row\">";
        $tree = scandir($two);
        array_shift($tree);
        array_shift($tree);
        foreach($tree as $four){
          echo " <div class=\"col-sm\" style=\"background-image: url($two/$four);
          background-size: cover;\">
          </div>";
      }
      echo "</div>";
    }
  }

  ?>
</div>
<script src="bootstrap.bundle.js"></script>
</body>
</html>