<?php
/* Smarty version 3.1.30, created on 2024-04-15 03:34:40
  from "C:\xampp\htdocs\php_kredyt6b\app\views\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661c84301e5597_82879627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '569820103390060365fd5663e5702cbf200e9af3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_kredyt6b\\app\\views\\templates\\index.html',
      1 => 1713138297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661c84301e5597_82879627 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]> <html class=""> <![endif]-->    
<head>
	<meta charset="utf-8">
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>

	<meta name="description" content="">
	<meta name="author" content="">

	<!--[if lt IE 9]> 
		<?php echo '<script'; ?>
 src="http://html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
> 
	<![endif]-->

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/views/templates/assets/css/whhg.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/views/templates/assets/css/grid.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/views/templates/assets/css/styles.css">

	<!-- TODO: uncomment skin styles. 
	     Note, you can use another skin found in the "css" folder, or create your own one --> 
	<!-- <link rel="stylesheet" href="css/skin-dark.css"> -->

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie.css">
	<![endif]-->

	<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/views/templates/assets/images/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/views/templates/assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/views/templates/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/views/templates/assets/images/apple-touch-icon-114x114.png">

</head>
<body>
	
	<!--  LOGOTYPE LINE  -->
	<!--  TODO: Change domain name and call to action message below -->
	<div id="Head" class="container">
		<div class="row">
			<div class="col span_16">
				<h1 id="Domain"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
<br>
					<span>Random text</span></h1>
			</div>
		
			<div id="Action" class="col span_8">
				<a href="#Offer" class="btn btn-icon btn-block"><i class="icon icon-envelope"></i> Idź do formularza</a>
			</div>	
		</div>
	</div>
	<!-- END OF LOGOTYPE LINE  -->

	
	<!--  STATS LINE  -->
	<!--  TODO: enter your domain's stats below -->
	<!--  If you need a different number of columns here, please use:
	         - <div class="col span_24"> for 1 column
	         - <div class="col span_12"> for 2 columns
	         - <div class="col span_8"> for 3 columns
	         - <div class="col span_6"> for 4 columns
	         - <div class="col span_3"> for 8 columns
	-->
	<!--  
	      If you don't have such data or want to use this area as a text block, feel free to replace 
	      all <div class="col span_4">...</div> by a single <div class="col span_24"> - your text message - </div> 
	-->
	
	<!-- END OF STATS LINE  -->

	<!-- CONTENT -->
	<!-- TODO: Change content in the rows/columns below 
	     Please note, 24-columns grid is used in the template, so you can reorder the blocks 
	     to make, for example, 2-columns layout (use a pair of col span_12) or 4-column one
	     (use 4 copies of col span_6) -->
	<div id="Content" class="container">
	
		

		<hr class="divider">

		
		
		<hr class="divider">

		<div class="row padding">
			<div class="col span_8">

				<!-- "About seller" text block. Feel free to replace it by any other text or advertisement -->
				<h2>Kalkulator</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
				euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
				<p>AZ Domains has a variety of domain in many niches. So, if you like one of the domaint listed below, 
					feel free to make an offer for that domain too. 
				</p>

			</div>
			<div class="col span_16">

				<!-- Offer submission form. Please don't change inputs' IDs and names. -->
				<h2>Oblicz</h2>
				<div id="Offer">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1119051097661c84301e46c6_81758127', 'content');
?>

				</div> <!-- end of offer form -->
				
				<!-- Result Messages -->
				
				<!-- End of Result Messages -->

			</div> <!-- end of col span_16 -->
		</div> <!-- end of row -->
	</div>
	<!-- END OF CONTENT -->

	<div id="Content-end" class="container"></div>

	

	<div id="Footer" class="container">
		<div class="row top">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_233173072661c84301e4de5_58600669', 'footer');
?>

		</div>
	</div>

<!-- TODO: In order to track visits, insert google analytics code here -->


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/views/templates/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'content'} */
class Block_1119051097661c84301e46c6_81758127 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_233173072661c84301e4de5_58600669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
