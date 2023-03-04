<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 17:06:03
  from '/home/dentalc6/public_html/pagina-prueba/templates/page2/menuCel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed1874b8ff478_93840709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b40022c96366e1c9a98a4531a60d54571ff02252' => 
    array (
      0 => '/home/dentalc6/public_html/pagina-prueba/templates/page2/menuCel.tpl',
      1 => 1590789498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed1874b8ff478_93840709 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="mySidenav" class="sidenav">
<img style="margin-top:5px;padding:10px"  src="https://dentalcoid.com/admin/images/log.png" width="90%">  
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 
  <a href="javascript:void(0)" onclick="Moverse('quienes')">¿Quiénes somos?</a>
  <a href="javascript:void(0)" onclick="Moverse('servicios')">Servicios</a>
  <a href="javascript:void(0)" onclick="Moverse('tratamientos')" >Tratamientos dentales</a>
  <a href="javascript:void(0)" onclick="Moverse('promociones')">Promociones</a>
  <a href="javascript:void(0)" onclick="Moverse('ubicacion')">Ubicación</a>
  <a href="javascript:void(0)" onclick="Moverse('contacto')">Contacto</a>
  <a href="javascript:void(0)" onclick="cierreTemporal()">Cierre temporal</a>
  
</div> <?php }
}
