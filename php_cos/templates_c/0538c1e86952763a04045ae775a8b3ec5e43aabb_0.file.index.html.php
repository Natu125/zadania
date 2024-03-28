<?php
/* Smarty version 4.3.2, created on 2024-03-28 13:36:10
  from 'C:\xampp\htdocs\php_cos\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6605643a208ba9_45365077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0538c1e86952763a04045ae775a8b3ec5e43aabb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_cos\\templates\\index.html',
      1 => 1711629367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6605643a208ba9_45365077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Initio - Free, multipurpose html5 template by GetTemplate</title>

	<link rel="shortcut icon" href= "<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/templates/assets/images/gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/templates/assets/css/styles.css">

	<!--[if lt IE 9]> <?php echo '<script'; ?>
 src="assets/js/html5shiv.js"><?php echo '</script'; ?>
> <![endif]-->
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/templates/assets/images/cos.jpg" alt="">
			<span class="title">Kalkulator</span>
			<span class="tagline">kredytowy<br>
			</span>
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Home</a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17419682436605643a2082e9_21084880', 'content');
?>


</main>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Contact</h3>
				<div class="widget-body">
					<p>+234 23 9873237<br>
						<a href="mailto:#">some.email@somewhere.com</a><br>
						<br>
						234 Hidden Pond Road, Ashland City, TN 37015
					</p>	
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Follow me</h3>
				<div class="widget-body">
					<p class="follow-me-icons">
						<a href=""><i class="fa fa-twitter fa-2"></i></a>
						<a href=""><i class="fa fa-dribbble fa-2"></i></a>
						<a href=""><i class="fa fa-github fa-2"></i></a>
						<a href=""><i class="fa fa-facebook fa-2"></i></a>
					</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Text widget</h3>
				<div class="widget-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Form widget</h3>
				<div class="widget-body">
					<p>+234 23 9873237<br>
						<a href="mailto:#">some.email@somewhere.com</a><br>
						<br>
						234 Hidden Pond Road, Ashland City, TN 37015
					</p>	
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>

<footer id="underfooter">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 widget">
				<div class="widget-body">
					<p>234 Hidden Pond Road, Ashland City, TN 37015 </p>
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright &copy; 2014, Your awesome name here<br> 
						Design: <a href="http://www.gettemplate.com" rel="designer">Initio by GetTemplate</a> </p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/template.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block 'content'} */
class Block_17419682436605643a2082e9_21084880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17419682436605643a2082e9_21084880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
