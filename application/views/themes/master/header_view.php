<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php //$this->title?></title>
	<?php echo link_tag( ASSETS_DIR . STYLESHEETS_DIR . 'reset.css' ); ?>
	<?php echo link_tag( ASSETS_DIR . STYLESHEETS_DIR . 'default.css' ); ?>
	<script type="text/javascript" src="<?php echo site_url(ASSETS_DIR . SCRIPTS_DIR . 'jquery/jquery-1.7.2.min.js'); ?>"></script>
	<?php echo link_tag( MODAL_DIR . '/css/confirm.css' ); ?>

	<?php // TODO: load the queud scripts and css, use ?>ß
</head>

<?php if ($page != 'login_page'): ?>
	<body id="container">
	<div id="body" class="<?php echo $page; ?>">
	<div id="header">
		<img src="/CTS/assets/images/logo.png" class="logo">
		<div id="top-menu">
			<menu id="header_menu">
			<li class="menu-item"><a href="">settings</a></li>
			<li class="menu-item"><a href="">profile</a></li>
			<li class="menu-item logout"><a href="">logout</a></li>
		</menu>
		<div id="dashboard_date"><?php echo date('F D j, Y'); ?></div>
		</div>
	</div>
<?php else: ?>
	<body id="login_page">
	<div id="body"  class="<?php echo $page; ?>">
<?php endif ?>

