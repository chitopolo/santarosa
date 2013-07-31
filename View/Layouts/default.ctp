<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>

	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->html->css('estilos');

			echo $this->Html->meta('icon');
			
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap/bootstrap');
			echo $this->Html->css('bootstrap/bootstrap-responsive');
			echo $this->Html->css('bootstrap/core');
			

			echo $this->fetch('css');
			
			echo $this->Html->script('bootstrap/vendor/jquery-1.10.1');
			echo $this->Html->script('bootstrap/vendor/bootstrap');
			
			echo $this->fetch('script');
                        
                        echo $this->Html->css('carusel/flexslider1');
                        echo $this->Html->script('carusel/jquery.flexslider1');    
		?>
             <script type="text/javascript">
 $(window).load(function() {
 $('.flexslider').flexslider();
 });
 </script> 
	</head>

	<body>
		<div id="main-container">
		
			<div id="header" class="container">
				<?php echo $this->element('menu/top_menu'); ?>
			</div><!-- #header .container -->
			<div id="content" class="container">
                 
                 <?php echo $this->element('carusel/carusel'); ?>
				<?php echo $this->element('contenido/contenido1'); ?>

				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div><!-- #header .container -->
			
			<div id="footer">
				<?php //Silence is golden ?>
				<?php echo $this->element('footer/footer1'); ?>
			</div><!-- #footer .container -->
			
		</div><!-- #main-container -->
		
		!-- .container -->
		<?php echo $this->Js->writeBuffer(); // Write cached scripts ?>
	</body>


</html>