<?php

class Widget_Form extends WP_Widget {

	public function __construct() {
		$widget_ops = array(
			'classname'   => 'widget_form',
			'description' => 'Widget Form is awesome',
		);
		parent::__construct( 'widget_form', 'Widget Form', $widget_ops );
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
//		echo esc_html__( 'Hello, World!', 'text_domain' );
//		$latest_products = new WP_Query(array(
//			'post_type'
//		));
		global $wpdb, $table_prefix;

//		$latest_subscibers = $wpdb->get_results($wpdb->prepare("SELECT * FROM {$wpdb->prefix}"))
        echo isset($instance['category_id']) ? $instance['category_id'] : 0;
		?>
        <div class="widget_form">
            <p>
                <input type="text" name="full_name" id="full_name" placeholder="نام کامل">
            </p>
            <p>
                <input type="text" name="mobile" id="mobile" placeholder="شماره همراه">
            </p>
            <p>
                <button type="submit" name="widget_form_submit">ارسال</button>
            </p>
        </div>
		<?php
		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : 'فرم خبرنامه ';
		$category_id = isset($instance['category_id']) && intval($instance['category_id']) > 0 ? (int)$instance['category_id'] : 0;
		?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text"
                   value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'category_id' ) ); ?>">دسته بندی : </label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'category_id' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'category_id' ) ); ?>" type="text"
                   value="<?php echo esc_attr( $category_id ); ?>">
        </p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['category_id'] = intval($new_instance['category_id']) > 0 ? intval($new_instance['category_id']) : 0;

		return $instance;
	}

}