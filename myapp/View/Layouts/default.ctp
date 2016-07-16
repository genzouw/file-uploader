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
        echo $this->Html->meta('icon');
		// echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		// echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <?php $baseUrl = ''; ?>
    <!-- bower:css -->
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/bower_components/lightbox2/dist/css/lightbox.css" />
    <!-- endbower -->
    <style type="text/css"  media="all">
    img.thumbnail {
        width: 100%;
    }
    #footer {
        text-align: center;
    }
    .navbar {
         margin-bottom: 0;
    }
    </style>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-41583079-9', 'auto');
      ga('send', 'pageview');

    </script>
    <script src="<?php echo $baseUrl ?>/bower_components/jquery/dist/jquery.js"></script>
</head>
<body>
    <nav class="navbar navbar-default">
		<?php echo $this->Html->link($cakeDescription, '/', array(
		    'class' => 'navbar-brand',
		)); ?>
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".target">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse target">
            <ul class="nav navbar-nav">
                <li>
                <?php echo $this->Html->link(
                    $this->Html->tag(
                        'span',
                        '',
                        array(
                            'class' => 'glyphicon glyphicon-upload',
                        )
                    ) . __('New Upload File'),
                    array( 'action' => 'add' ),
                    array( 'escape' => false )
                ); ?>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void(0);"></a></li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">

        <?php $flash = $this->Session->flash(); ?>
        <?php if (!empty($flash)) { ?>
        <div class="alert alert-info">
            <button class="close" data-dismiss="alert">&times;</button>
            <?php echo $flash; ?>
        </div>
        <?php } ?>

        <?php echo $this->fetch('content'); ?>

    </div>

    <footer id="footer">
        <p>Copyright © 2014-2016 genzouw All Rights Reserved.</p>
        <p>( twitter:<a href="https://twitter.com/genzouw">@genzouw</a> , facebook:<a href="https://www.facebook.com/genzouw">genzouw</a>, mailto:<a href="mailto:genzouw@gmail.com">genzouw@gmail.com</a> )</p>
    </footer>
	<?php echo $this->element('sql_dump'); ?>
    <!-- bower:js -->
    <script src="<?php echo $baseUrl ?>/bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?php echo $baseUrl ?>/bower_components/jquery-ui/jquery-ui.js"></script>
    <script src="<?php echo $baseUrl ?>/bower_components/sprintf/src/sprintf.js"></script>
    <script src="<?php echo $baseUrl ?>/bower_components/lightbox2/dist/js/lightbox.js"></script>
    <!-- endbower -->
</body>
</html>
