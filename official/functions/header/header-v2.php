<?php 
// Header Version 2
?>

<?php $is_ovrlay = rwmb_meta('official_fixed_header');?>

		<header id="header" class="header_v2<?php global $woo_header_overlay; if($is_ovrlay || $woo_header_overlay){echo ' overlay-header';};?>">
			
            <?php if (_option('extrapanel',1)==1 ){ ?>
            	<?php get_template_part('functions/extrapanel'); ?>
			<?php } ?>
            
            
			<div class="head <?php if (_option('is_sticky')) {echo 'my_sticky'; }?>">
				<div class="row clearfix">
					<div class="logo">
						<a href="<?php echo home_url(); ?>"><img src="<?php echo _option('logo');?>" alt="<?php bloginfo('name'); ?>" /></a>
					</div><!-- end logo -->
					
					<?php get_template_part('functions/header/cart'); ?>
                    
             		<?php get_template_part('functions/header/menu'); ?>
                    
				</div><!-- row -->
			</div><!-- head -->

		</header><!-- end header -->