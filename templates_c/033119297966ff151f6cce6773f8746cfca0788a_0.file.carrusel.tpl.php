<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-11 19:54:03
  from '/home/dentalc6/public_html/pagina-prueba/templates/page2/carrusel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee2d22be99f16_11130566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '033119297966ff151f6cce6773f8746cfca0788a' => 
    array (
      0 => '/home/dentalc6/public_html/pagina-prueba/templates/page2/carrusel.tpl',
      1 => 1591923241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee2d22be99f16_11130566 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/images/covid3.png?<?php echo time();?>
" alt="First slide">
	  <div class="carousel-caption d-none d-md-block">
				<label class="btn" onclick="openContenedor('#980000','covid')" style="padding:15px;background:#980000;color:#ffffff;cursor:pointer">
				<h2>Leer más</h2>
				</label>
				
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br> 
	  </div>
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="https://www.elsevier.com/__data/assets/image/0004/527080/vocacion-medica.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.elsevier.com/__data/assets/image/0004/527080/vocacion-medica.jpg" alt="Third slide">
    </div> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><?php }
}
