<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-09 17:59:37
  from '/home/dentalc6/public_html/templates/page2/menuCel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb735d9a7cb31_44421699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d41e6f307cc727790344601c9fa73376a585cca' => 
    array (
      0 => '/home/dentalc6/public_html/templates/page2/menuCel.tpl',
      1 => 1589065174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb735d9a7cb31_44421699 (Smarty_Internal_Template $_smarty_tpl) {
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
