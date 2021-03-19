<?php
/* Smarty version 3.1.39, created on 2021-03-19 21:43:56
  from 'E:\XAMPP\htdocs\Projekt6-objective\app\calc\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60550d0c361623_93591614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2501066b3b79561e546fa07c3aa14c7bde6395cb' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\Projekt6-objective\\app\\calc\\CalcView.html',
      1 => 1616186429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60550d0c361623_93591614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27745863960550d0c34f6a2_10753217', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66397199960550d0c3500d4_12474010', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'footer'} */
class Block_27745863960550d0c34f6a2_10753217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_27745863960550d0c34f6a2_10753217',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<footer id="footer">

	<ul class="copyright">
		<li>&copy; Untitled. All rights reserved.</li>
		<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
	</ul>

	
</footer>


<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_66397199960550d0c3500d4_12474010 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_66397199960550d0c3500d4_12474010',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




		<section>
			<h3>Kalkulator kredytowy</h3>
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCredit" method="post">
				<div class="row gtr-uniform gtr-50">
					<div class="col-3 col-12-xsmall">
						<input type="text" placeholder="Kwota" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->amount;?>
">
					</div>
					<div class="col-3 col-12-xsmall">
						<input type="text" placeholder="Lata" name="years" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->years;?>
">
					</div>
					<div class="col-3 col-12-xsmall">
						<input type="text" placeholder="Oprocentowanie" name="percentage" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->percentage;?>
">
					</div>
					
				   <div class="col-12">
						<ul class="actions">
							<li><input type="submit" value="Oblicz" class="primary" /></li>
					
						</ul>
					</div>
				</div>
			</form>
		

<div class="messages">

		<?php if ($_smarty_tpl->tpl_vars['mess']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mess']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['mess']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mess']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
		<?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>

	</p>
	<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
