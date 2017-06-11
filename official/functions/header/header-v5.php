<?php 
// Header Version 5
?>
<?php $is_ovrlay = rwmb_meta('official_fixed_header');?>


		<header id="header" class="header_v2 header_v5<?php global $woo_header_overlay; if($is_ovrlay || $woo_header_overlay){echo ' overlay-header';};?>">
			
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
            
            
            <div class="headdown">
				<div class="row clearfix">
					
                    
                  <?php if (_option('header_social_icons',1)==1 ){ ?>
                        <div class="social social-head <?php if (_option('social_border',1)!=1){ echo 'without_border ';} ?><?php echo _option('social_style'); ?>">			
      						<?php get_template_part('functions/social-icons'); ?>
                        </div><!-- end social -->         
					 <?php } ?>
                     
					
                    <?php if (_option('right_sub_text')):  ?>
                        <div class="info lefter">
                        	<?php echo do_shortcode(_option('right_sub_text')); ?>
                        </div><!-- end info -->
                    <?php endif; ?>
                    

				</div><!-- row -->
			</div><!-- headdown -->
            
            

		</header><!-- end header -->