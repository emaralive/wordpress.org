<?php
namespace WordPressdotorg\Plugin_Directory\Widgets;

use WordPressdotorg\Plugin_Directory\Template;

/**
 * A Widget to display a plugins rating, and allow rating.
 *
 * @package WordPressdotorg\Plugin_Directory\Widgets
 */
class Ratings extends \WP_Widget {

	/**
	 * Ratings constructor.
	 */
	public function __construct() {
		parent::__construct( 'plugin_ratings', __( 'Plugin Ratings', 'wporg-plugins' ), array(
			'classname'   => 'plugin-ratings',
			'description' => __( 'Displays the plugin ratings.', 'wporg-plugins' ),
		) );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Ratings', 'wporg-plugins' ) : $instance['title'], $instance, $this->id_base );
		$post  = get_post();

		if ( class_exists( '\WPORG_Ratings' ) ) {
			$rating  = \WPORG_Ratings::get_avg_rating( 'plugin', $post->post_name ) ?: 0;
			$ratings = \WPORG_Ratings::get_rating_counts( 'plugin', $post->post_name ) ?: array();
		} else {
			$rating  = get_post_meta( $post->ID, 'rating', true ) ?: 0;
			$ratings = get_post_meta( $post->ID, 'ratings', true ) ?: array();
		}

		var_dump($ratings);

		$num_ratings = array_sum( $ratings );

		echo $args['before_widget'];
		echo $args['before_title'] . $title . $args['after_title'];

		if ( $rating ) :
		?>
			<div class="rating">
				<?php echo Template::dashicons_stars( $rating ); ?>
			</div>

			<ul class="ratings-list">
				<?php
				foreach ( range( 5, 1 ) as $stars ) :
					$rating_bar_width = $num_ratings ? 100 * $ratings[ $stars ] / $num_ratings : 0;
					?>
					<li class="counter-container">
						<a href="<?php echo esc_url( 'https://wordpress.org/support/plugin/' . $post->post_name . '/reviews/?filter=' . $stars ); ?>">
							<span class="counter-label"><?php printf( _n( '%d star', '%d stars', $stars, 'wporg-plugins' ), $stars ); ?></span>
					<span class="counter-back">
						<span class="counter-bar" style="width: <?php echo $rating_bar_width; ?>%;"></span>
					</span>
							<span class="counter-count"><?php echo number_format_i18n( $ratings[ $stars ] ); ?></span>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>

		<?php else : ?>

			<div class="rating">
				<p><?php _e( 'This plugin has not been rated yet.', 'wporg-plugins' ); ?></p>
			</div>

		<?php endif; // $rating ?>

		<?php

			$action_link_url = is_user_logged_in() ? esc_url( 'https://wordpress.org/support/plugin/' . $post->post_name . '/reviews/#new-post' ) : esc_url( wp_login_url( 'https://wordpress.org/support/plugin/' . get_post()->post_name . '/reviews/#new-post' ) );
			$action_link_url_text =  is_user_logged_in() ? __( 'Add my review', 'wporg-plugins' ) : __( 'Log in to review.', 'wporg-plugins' );

			$see_all_link_url = esc_url( 'https://wordpress.org/support/plugin/' . $post->post_name . '/reviews/' );
			$see_all_link_text = __( 'See all<span class="screen-reader-text"> reviews</span>', 'reviews', 'wporg-plugins' );

			$block_markup = <<<EOT
				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--10)">
					<a href="$action_link_url">$action_link_url_text</a>
					<a href="$see_all_link_url">$see_all_link_text</a>
				</div>
				<!-- /wp:group -->
			EOT;

			echo do_blocks( $block_markup );
		?>

		<?php

		echo $args['after_widget'];
	}
}
