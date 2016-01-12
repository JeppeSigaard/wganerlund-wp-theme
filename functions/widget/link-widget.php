<?php 

// Gul kasse widgets
class smamo_link_widget extends WP_Widget {

    function __construct() {
    parent::__construct(
    // Base ID of your widget
    'smamo_link_widget', 

    // Widget name will appear in UI
    __('Widget med link', 'smamo'), 

    // Widget description
    array( 'description' => __( 'Widget bruges som tekstwidget, men overskrift renderes med link', 'smamo' ), ) 
    );
    }

    // FRONT END
    public function widget( $args, $instance ) {
        
        $widget_text = ! empty( $instance['text'] ) ? $instance['text'] : '';
        $text = apply_filters( 'widget_text', $widget_text, $instance, $this );
        
        ?>
        <div class="widget">
            <a href="<?php echo esc_url($instance['anchor']); ?>" class="widget-header">
                <h3><?php echo _e($instance['title']); ?></h3>
                <div class="widget-arrow square-icon icon-next"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20">
            <path d="M9.163 4.516c0.418 0.408 4.502 4.695 4.502 4.695 0.223 0.219 0.335 0.504 0.335 0.789s-0.112 0.57-0.335 0.787c0 0-4.084 4.289-4.502 4.695-0.418 0.408-1.17 0.436-1.615 0-0.446-0.434-0.481-1.041 0-1.574l3.747-3.908-3.747-3.908c-0.481-0.533-0.446-1.141 0-1.576s1.197-0.409 1.615 0z"></path>
            </svg>
            </div>
            </a>
            <div class="text-widget">
                <?php echo $text ?>
            </div>
        </div>
        <?php 
        
    }

    // BACKEND
    public function form( $instance ) {

        $title = (isset($instance['title'])) ? $instance['title']: '';
        $anchor = (isset($instance['anchor'])) ? $instance['anchor']: '';
        $text = (isset($instance['text'])) ? $instance['text']: '';
        
        
        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Titel' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id( 'anchor' ); ?>"><?php _e( 'Link' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'anchor' ); ?>" name="<?php echo $this->get_field_name( 'anchor' ); ?>" type="url" value="<?php echo esc_url( $anchor ); ?>" />
        </p>
        
        <p><label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Content:' ); ?></label>
		<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo esc_textarea($text ); ?></textarea></p>
        <?php 
    }

    // OPDATER
    public function update( $new_instance, $old_instance ) {

        $instance = array();

        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['anchor'] = ( ! empty( $new_instance['anchor'] ) ) ? esc_url( $new_instance['anchor'] ) : '';
        $instance['text'] = ( ! empty( $new_instance['text'] ) ) ? $new_instance['text']: '';

        return $instance;

    }

}




// Registrer ekstra widget
add_action( 'widgets_init', 'smamo_load_widgets' );
function smamo_load_widgets() {
	register_widget( 'smamo_link_widget' );
}
