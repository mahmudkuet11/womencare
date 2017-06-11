<?php
// Header Version 1
?>

<?php $is_ovrlay = rwmb_meta('official_fixed_header'); ?>

<header id="header" class="header_v1 <?php global $woo_header_overlay; if($is_ovrlay || $woo_header_overlay){echo ' overlay-header';};?>">

            <?php if (_option('extrapanel',1)==1 ){ ?>
            	<?php get_template_part('functions/extrapanel'); ?>
			<?php } ?>
			<div class="head">
				<div class="row clearfix">
					<div class="logo">
                    	<a href="<?php echo home_url(); ?>"><img src="<?php echo _option('logo');?>" alt="<?php bloginfo('name'); ?>" /></a>
                    </div><!-- end logo -->

                    <?php get_template_part('functions/header/cart'); ?>

                    <?php if (_option('header_social_icons',1)==1 ){ ?>
                        <div class="social social-head <?php if (_option('social_border',1)!=1){ echo 'without_border ';} ?><?php echo _option('social_style'); ?>">
      						<?php get_template_part('functions/social-icons'); ?>
                        </div><!-- end social -->
					 <?php } ?>


                    <?php if (_option('right_sub_text')):  ?>
                        <div class="info">
                        	<?php echo do_shortcode(_option('right_sub_text')); ?>
                        </div><!-- end info -->
                    <?php endif; ?>




				</div><!-- row -->
			</div><!-- head -->

			<div class="headdown <?php if (_option('is_sticky')) {echo 'my_sticky'; }?>">
				<div class="row clearfix">


                    <?php get_template_part('functions/header/menu'); ?>

                    <?php if (_option('search')): ?>
						<div class="search">
							<form action="<?php echo home_url(); ?>" id="searchform" method="get" role="search">
								<input id="s" name="s" type="text" onfocus="if (this.value=='<?php _e ('Start Searching...','official') ?>') this.value = '';" onblur="if (this.value=='') this.value = '<?php _e ('Start Searching...','official') ?>';" value="<?php _e ('Start Searching...','official') ?>" placeholder="<?php _e ('Start Searching...','official') ?>">
								<button type="submit"><i class="icon-search"></i></button>
							</form>
						</div><!-- search -->
                    <?php endif; ?>


				</div><!-- row -->
			</div><!-- headdown -->
		</header><!-- end header -->