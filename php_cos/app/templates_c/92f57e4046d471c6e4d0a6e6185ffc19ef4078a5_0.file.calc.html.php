<?php
/* Smarty version 4.3.2, created on 2024-03-28 00:00:13
  from 'C:\xampp\htdocs\php_cos\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6604a4fd77d601_06540415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92f57e4046d471c6e4d0a6e6185ffc19ef4078a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_cos\\app\\calc.html',
      1 => 1711580410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6604a4fd77d601_06540415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1573345176604a4fd771163_96152920', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3602985546604a4fd7719d0_52059893', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/index.html");
}
/* {block 'footer'} */
class Block_1573345176604a4fd771163_96152920 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1573345176604a4fd771163_96152920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_3602985546604a4fd7719d0_52059893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3602985546604a4fd7719d0_52059893',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Prosty kalkulator</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	

	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
		<label for="kwota">Kwota kredytu: </label>
		<input id="kwota" type="number" name="kwota"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
" /><br />
		<label for="lat">Na ile lat: </label>
		<input id="lat" type="number" name="lat"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value['lat'];?>
" /><br />
		<label for="opr">Oprocentowanie: </label>
		<input id="opr" type="number" name="opr"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value['opr'];?>
" /><br />
		<input type="submit" class="pure-button" value="Oblicz" />
	</form>	
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>



<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
