<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
     <?php
     include_once './head.php';
     ?>
    </head>
    <body>
        <?php
     include_once './topo.php';
     include_once './menu.php';
        ?>
        <div id="video">
            <video controls>
                <source src="video.mp4">
            </video>
        </div>
        
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>
