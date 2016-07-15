<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', '画像アップローダ');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		// echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <!-- bower:css -->
    <link rel="stylesheet" href="/myapp/bower_components/lightbox2/dist/css/lightbox.css" />
    <!-- endbower -->
    <style type="text/css"  media="all">
    img.thumbnail {
        width: 15em;
    }
    #footer {
        text-align: center;
    }
    #header h1 {
        background-size: contain;
    }
    </style>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<p>Copyright © 2014-2016 genzouw All Rights Reserved.</p>
			<p>( twitter:<a href="https://twitter.com/genzouw">@genzouw</a> , facebook:<a href="https://www.facebook.com/genzouw">genzouw</a>, mailto:<a href="mailto:genzouw@gmail.com">genzouw@gmail.com</a> )</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
