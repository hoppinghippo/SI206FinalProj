<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jim Harbaugh</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">


</head>

<body>
        <?php 
            $filename = basename(__FILE__);
            include("header.php"); 
        ?>


   
            
              <ul class="thumbnails">
                <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img1.jpg"><img class="group1" src="photos/tn1.jpg" alt=""/></a>
                    </li>
                   <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img2.jpg"><img class="group1" src="photos/tn2.jpg" /></a>
                    </li>
                    <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img3.jpg"><img class="group1" src="photos/tn3.jpg"/></a>
                    </li>
                    <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img4.jpg"><img class="group1" src="photos/tn4.jpg" /></a>
                    </li> 
                    <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img5.jpg"><img class="group1" src="photos/tn5.jpg" /></a>
                    </li> 
                    <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img6.jpg"><img class="group1" src="photos/tn6.jpg" /></a>
                    </li> 
                    <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img7.jpg"><img class="group1" src="photos/tn7.jpg" /></a>
                    </li> 
                    <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img8.jpg"><img class="group1" src="photos/tn8.jpg" /></a>
                    </li>
                     <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img9.jpg"><img class="group1" src="photos/tn9.jpg" /></a>
                    </li>
                     <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img10.jpg"><img class="group1" src="photos/tn10.jpg" /></a>
                    </li>
                     <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img12.jpg"><img class="group1" src="photos/tn12.jpg" /></a>
                    </li>
                     <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img13.jpg"><img class="group1" src="photos/tn13.jpg" /></a>
                    </li>
                     <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img14.jpg"><img class="group1" src="photos/tn14.jpg" /></a>
                    </li>
                     <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img15.jpg"><img class="group1" src="photos/tn15.jpg" /></a>
                    </li>
                     <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img16.jpg"><img class="group1" src="photos/tn16.jpg" /></a>
                    </li>
                     <li class="span3">
                        <a class="thumbnail col-sm-3" rel="lightbox[group]" href="photos/img17.jpg"><img class="group1" src="photos/tn17.jpg" /></a>
                    </li>
            </ul><!--end thumbnails -->


 


 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));

            // Colorbox Call

            $(document).ready(function(){
                $("[rel^='lightbox']").prettyPhoto();
            });
        </script>

</body>


</html>