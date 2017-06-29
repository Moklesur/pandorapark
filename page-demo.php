<?php
/**
 * Template Name: Demo Page
 *
 * @package ThemeTim
 * @subpackage ThemeTim
 * @since ThemeTim 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pandorapark</title>

    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        body{
            margin: 0;
            padding: 0;
            color: #000;
            background-color: #fff;
        }
        iframe{
            width: 100%;
            height: 100%;
        }
        .header{
            background: #000;
            color: #fff;
            position: fixed;
            width: 100%;
            top: 0;
            padding: 24px 60px 16px 60px;
        }
        #demo-wrap{
            overflow: hidden;
            width: 100%;
            height: 100%;
            margin-top: 62px;
            margin-left: auto;
            margin-right: auto;
            -webkit-transition: width 300ms;
            -moz-transition: width 300ms;
            -o-transition: width 300ms;
            -ms-transition: width 300ms;
            transition: width 300ms;
        }
        .header ul{
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .header li{
            display: inline-block;
        }
        .col-default img{
            max-height: 20px;
            max-width: 100%;
        }
        .col-default{
            /*width: 33.33%;
            float: left;*/
        }
        .col-2{
            text-align: center;
        }
        .col-2 li{
            padding: 0 5px;
        }
    </style>

</head>
<body>
<div class="header">
    <!--<div class="col-1 col-default"></div>-->
    <div class="col-2 col-default">
        <ul>
            <li><a id="desktop" href="#" class="active"><img src="<?php echo get_template_directory_uri();?>/assets/images/desktop.png" alt=""/></a></li>
            <li><a id="tablet-landscape" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/tablet.png" alt=""/></a></a></li>
            <li><a id="tablet-portrait" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/mobile.png" alt=""/></a></a></li>
        </ul>
    </div>
    <!--<div class="col-3 col-default"></div>-->
</div>
<div class="demo-wrap" id="demo-wrap">
    <?php $demo_slug =  htmlspecialchars($_GET["demo"]); ?>
    <iframe src="http://demo.themetim.com/<?php echo $demo_slug; ?>" frameborder="0"></iframe>
</div>
<script type="text/javascript" src="http://pandorapark.com/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
<script>

    jQuery(function($) {


        $('#demo-wrap').css('height', $(window).height() - 62);
        $('#demo-wrap').css('width', $(window).width());
        $(window).on('resize', function() {
            $('#demo-wrap').css({
                'height': $(window).height() - 62,
                'width': $(window).width(),
                'margin-top': 60
            });
            $('#demo-wrap').removeAttr('class');
            $('#responsive>a').removeClass('active');
            $('#responsive>#desktop').addClass('active');
        });

        $('#desktop').on('click', function(event) {
            event.preventDefault()
            $('#responsive>a').removeClass('active');
            $(this).addClass('active');
            $('#demo-wrap').removeAttr('class').css({
                'margin-top': 60,
                'width': $(window).width(),
                'height': $(window).height() - 51
            });
        });
        $('#tablet-landscape').on('click', function(event) {
            event.preventDefault()
            $('#responsive>a').removeClass('active');
            $(this).addClass('active');
            $('#demo-wrap').removeAttr('class').addClass('tablet-landscape').css({
                'margin-top': 60,
                'width': 1024,
                'height': $(window).height() - 51
            });
        });
        $('#tablet-portrait').on('click', function(event) {

            event.preventDefault()
            $('#responsive>a').removeClass('active');
            $(this).addClass('active');
            $('#demo-wrap').removeAttr('class').addClass('phone-portrait').css({
                'margin-top': 90,
                'width': 375,
                'height': 600
            });
        });


        $('#remove-frame').on('click', function(event) {
            event.preventDefault()
            var demo = $("#demo-wrap > iframe").attr('src');
            window.location = demo;
        });
    });
</script>
</body>
</html>


























































































































































