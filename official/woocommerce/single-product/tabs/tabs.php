<?php
/**
 * Single Product tabs
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

$i = 1;
$j = 1;

if ( ! empty( $tabs ) ) : ?>

	<div class="clearfix mbs">
		<ul class="tabs">
			<?php foreach ( $tabs as $key => $tab ) : ?>

				<li class="<?php echo esc_attr($key) ?>_tab<?php if ($i==1){echo ' active';}?>">
					<a <?php if ($i==1){echo 'class="active"';}?> href="#tab-<?php echo esc_attr($key) ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?></a>
				</li>
                
				<?php $i++; ?>
                
			<?php endforeach; ?>
		</ul>
        <ul class="tabs-content">
		<?php foreach ( $tabs as $key => $tab ) : ?>

			<li class="panel entry-content<?php if ($j==1){echo ' active';}?>" id="tab-<?php echo esc_attr($key) ?>">
				<?php call_user_func( $tab['callback'], $key, $tab ) ?>
			</li>
            
            <?php $j++; ?>

		<?php endforeach; ?>
        </ul>
	</div>

<?php endif; ?>
