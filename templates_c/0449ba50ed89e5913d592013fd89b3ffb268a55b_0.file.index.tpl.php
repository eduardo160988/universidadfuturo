<?php
/* Smarty version 4.0.4, created on 2023-03-03 23:17:26
  from 'C:\xampp\htdocs\universidadfuturo\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6402d46646c193_97828112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0449ba50ed89e5913d592013fd89b3ffb268a55b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\universidadfuturo\\templates\\index.tpl',
      1 => 1677907040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6402d46646c193_97828112 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
	<head>
		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['DOC_ROOT']->value)."/templates/1-meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['DOC_ROOT']->value)."/templates/1-css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>			
	</head>
	<body >

		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['DOC_ROOT']->value)."/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['DOC_ROOT']->value)."/templates/slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['DOC_ROOT']->value)."/templates/1-js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	</body>
</html><?php }
}
