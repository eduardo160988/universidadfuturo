<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 17:06:03
  from '/home/dentalc6/public_html/pagina-prueba/templates/page2/contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed1874b910078_39372016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57492c7110552a42d47cb10d47181ce153f596b8' => 
    array (
      0 => '/home/dentalc6/public_html/pagina-prueba/templates/page2/contacto.tpl',
      1 => 1590789498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed1874b910078_39372016 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="contacto" class="wrapper style1 fade-up">
<h1 style="margin-left:20px">Contáctanos</h1>
						<div class="inner">
						
						<div class="split2 style5">
								<section>
									<form  action="javascript:void(0)" id="frmContact">
									<input type="hidden" name="opcion" id="opcion" value="envio">
										<div class="fields">
											<div class="field half">
												<label for="name">Nombre</label>
												<input type="text" name="nombre" id="nombre" />
											</div>
											<div class="field half">
												<label for="cel">Celular</label>
												<input type="text" name="cel" id="cel" onKeyPress="return soloNumeros(event)" maxlength="10" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field">
												<label for="mensaje">¿En qué podemos ayudarte?</label>
												<textarea name="mensaje" id="mensaje" rows="5"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><a href="javascript:void(0)" onclick="Envio()" class="button submit">Enviar Mensaje</a></li>
										</ul>
									</form>
								</section>
								</div>
						</div>
						
						
					</section><?php }
}
