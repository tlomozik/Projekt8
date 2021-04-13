<?php
/* Smarty version 3.1.39, created on 2021-04-06 14:47:20
  from 'E:\XAMPP\htdocs\Projekt6-objective\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606c5858db4c24_86902274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21c36933dfb0f2bbe9ee99c14272f0396a61d096' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\Projekt6-objective\\app\\views\\LoginView.tpl',
      1 => 1617713111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_606c5858db4c24_86902274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1709457611606c5858daa644_62723337', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1709457611606c5858daa644_62723337 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1709457611606c5858daa644_62723337',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" >
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div >
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div >
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div >
			<input type="submit" value="zaloguj" />
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
