<?php
/* Smarty version 3.1.30, created on 2024-04-15 22:27:32
  from "C:\xampp\htdocs\php_kredyt07ab\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661d8db40afbe8_63998983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb54926fd9ba95c9f92cdac7ead0e3c6e4fb43bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_kredyt07ab\\app\\views\\CalcView.tpl',
      1 => 1713212600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_661d8db40afbe8_63998983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1633763798661d8db40af3a2_68764338', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1633763798661d8db40af3a2_68764338 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator</legend>
	<fieldset>

			<label for="id_kwota">Kwota kredytu: </label>
			<input id="id_kwota" type="number" name="kwota"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" /><br />
			<label for="id_lat">Na ile lat: </label>
			<input id="id_lat" type="number" name="lat"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lat;?>
" /><br />
			<label for="id_opr">Oprocentowanie: </label>
			<input id="id_opr" type="number" name="opr"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->opr;?>
" /><br />





			
			

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
<div class="messages info">
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
