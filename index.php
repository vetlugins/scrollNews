<?php
    include_once 'php/CheckOldBrowser/useragent.php';
    include_once 'php/CheckOldBrowser/CheckBrowser.php';


    $userAgent = new UserAgent($_SERVER['HTTP_USER_AGENT']);

    $myBrowser = checkBrowser($userAgent->getBrowser(),$userAgent->getVersion());

    if($myBrowser === true){
        include_once 'php/CheckOldBrowser/oldView.php';
        die;
    }

    echo $userAgent->getBrowser().' '.$userAgent->getVersion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Scroll News</title>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="js/scrollNews.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

    <!--[if IE 8]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/media.js"></script>
    <![endif]-->

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
            position: fixed;
            width: 1100px;
            box-shadow: 0 0  5px #111;
            background: #fff;
        }
        .slider > .slide.current{
            position: absolute;
            z-index: 9998;
        }
    </style>


</head>
<body>

<script type="text/javascript" src="https://yastatic.net/browser-updater/v1/script.js" charset="utf-8"></script><script>var yaBrowserUpdater = new ya.browserUpdater.init({"lang":"ru","browsers":{"yabrowser":"15.12","chrome":"50","ie":"10","opera":"37","safari":"8","fx":"46","iron":"35","flock":"Infinity","palemoon":"25","camino":"Infinity","maxthon":"4.5","seamonkey":"2.3"},"theme":"red"});</script>

<div class="container">

    <div class="slider">
        <div class="slide current p-1 mb-1">

            <h4>Cars. Lorem Ipsum</h4>
            <div class="group-image mt-2 mb-2">
                <div class="col-md-4 pl-0 image"><img src="images/foto2.png"></div>
                <div class="col-md-4 pl-0 image"><img src="images/foto19.png"></div>
                <div class="col-md-4 pl-0 image"><img src="images/1227635_drift-japan.jpg"></div>
                <div class="clearfix"></div>
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit nisi, tempor in gravida vel, maximus nec felis. Nam justo tellus, euismod non metus sed,
                    mattis rutrum tortor. Fusce feugiat euismod orci in pulvinar. Suspendisse pharetra commodo turpis, vel dictum risus pharetra eu. Suspendisse potenti. Duis dapibus
                    quam eu fermentum consequat. Pellentesque sed nunc in nisi scelerisque consectetur. Maecenas maximus euismod aliquet. Fusce eu nunc quis augue feugiat consequat at
                    ut purus. Pellentesque nulla velit, viverra at egestas vel, malesuada non odio. Donec porttitor porta venenatis. Donec venenatis enim libero, a dictum risus elementum a.
                    Fusce vel porta diam, at egestas quam. Etiam maximus feugiat hendrerit. Maecenas sit amet risus porttitor, malesuada dui lacinia, sagittis lacus. Sed at ligula non ipsum
                    sodales iaculis.</p>

                <p>Pellentesque dapibus semper vestibulum. Ut eget orci orci. Phasellus tristique sed tellus nec sagittis. Vestibulum lobortis eros quis quam ornare venenatis.
                Sed quis ornare tortor, id pharetra tellus. Aliquam ac consectetur nibh. Nunc in lobortis felis, suscipit porta nisi. Phasellus quis convallis quam. Sed sollicitudin
                a elit ac commodo. Sed venenatis tincidunt sodales.</p>

                <p>Maecenas ultricies orci quis lorem scelerisque efficitur. Aliquam luctus at risus quis tempor. Phasellus dapibus pharetra metus id varius. Suspendisse ipsum nibh,
                    maximus et augue id, rutrum porttitor enim. Sed ut felis consectetur, elementum elit vel, imperdiet odio. Nunc porttitor ultricies elit, id tincidunt ex molestie eget.
                    Nunc enim enim, pharetra a cursus id, consequat mattis massa.</p>

                <p>Aliquam blandit augue non tellus facilisis, sit amet ornare orci aliquet. Sed accumsan posuere efficitur. Praesent gravida sem ac turpis ornare faucibus. Donec nulla
                    sapien, varius vitae augue vel, ornare condimentum mi. Quisque ac tempor leo. Quisque euismod facilisis arcu, sed varius ligula ullamcorper eu. Ut a nisi eget nibh dapibus
                    efficitur vitae sit amet augue. Quisque in neque in arcu cursus mollis eu vitae sapien. Nulla pretium ex sit amet dui aliquet, vel placerat ligula aliquet.</p>

                <p>Fusce quis lectus varius, vulputate nunc vel, elementum augue. Ut ipsum libero, ultrices id tortor vitae, gravida egestas massa. Proin nec ex id tortor viverra tincidunt.
                    Nam rhoncus tempor varius. Phasellus at lacus magna. Quisque et bibendum libero. Vivamus finibus accumsan suscipit. In sem tellus, sodales quis ante vitae, auctor pellentesque
                    urna. Suspendisse hendrerit maximus gravida. Pellentesque tincidunt tellus nec arcu euismod scelerisque. Praesent a aliquet libero. Ut a nisl tincidunt nulla tincidunt lobortis.
                    Aliquam erat volutpat. Curabitur ullamcorper leo id lobortis dignissim. Nam viverra dui viverra pulvinar eleifend. Pellentesque a nulla ut mauris elementum volutpat in ac metus.</p>
                <p>Pellentesque dapibus semper vestibulum. Ut eget orci orci. Phasellus tristique sed tellus nec sagittis. Vestibulum lobortis eros quis quam ornare venenatis.
                    Sed quis ornare tortor, id pharetra tellus. Aliquam ac consectetur nibh. Nunc in lobortis felis, suscipit porta nisi. Phasellus quis convallis quam. Sed sollicitudin
                    a elit ac commodo. Sed venenatis tincidunt sodales.</p>

                <p>Maecenas ultricies orci quis lorem scelerisque efficitur. Aliquam luctus at risus quis tempor. Phasellus dapibus pharetra metus id varius. Suspendisse ipsum nibh,
                    maximus et augue id, rutrum porttitor enim. Sed ut felis consectetur, elementum elit vel, imperdiet odio. Nunc porttitor ultricies elit, id tincidunt ex molestie eget.
                    Nunc enim enim, pharetra a cursus id, consequat mattis massa.</p>

                <p>Aliquam blandit augue non tellus facilisis, sit amet ornare orci aliquet. Sed accumsan posuere efficitur. Praesent gravida sem ac turpis ornare faucibus. Donec nulla
                    sapien, varius vitae augue vel, ornare condimentum mi. Quisque ac tempor leo. Quisque euismod facilisis arcu, sed varius ligula ullamcorper eu. Ut a nisi eget nibh dapibus
                    efficitur vitae sit amet augue. Quisque in neque in arcu cursus mollis eu vitae sapien. Nulla pretium ex sit amet dui aliquet, vel placerat ligula aliquet.</p>

                <p>Fusce quis lectus varius, vulputate nunc vel, elementum augue. Ut ipsum libero, ultrices id tortor vitae, gravida egestas massa. Proin nec ex id tortor viverra tincidunt.
                    Nam rhoncus tempor varius. Phasellus at lacus magna. Quisque et bibendum libero. Vivamus finibus accumsan suscipit. In sem tellus, sodales quis ante vitae, auctor pellentesque
                    urna. Suspendisse hendrerit maximus gravida. Pellentesque tincidunt tellus nec arcu euismod scelerisque. Praesent a aliquet libero. Ut a nisl tincidunt nulla tincidunt lobortis.
                    Aliquam erat volutpat. Curabitur ullamcorper leo id lobortis dignissim. Nam viverra dui viverra pulvinar eleifend. Pellentesque a nulla ut mauris elementum volutpat in ac metus.</p>
            </div>

            <div class="group-image mt-2">
                <div class="col-md-4 pl-0 image"><img src="images/motto.net.ua-13968.jpg"></div>
                <div class="col-md-4 pl-0 image"><img src="images/28-21-31-14-382_s.jpg"></div>
                <div class="col-md-4 pl-0 image"><img src="images/drift.jpg"></div>
                <div class="clearfix"></div>
            </div>

        </div>
        <div class="slide p-1 mb-1">

            <h4>Winter. Lorem ipsum dolor sit amet</h4>
            <div class="group-image mt-2 mb-2">
                <div class="col-md-4 pl-0 image"><img src="images/472004.jpg"></div>
                <div class="col-md-4 pl-0 image"><img src="images/34959425.jpg"></div>
                <div class="col-md-4 pl-0 image"><img src="images/2fons.ru-81805.jpg"></div>
                <div class="clearfix"></div>
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit nisi, tempor in gravida vel, maximus nec felis. Nam justo tellus, euismod non metus sed,
                    mattis rutrum tortor. Fusce feugiat euismod orci in pulvinar. Suspendisse pharetra commodo turpis, vel dictum risus pharetra eu. Suspendisse potenti. Duis dapibus
                    quam eu fermentum consequat. Pellentesque sed nunc in nisi scelerisque consectetur. Maecenas maximus euismod aliquet. Fusce eu nunc quis augue feugiat consequat at
                    ut purus. Pellentesque nulla velit, viverra at egestas vel, malesuada non odio. Donec porttitor porta venenatis. Donec venenatis enim libero, a dictum risus elementum a.
                    Fusce vel porta diam, at egestas quam. Etiam maximus feugiat hendrerit. Maecenas sit amet risus porttitor, malesuada dui lacinia, sagittis lacus. Sed at ligula non ipsum
                    sodales iaculis.</p>

                <p>Pellentesque dapibus semper vestibulum. Ut eget orci orci. Phasellus tristique sed tellus nec sagittis. Vestibulum lobortis eros quis quam ornare venenatis.
                    Sed quis ornare tortor, id pharetra tellus. Aliquam ac consectetur nibh. Nunc in lobortis felis, suscipit porta nisi. Phasellus quis convallis quam. Sed sollicitudin
                    a elit ac commodo. Sed venenatis tincidunt sodales.</p>

                <p>Maecenas ultricies orci quis lorem scelerisque efficitur. Aliquam luctus at risus quis tempor. Phasellus dapibus pharetra metus id varius. Suspendisse ipsum nibh,
                    maximus et augue id, rutrum porttitor enim. Sed ut felis consectetur, elementum elit vel, imperdiet odio. Nunc porttitor ultricies elit, id tincidunt ex molestie eget.
                    Nunc enim enim, pharetra a cursus id, consequat mattis massa.</p>

                <p>Aliquam blandit augue non tellus facilisis, sit amet ornare orci aliquet. Sed accumsan posuere efficitur. Praesent gravida sem ac turpis ornare faucibus. Donec nulla
                    sapien, varius vitae augue vel, ornare condimentum mi. Quisque ac tempor leo. Quisque euismod facilisis arcu, sed varius ligula ullamcorper eu. Ut a nisi eget nibh dapibus
                    efficitur vitae sit amet augue. Quisque in neque in arcu cursus mollis eu vitae sapien. Nulla pretium ex sit amet dui aliquet, vel placerat ligula aliquet.</p>

                <p>Fusce quis lectus varius, vulputate nunc vel, elementum augue. Ut ipsum libero, ultrices id tortor vitae, gravida egestas massa. Proin nec ex id tortor viverra tincidunt.
                    Nam rhoncus tempor varius. Phasellus at lacus magna. Quisque et bibendum libero. Vivamus finibus accumsan suscipit. In sem tellus, sodales quis ante vitae, auctor pellentesque
                    urna. Suspendisse hendrerit maximus gravida. Pellentesque tincidunt tellus nec arcu euismod scelerisque. Praesent a aliquet libero. Ut a nisl tincidunt nulla tincidunt lobortis.
                    Aliquam erat volutpat. Curabitur ullamcorper leo id lobortis dignissim. Nam viverra dui viverra pulvinar eleifend. Pellentesque a nulla ut mauris elementum volutpat in ac metus.</p>
                <p>Pellentesque dapibus semper vestibulum. Ut eget orci orci. Phasellus tristique sed tellus nec sagittis. Vestibulum lobortis eros quis quam ornare venenatis.
                    Sed quis ornare tortor, id pharetra tellus. Aliquam ac consectetur nibh. Nunc in lobortis felis, suscipit porta nisi. Phasellus quis convallis quam. Sed sollicitudin
                    a elit ac commodo. Sed venenatis tincidunt sodales.</p>

                <p>Maecenas ultricies orci quis lorem scelerisque efficitur. Aliquam luctus at risus quis tempor. Phasellus dapibus pharetra metus id varius. Suspendisse ipsum nibh,
                    maximus et augue id, rutrum porttitor enim. Sed ut felis consectetur, elementum elit vel, imperdiet odio. Nunc porttitor ultricies elit, id tincidunt ex molestie eget.
                    Nunc enim enim, pharetra a cursus id, consequat mattis massa.</p>

                <p>Aliquam blandit augue non tellus facilisis, sit amet ornare orci aliquet. Sed accumsan posuere efficitur. Praesent gravida sem ac turpis ornare faucibus. Donec nulla
                    sapien, varius vitae augue vel, ornare condimentum mi. Quisque ac tempor leo. Quisque euismod facilisis arcu, sed varius ligula ullamcorper eu. Ut a nisi eget nibh dapibus
                    efficitur vitae sit amet augue. Quisque in neque in arcu cursus mollis eu vitae sapien. Nulla pretium ex sit amet dui aliquet, vel placerat ligula aliquet.</p>

                <p>Fusce quis lectus varius, vulputate nunc vel, elementum augue. Ut ipsum libero, ultrices id tortor vitae, gravida egestas massa. Proin nec ex id tortor viverra tincidunt.
                    Nam rhoncus tempor varius. Phasellus at lacus magna. Quisque et bibendum libero. Vivamus finibus accumsan suscipit. In sem tellus, sodales quis ante vitae, auctor pellentesque
                    urna. Suspendisse hendrerit maximus gravida. Pellentesque tincidunt tellus nec arcu euismod scelerisque. Praesent a aliquet libero. Ut a nisl tincidunt nulla tincidunt lobortis.
                    Aliquam erat volutpat. Curabitur ullamcorper leo id lobortis dignissim. Nam viverra dui viverra pulvinar eleifend. Pellentesque a nulla ut mauris elementum volutpat in ac metus.</p>
            </div>

            <div class="group-image mt-2">
                <div class="col-md-4 pl-0 image"><img src="images/342839_original.jpg"></div>
                <div class="col-md-4 pl-0 image"><img src="images/norvegiya_zima_les_sneg_derevya_101292_3840x2400.jpg"></div>
                <div class="col-md-4 pl-0 image"><img src="images/vetton_ru_bgbbbbbbwintergbbbbggbbhd-wallpaper-26554-1920x1200.jpg"></div>
                <div class="clearfix"></div>
            </div>

        </div>
        <div class="slide p-1 mb-1">

            <h4>Art. Pellentesque dapibus semper vestibulum</h4>
            <div class="group-image mt-2 mb-2">
                <div class="col-md-4 pl-0 image"><img src="images/31881.jpg"></div>
                <div class="col-md-4 pl-0 image"><img src="images/Painting-Abstract-Art.jpg"></div>
                <div class="col-md-4 pl-0 image"><img src="images/kandinskycomp-8-1024x709.jpg"></div>
                <div class="clearfix"></div>
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit nisi, tempor in gravida vel, maximus nec felis. Nam justo tellus, euismod non metus sed,
                    mattis rutrum tortor. Fusce feugiat euismod orci in pulvinar. Suspendisse pharetra commodo turpis, vel dictum risus pharetra eu. Suspendisse potenti. Duis dapibus
                    quam eu fermentum consequat. Pellentesque sed nunc in nisi scelerisque consectetur. Maecenas maximus euismod aliquet. Fusce eu nunc quis augue feugiat consequat at
                    ut purus. Pellentesque nulla velit, viverra at egestas vel, malesuada non odio. Donec porttitor porta venenatis. Donec venenatis enim libero, a dictum risus elementum a.
                    Fusce vel porta diam, at egestas quam. Etiam maximus feugiat hendrerit. Maecenas sit amet risus porttitor, malesuada dui lacinia, sagittis lacus. Sed at ligula non ipsum
                    sodales iaculis.</p>

                <p>Pellentesque dapibus semper vestibulum. Ut eget orci orci. Phasellus tristique sed tellus nec sagittis. Vestibulum lobortis eros quis quam ornare venenatis.
                    Sed quis ornare tortor, id pharetra tellus. Aliquam ac consectetur nibh. Nunc in lobortis felis, suscipit porta nisi. Phasellus quis convallis quam. Sed sollicitudin
                    a elit ac commodo. Sed venenatis tincidunt sodales.</p>

                <p>Maecenas ultricies orci quis lorem scelerisque efficitur. Aliquam luctus at risus quis tempor. Phasellus dapibus pharetra metus id varius. Suspendisse ipsum nibh,
                    maximus et augue id, rutrum porttitor enim. Sed ut felis consectetur, elementum elit vel, imperdiet odio. Nunc porttitor ultricies elit, id tincidunt ex molestie eget.
                    Nunc enim enim, pharetra a cursus id, consequat mattis massa.</p>

                <p>Aliquam blandit augue non tellus facilisis, sit amet ornare orci aliquet. Sed accumsan posuere efficitur. Praesent gravida sem ac turpis ornare faucibus. Donec nulla
                    sapien, varius vitae augue vel, ornare condimentum mi. Quisque ac tempor leo. Quisque euismod facilisis arcu, sed varius ligula ullamcorper eu. Ut a nisi eget nibh dapibus
                    efficitur vitae sit amet augue. Quisque in neque in arcu cursus mollis eu vitae sapien. Nulla pretium ex sit amet dui aliquet, vel placerat ligula aliquet.</p>

                <p>Fusce quis lectus varius, vulputate nunc vel, elementum augue. Ut ipsum libero, ultrices id tortor vitae, gravida egestas massa. Proin nec ex id tortor viverra tincidunt.
                    Nam rhoncus tempor varius. Phasellus at lacus magna. Quisque et bibendum libero. Vivamus finibus accumsan suscipit. In sem tellus, sodales quis ante vitae, auctor pellentesque
                    urna. Suspendisse hendrerit maximus gravida. Pellentesque tincidunt tellus nec arcu euismod scelerisque. Praesent a aliquet libero. Ut a nisl tincidunt nulla tincidunt lobortis.
                    Aliquam erat volutpat. Curabitur ullamcorper leo id lobortis dignissim. Nam viverra dui viverra pulvinar eleifend. Pellentesque a nulla ut mauris elementum volutpat in ac metus.</p>
                <p>Pellentesque dapibus semper vestibulum. Ut eget orci orci. Phasellus tristique sed tellus nec sagittis. Vestibulum lobortis eros quis quam ornare venenatis.
                    Sed quis ornare tortor, id pharetra tellus. Aliquam ac consectetur nibh. Nunc in lobortis felis, suscipit porta nisi. Phasellus quis convallis quam. Sed sollicitudin
                    a elit ac commodo. Sed venenatis tincidunt sodales.</p>

                <p>Maecenas ultricies orci quis lorem scelerisque efficitur. Aliquam luctus at risus quis tempor. Phasellus dapibus pharetra metus id varius. Suspendisse ipsum nibh,
                    maximus et augue id, rutrum porttitor enim. Sed ut felis consectetur, elementum elit vel, imperdiet odio. Nunc porttitor ultricies elit, id tincidunt ex molestie eget.
                    Nunc enim enim, pharetra a cursus id, consequat mattis massa.</p>

                <p>Aliquam blandit augue non tellus facilisis, sit amet ornare orci aliquet. Sed accumsan posuere efficitur. Praesent gravida sem ac turpis ornare faucibus. Donec nulla
                    sapien, varius vitae augue vel, ornare condimentum mi. Quisque ac tempor leo. Quisque euismod facilisis arcu, sed varius ligula ullamcorper eu. Ut a nisi eget nibh dapibus
                    efficitur vitae sit amet augue. Quisque in neque in arcu cursus mollis eu vitae sapien. Nulla pretium ex sit amet dui aliquet, vel placerat ligula aliquet.</p>

                <p>Fusce quis lectus varius, vulputate nunc vel, elementum augue. Ut ipsum libero, ultrices id tortor vitae, gravida egestas massa. Proin nec ex id tortor viverra tincidunt.
                    Nam rhoncus tempor varius. Phasellus at lacus magna. Quisque et bibendum libero. Vivamus finibus accumsan suscipit. In sem tellus, sodales quis ante vitae, auctor pellentesque
                    urna. Suspendisse hendrerit maximus gravida. Pellentesque tincidunt tellus nec arcu euismod scelerisque. Praesent a aliquet libero. Ut a nisl tincidunt nulla tincidunt lobortis.
                    Aliquam erat volutpat. Curabitur ullamcorper leo id lobortis dignissim. Nam viverra dui viverra pulvinar eleifend. Pellentesque a nulla ut mauris elementum volutpat in ac metus.</p>
            </div>

            <div class="group-image mt-2">
                <div class="col-md-4 pl-0 image"><img src="images/abstract-art-paintings-4-cool-wallpaper.jpg"></div>
                <div class="col-md-4 pl-0 image"><img src="images/559b1eb677256.jpg"></div>
                <div class="col-md-4 pl-0 image"><img src="images/abstract_art_faces_wallpaper_2014.jpg"></div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>

</div>

</body>
</html>