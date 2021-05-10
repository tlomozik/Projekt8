<?php
/* Smarty version 3.1.39, created on 2021-05-10 14:54:41
  from 'E:\XAMPP\htdocs\Projekt8\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60992d113d4711_97349081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '722f6b61a3aaf13f5bd5f9227075b77fc1e535c2' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\Projekt8\\app\\views\\LoginView.tpl',
      1 => 1617713111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60992d113d4711_97349081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64622309060992d113c9b20_79369848', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_64622309060992d113c9b20_79369848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_64622309060992d113c9b20_79369848',
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
