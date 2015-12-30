<!-----------------------------------------------------:-:
:-:                                                    :-:
:-:                    hej@jeppe.io                    :-:
:-:          Currently working @SmartMonkey            :-:
:-:              https://smartmonkey.dk                :-:
:-:                                                    :-:
:-:------------------------------------------------------>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title('·', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php wp_head(); ?>
	<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-68163222-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<?php
/*	Zen Mode server side check
	Vi har fallback javascript check også, i tilfælde af server caching
	(Zen mode skjuler .site-nav fra 960px op)
*/

$body_class = '';
$zenmode = isset($_COOKIE['zenmode']) ? $_COOKIE['zenmode'] : false;

if($zenmode && $zenmode === 'on'){
	$body_class = 'zen-mode';
}

?>
<body <?php body_class($body_class); ?>>
<?php get_template_part('template-parts/header/top','nav'); ?>
<?php get_template_part('template-parts/header/site','header'); ?>
