<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package subvulpa Theme
 * @since Shape 2.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/reset.css" type="text/css">
<!--[if lt IE 9]>	
	<script src="../js/html5shiv.min.js"></script>	
<![endif]-->

<?php 
//wp_enqueue_scripts later
if(is_page('Contact'))
{
require_once("include/fgcontactform.php");
require_once("include/captcha-creator.php");

$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');

$formproc->EnableCaptcha($captcha);

//You can add more than one receipients.
$formproc->AddRecipient('lukie@subvulpa.net'); //<<---Put your email address here


//2. For better security. Get a random tring 
$formproc->SetFormRandomKey('RqPbLut9G97Pu06');

	if(isset($_POST['submitted']))
	{
	   if($formproc->ProcessForm())
	   {
	        $formproc->RedirectToURL("thank-you.php");
	   }
	}

}
?>

<title><?php wp_title( '|', true, 'right' );?></title>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- htmlshiv and title animations -->
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/proton-1.0.0.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/protonInit.js" type="text/javascript"></script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'subvulpa-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'subvulpa-theme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
