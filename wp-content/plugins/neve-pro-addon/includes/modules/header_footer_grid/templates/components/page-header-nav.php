<?php
/**
 * Template used for component rendering wrapper.
 *
 * Name:    Header Footer Grid
 *
 * @version 1.0.0
 * @package HFG
 */
namespace HFG;

use HFG\Core\Components\SecondNav;

$style = component_setting( SecondNav::STYLE_ID );

$container_classes = array( $style );

$container_classes[] = 'nav-menu-secondary';

?>
<div class="nv-top-bar">
	<div role="navigation" class="menu-content <?php echo esc_attr( join( ' ', $container_classes ) ); ?>"
		aria-label="<?php echo esc_attr__( 'Page Header Menu', 'neve' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'page-header',
				'menu_id'        => 'secondary-menu',
				'container'      => 'ul',
				'depth'          => - 1,
				'fallback_cb'    => '__return_false',
			)
		);
		?>
	</div>
</div>

