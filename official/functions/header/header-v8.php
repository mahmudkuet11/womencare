<?php 
// Header Version 8
?>
<?php $is_ovrlay = rwmb_meta('official_fixed_header');?>

<header id="header" class="header_v8<?php global $woo_header_overlay; if($is_ovrlay || $woo_header_overlay){echo ' overlay-header';};?>">
			
            <?php if (_option('extrapanel',1)==1 ){ ?>
            	<?php get_template_part('functions/extrapanel'); ?>
			<?php } ?>
            
            
            <div class="headdown <?php if (_option('is_sticky')) {echo 'my_sticky'; }?>">
				<div class="row clearfix">
					
                    
                    <?php get_template_part('functions/header/menu'); ?>
					
                    <?php if (_option('header_social_icons',1)==1 ){ ?>
                        <div class="social social-head <?php if (_option('social_border',1)!=1){ echo 'without_border ';} ?><?php echo _option('social_style'); ?>">			
      						<?php get_template_part('functions/social-icons'); ?>
                        </div><!-- end social -->         
					 <?php } ?>
                    

				</div><!-- row -->
			</div><!-- headdown -->
            
            
			<div class="head">
				<div class="row clearfix">
					<div class="logo">
						<a href="<?php echo home_url(); ?>"><img src="<?php echo _option('logo');?>" alt="<?php bloginfo('name'); ?>" /></a>
					</div><!-- end logo -->
					
 
					<?php get_template_part('functions/header/cart'); ?>
                    
                    
                    <?php if (_option('right_sub_text')):  ?>
                        <div class="info">
                        	<?php echo do_shortcode(_option('right_sub_text')); ?>
                        </div><!-- end info -->
                    <?php endif; ?>
                    
					
                    
                    
				</div><!-- row -->
			</div><!-- head -->

			
		</header><!-- end header -->