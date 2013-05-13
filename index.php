<?php
   require_once('config.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>Space Advocates - Crew</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width">

      <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

      <!-- <link rel="stylesheet" href="css/main.css" /> -->
      <link rel="stylesheet/less" type="text/css" href="css/main.less" />
      <script type="text/javascript">
          less = {
              env: "development", // or "production"
              async: false,       // load imports async
              fileAsync: false,   // load imports async when in a page under
                                  // a file protocol
              poll: 1000,         // when in watch mode, time in ms between polls
              functions: {},      // user functions, keyed by name
              dumpLineNumbers: "comments", // or "mediaQuery" or "all"
              relativeUrls: false,// whether to adjust url's to be relative
                                  // if false, url's are already relative to the
                                  // entry less file
          };
      </script>
      <script src="less.js" type="text/javascript"></script>
   </head>
   <body>
      <!--[if lt IE 7]>
         <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
      <![endif]-->

      <div id="space"></div>

      <div id="wrapper">
         <?php include "views/header.php"; ?>
         <?php include "views/crew.php"; ?>
         <?php include "views/footer.php"; ?>
      </div>

      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
      <!-- <script src="js/plugins.js"></script>
      <script src="js/main.js"></script> -->

      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
         var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
         (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
         g.src='//www.google-analytics.com/ga.js';
         s.parentNode.insertBefore(g,s)}(document,'script'));
      </script>
   </body>
</html>