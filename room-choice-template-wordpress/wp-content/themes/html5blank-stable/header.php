<!doctype html>
<?php

//Parallax Variables

$parallax_video_mp4 = get_field("parallax_video_mp4");
$parallax_video_webm = get_field("parallax_video_webm");

?>

<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../wp-content/themes/html5blank-stable/style.css">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

        <!--parallax-background-->

        <video loop autoplay>
            <source src="<?php echo $parallax_video_mp4["url"]; ?>" type='video/mp4;codecs="avc1.42EO1E, mp4a.40.2"' />
            <source src="<?php echo $parallax_video_webm["url"]; ?>" type='video/webm;codecs="vp8, vorbis"' />
        </video>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
<!--					<div class="logo">-->
<!--						<a href="--><?php //echo home_url(); ?><!--">-->
<!--							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->-->
<!--							<img src="--><?php //echo get_template_directory_uri(); ?><!--/img/logo.svg" alt="Logo" class="logo-img">-->
<!--						</a>-->
<!--					</div>-->
					<!-- /logo -->

					<!-- nav -->
<!--					<nav class="nav" role="navigation">-->
<!--						--><?php //html5blank_nav(); ?>
<!--					</nav>-->
					<!-- /nav -->

			</header>
			<!-- /header -->
