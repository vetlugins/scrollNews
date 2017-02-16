<?php

    include_once 'php/db/database.php';

    if($_GET and !empty($_GET['url'])){
        $news = $db->SelectRow("SELECT * FROM news WHERE url='".$_GET['url']."'");
    }else{
        $news = $db->SelectRow('SELECT * FROM news ORDER BY id DESC LIMIT 1');
        header('LOCATION: /?url='.$news->url);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $news->title ?></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">

    <script src="js/scrollNews.js"></script>

    <style>
        .image{
            height: 200px;
            overflow: hidden;
        }
        img{
            width: 100%;
        }
        .text{
            text-align: justify;
        }
        .slider{
            position: relative;
        }
        .slider > .slide{
            /*position: fixed;*/
            width: 1100px;
            box-shadow: 0 0  5px #111;
            background: #fff;
        }
        /*.slider > .slide.current{
            position: absolute;
            z-index: 9998;
        }*/
        .slider > .slide .text img{
            display: none;
        }
        .dark{
            position: absolute;
            background: #111111;
        }
        .visible{
            opacity:1;
        }

    </style>


</head>
<body>

<div class="container">

    <div class="slider">
        <?php
        echo '<div class="slide current p-1 mb-1" data-id="'.$news->id.'" data-url="'.$news->url.'">
                    <h4>'.$news->title.'</h4>
                    <h5>'.$news->date.'</h5>
                    <div class="group-image mt-2 mb-2">
                        <div class="col-md-4 pl-0 image"><img src="images/b-1.jpg"></div>
                        <div class="col-md-4 pl-0 image"><img src="images/b-3.jpg"></div>
                        <div class="col-md-4 pl-0 image"><img src="images/b-2.jpg"></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="text">
                        '.$news->text.'
                    </div>

                    <div class="group-image mt-2">
                        <div class="col-md-4 pl-0 image"><img src="images/b-1.jpg"></div>
                        <div class="col-md-4 pl-0 image"><img src="images/b-3.jpg"></div>
                        <div class="col-md-4 pl-0 image"><img src="images/b-2.jpg"></div>
                        <div class="clearfix"></div>
                    </div>
                  </div>';
        ?>
    </div>

</div>

</body>
</html>