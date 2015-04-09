<?php

/*
Plugin Name: Tightrope Form
Plugin URI: http://crystalcleardm.com
Description: A simple plugin that creates a form.
Version: 1.0
Author: Ronald Pannullo
Author URI: http://www.crystalcleardm.com
License: GPL2
*/

class wp_my_plugin extends WP_Widget {

  // constructor
  function wp_my_plugin() {
    parent::WP_Widget(false, $name = __('Tightrope', 'tightrope_form_widget') );
  }

  // widget form creation
function form($instance) {
// Check values
if( $instance) {
     $title = esc_attr($instance['title']);
     $heading = esc_attr($instance['heading']);
     $subheading = esc_attr($instance['subheading']);
     $value = esc_attr($instance['value']);
     $action = esc_attr($instance['action']);
     $fullname = esc_attr($instance['fullname']);
     $email = esc_attr($instance['email']);
     $phone = esc_attr($instance['phone']);
     $interests = esc_attr($instance['interests']);
     $procedureone = esc_attr($instance['procedureone']);
     $proceduretwo = esc_attr($instance['proceduretwo']);
    $procedurethree = esc_attr($instance['procedurethree']);
     $procedurefour = esc_attr($instance['procedurefour']);
     $orientation = esc_attr($instance['orientation']);
     $submit = esc_attr($instance['submit']);
} 

else {
     $title = '';
     $heading = '';
     $subheading = '';
     $value = '';
     $action = '';
     $fullname= '';
     $email = '';
     $phone = '';
     $interests = '';
     $orientation = '';
     $submit = '';
}
?>
<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('heading'); ?>"><?php _e('Form Heading:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('heading'); ?>" name="<?php echo $this->get_field_name('heading');?>" type="text" value="<?php echo $heading; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('subheading'); ?>"><?php _e('Form Subheading:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('subheading'); ?>" name="<?php echo $this->get_field_name('subheading');?>" type="text" value="<?php echo $subheading; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('value'); ?>"><?php _e('Value Number:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('value'); ?>" name="<?php echo $this->get_field_name('value');?>" type="text" value="<?php echo $value; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('action'); ?>"><?php _e('API key:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('action'); ?>" name="<?php echo $this->get_field_name('action');?>" type="text" value="<?php echo $action; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('fullname'); ?>"><?php _e('Full Name:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('fullname'); ?>" name="<?php echo $this->get_field_name('fullname'); ?>" type="checkbox" value="checked" <?php checked( 'checked', $fullname ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="checkbox" value="checked" <?php checked( 'checked', $email ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="checkbox" value="checked" <?php checked( 'checked', $phone ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('interests'); ?>"><?php _e('Interests:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('interests'); ?>" name="<?php echo $this->get_field_name('interests'); ?>" type="checkbox" value="checked" <?php checked( 'checked', $interests ); ?> />
</p>
<P>
<label for="<?php echo $this->get_field_id('procedureone'); ?>"><?php _e('Procedure 1:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('procedureone'); ?>" name="<?php echo $this->get_field_name('procedureone');?>" type="text" value="<?php echo $procedureone; ?>" />
</p>
<P>
<label for="<?php echo $this->get_field_id('proceduretwo'); ?>"><?php _e('Procedure 2:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('proceduretwo'); ?>" name="<?php echo $this->get_field_name('proceduretwo');?>" type="text" value="<?php echo $proceduretwo; ?>" />
</p>
<P>
<label for="<?php echo $this->get_field_id('procedurethree'); ?>"><?php _e('Procedure 3:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('procedurethree'); ?>" name="<?php echo $this->get_field_name('procedurethree');?>" type="text" value="<?php echo $procedurethree; ?>" />
</p>
<P>
<label for="<?php echo $this->get_field_id('procedurefour'); ?>"><?php _e('Procedure 4:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('procedurefour'); ?>" name="<?php echo $this->get_field_name('procedurefour');?>" type="text" value="<?php echo $procedurefour; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('orientation'); ?>"><?php _e('Select Orientation', 'tightrope_form_widget'); ?></label>
<select name="<?php echo $this->get_field_name('orientation'); ?>" id="<?php echo $this->get_field_id('orientation'); ?>" class="widefat">
<?php
$orientations = array('Vertical', 'Horizontal');
foreach ($orientations as $value) {
echo '<option value="' . $value . '" id="' . $value . '"', $orientation == $value ? ' selected="selected"' : '', '>', $value, '</option>';
}
?>
</select>
</p>
<P>
<label for="<?php echo $this->get_field_id('submit'); ?>"><?php _e('Submit Button Text:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('submit'); ?>" name="<?php echo $this->get_field_name('submit');?>" type="text" value="<?php echo $submit; ?>" />
</p>
<?php

}


  // widget update
  function update($new_instance, $old_instance) {
    $instance = $old_instance;
      // Fields
      $instance['title'] = strip_tags($new_instance['title']);
      $instance['heading'] = strip_tags($new_instance['heading']);
      $instance['subheading'] = strip_tags($new_instance['subheading']);
      $instance['value'] = strip_tags($new_instance['value']);
      $instance['action'] = strip_tags($new_instance['action']);
      $instance['fullname'] = strip_tags($new_instance['fullname']);
      $instance['email'] = strip_tags($new_instance['email']);
      $instance['phone'] = strip_tags($new_instance['phone']);
      $instance['interests'] = strip_tags($new_instance['interests']);
      $instance['procedureone'] = strip_tags($new_instance['procedureone']);
      $instance['proceduretwo'] = strip_tags($new_instance['proceduretwo']);
      $instance['procedurethree'] = strip_tags($new_instance['procedurethree']);
      $instance['procedurefour'] = strip_tags($new_instance['procedurefour']);
      $instance['orientation'] = strip_tags($new_instance['orientation']);
      $instance['submit'] = strip_tags($new_instance['submit']);
     return $instance;

  }

  // widget display
  function widget($args, $instance) {
      extract( $args );
   // these are the widget options
   $title = apply_filters('widget_title', $instance['title']);
   $heading = $instance['heading'];
   $subheading = $instance['subheading'];
   $value = $instance['value'];
   $action = $instance['action'];
   $fullname = $instance['fullname'];
   $email = $instance['email'];
   $phone = $instance['phone'];
   $interests = $instance['interests'];
   $procedureone = $instance['procedureone'];
   $proceduretwo = $instance['proceduretwo'];
   $procedurethree = $instance['procedurethree'];
   $procedurefour = $instance['procedurefour'];
   $orientation = $instance['orientation'];
   $submit = $instance['submit'];
   echo $before_widget;
   // Display the widget
   
   // Check if title is set
   if ( $title ) {
      echo $before_title . $title . $after_title;
   }
   //form 
   echo '<div class="widget-text tightrope_form_widget_box">
          <div class="form-container-'.$orientation.'">
            <form name="signupForm" id="signupForm" method="post" action="http://app.crystalpec.com/j1.pl?'.$action.'"> 
              <input type="hidden" name="AutomaticTeamIDs" value='.$value.' />';
   // Check if heading is set
   if ( $heading ) {
      echo'<div class="heading"><h2>'.$heading.'</h2></div>';
   }
   // Check subheading is set
   if ( $subheading ) {
      echo'<div class="subheading"><h4>'.$subheading.'</h4></div>';
   }
   echo '<div class="form-wrap">';
   // Check if full name is set
   if( $fullname && $fullname == 'checked' ) {
     echo '<input type="text" name="FullName" placeholder="Full Name" maxlength="64" id="signup_FullName" class="field" onblur="validateData(this.form,this.id)"/>';
   }
   // Check if Email is set
   if( $email && $email == 'checked' ) {
     echo '<input type="text" name="Email" placeholder="Email" maxlength="64" id="signup_Email" class="field" onblur="validateData(this.form,this.id)"/>';
   }
   // Check if Phone is set
   if( $phone && $phone == 'checked' ) {
     echo '<input type="text" name="Mobile" placeholder="Phone" maxlength="64" id="signup_Mobile" class="field"/>';
   }
  // Check if interests
   if( $interests && $interests == 'checked' ) {
     echo '<select name="SkillsInterests" id="signup_SkillsInterests" class="field">
  <option value="" disabled selected>Select Procedure</option>';
  if( $procedureone ) {
    echo '<option value="'.$procedureone.'">'.$procedureone.'</option>';
  }
  if ( $proceduretwo ){
    echo '<option value="'.$proceduretwo.'">'.$proceduretwo.'</option>';
  }
  if ( $procedurethree ){
    echo '<option value="'.$procedurethree.'">'.$procedurethree.'</option>';
  }
  if ( $procedurefour ){
    echo '<option value="'.$procedurefour.'">'.$procedurefour.'</option>';
  }
  echo '<option value="Other">Other</option>
  </select>';
   }
   if ( $submit ) {
      echo '<input id="formSubmit" type="submit" name="formSubmit" value="'.$submit.'"/>';
   }
   if ( !$submit ) {
      echo '<input id="formSubmit" type="submit" name="formSubmit" value="Send" />';
   }


   
   echo'     <input type="hidden" name="Referrer" value="" /> 
            <input type="hidden" name="qstring" value=" '.$action.' " /> 
            <input type="hidden" name="formSubmitCheck" value="1" />
    </div>';
   echo '</form>
          </div>
        </div>';
   echo $after_widget;
  }

}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("wp_my_plugin");'));

//enque scripts
function form_validation(){
    wp_register_script('form_validation',plugin_dir_url( __FILE__ ).'js/validation.js');
    wp_enqueue_script('form_validation');
}
add_action('wp_enqueue_scripts','form_validation');

/**
 * Register style sheet.
 */
function register_plugin_styles() {
  wp_register_style( 'tightrope-style', plugins_url( 'tightrope/css/styles.css' ) );
  wp_enqueue_style( 'tightrope-style' );
}

add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );


?>