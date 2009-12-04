<?php
### Class: JH Portfolio Selector
 class WP_Widget_JH_Portfolio_Content extends WP_Widget {
	// Constructor
	function WP_Widget_JH_Portfolio_Content() {
		$widget_ops = array( 'description' => __( 'Shows the portfolio entry\'s content', 'table_rss_news' ) );
		$this->WP_Widget( 'jh_portfolio_content', __( 'JH Portfolio Entry Content' ), $widget_ops );
	}
 
	// Display Widget
	function widget( $args, $instance ) {
		extract( $args, EXTR_SKIP );
				
		echo $before_widget;
		
		?>
		
		<div id="jh-portfolio-content">
			<?php //get_the_content() ?>
		</div>
		<?php
		echo $after_widget;
	
	}
}
 
 
### Function: Init Table News Widget
add_action('widgets_init', 'widget_jh_portfolio_content');
function widget_jh_portfolio_content() {
	register_widget( 'WP_Widget_JH_Portfolio_Content' );
}
?>