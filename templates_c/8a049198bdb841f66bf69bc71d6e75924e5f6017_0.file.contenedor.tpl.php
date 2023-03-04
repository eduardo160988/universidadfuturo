<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-31 14:08:18
  from '/home/dentalc6/public_html/pagina-prueba/templates/page2/contenedor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed400a200d734_61124792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a049198bdb841f66bf69bc71d6e75924e5f6017' => 
    array (
      0 => '/home/dentalc6/public_html/pagina-prueba/templates/page2/contenedor.tpl',
      1 => 1590952091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed400a200d734_61124792 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" name="fondoColor" id="fondoColor" value="#14057F">
<div id="contenedor" class="contenedorComputer " style="z-index:999999;" >
	
	 
	 <div class="container " id="contenedorPrincipal" style="background:#14057F"> 
		   <div class="row">
				<div class="col-md-12">
				<span class="btnXs" style="z-index:999999;display:none;font-weight:400;font-size:50px;color:#ffffff;position:absolute;top:-13px;right:5px" onclick="closeContenedor()">&times;</span>
					<div class="row">
					
							<div class="col-md-12" style="height:5px"></div>
							<!--<div class="col-md-12 text-center" style="background:#ffffff;padding:20px;border-radius: 60px 60px 60px 60px;-moz-border-radius: 60px 60px 60px 60px;-webkit-border-radius: 60px 60px 60px 60px;">
								<img style="height:50px"  class="pull-right"  src="https://dentalcoid.com/admin/images/log.png" >
							</div>-->
					</div>
				</div>
				
				<div class="col-md-12" id="contentText"></div>
		   </div>		
		   
	 </div> 
	
</div>
<div id="fondo" class="fondo2" style="z-index:999998;"  ></div> 
<div id="cerraContenedor" class="cierre text-right" style="z-index:999998;cursor:pointer"  >
	<span class="btnX" style="font-weight:400;font-size:50px;color:#ffffff;position:absolute;top:-13px;right:5px" onclick="closeContenedor()">&times;</span>
</div> 
<?php }
}
