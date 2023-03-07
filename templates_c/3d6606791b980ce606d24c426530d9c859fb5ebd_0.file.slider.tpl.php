<?php
/* Smarty version 4.0.4, created on 2023-03-03 23:16:26
  from 'C:\xampp\htdocs\universidadfuturo\templates\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6402d42a2fcae2_67170998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d6606791b980ce606d24c426530d9c859fb5ebd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\universidadfuturo\\templates\\slider.tpl',
      1 => 1677906980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6402d42a2fcae2_67170998 (Smarty_Internal_Template $_smarty_tpl) {
?>  <!-- Start Slider -->
    <section class="slider-section swiper-container" data-aos="fade-in">
        <div class="swiper-wrapper">
            <div class="slider-area height-700 swiper-slide overlay"
                style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/images/slider_bg_2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="slider-content text-white pb-5 mb-5">
                                <h2 class="display-2">Better Education For a Better World</h2>
                                <p>Best Education Theme In 2019</p>
                                <a href="#" class="button_one mt-4">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-area height-700 swiper-slide overlay"
                style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/images/slider_bg.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="slider-content text-white pb-5 mb-5">
                                <h2 class="display-2">Standart Syllebaus For Students</h2>
                                <p>Best Education Theme In 2019</p>
                                <a href="#" class="button_one mt-4">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-area height-700 swiper-slide overlay"
                style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/images/slider_bg_3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="slider-content text-white pb-5 mb-5">
                                <h2 class="display-2">Maintaince Educational Value</h2>
                                <p>Best Education Theme In 2019</p>
                                <a href="#" class="button_one mt-4">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <!-- End Slider --><?php }
}
