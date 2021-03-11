<?php
/* Smarty version 3.1.39, created on 2021-03-10 19:00:40
  from 'E:\XAMPP\htdocs\Projekt3-template\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60490948ee6487_12033750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ac6161b380dd987efac9eefc004b70cb9c3b7b1' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\Projekt3-template\\app\\calc.html',
      1 => 1615399210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60490948ee6487_12033750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177872962560490948ed5f07_16372242', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61101905160490948ed69a5_16800152', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_177872962560490948ed5f07_16372242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_177872962560490948ed5f07_16372242',
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
class Block_61101905160490948ed69a5_16800152 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_61101905160490948ed69a5_16800152',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Prosty kalkulator</h2>


		<section>
			<h3>Form</h3>
			<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
				<div class="row gtr-uniform gtr-50">
					<div class="col-3 col-12-xsmall">
						<input type="text" placeholder="Kwota" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
">
					</div>
					<div class="col-3 col-12-xsmall">
						<input type="text" placeholder="Lata" name="years" value="<?php echo $_smarty_tpl->tpl_vars['years']->value;?>
">
					</div>
					<div class="col-3 col-12-xsmall">
						<input type="text" placeholder="Oprocentowanie" name="percentage" value="<?php echo $_smarty_tpl->tpl_vars['percentage']->value;?>
">
					</div>
					
				   <div class="col-12">
						<ul class="actions">
							<li><input type="submit" value="Oblicz" class="primary" /></li>
							<li><input type="reset" value="Reset" /></li>
						</ul>
					</div>
				</div>
			</form>
		

	<div class="messages">

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
		<?php }?>
		<?php }?>


		<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
		<h4>Wynik</h4>
		<p class="res">
			<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

		</p>
		<?php }?>

	</div>
</section>
	</div>
	</div>

	<?php
}
}
/* {/block 'content'} */
}
