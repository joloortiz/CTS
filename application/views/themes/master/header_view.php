<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php //$this->title?></title>
	<?php echo link_tag( ASSETS_DIR . STYLESHEETS_DIR . 'reset.css' ); ?>
	<?php echo link_tag( ASSETS_DIR . STYLESHEETS_DIR . 'default.css' ); ?>
	<?php // TODO: load the queud scripts and css, use ?>
</head>

<?php if ($page != 'login_page'): ?>
	<body id="container">
	<div id="body"  class="<?php echo $page; ?>">
	<div id="header">
		<img src="/CTS/assets/images/logo.png" class="logo">
	</div>
<?php else: ?>
	<body id="login_page">
	<div id="body"  class="<?php echo $page; ?>">
<?php endif ?>

