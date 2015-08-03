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
     $actionType = esc_attr($instance['actionType']);
     $action = esc_attr($instance['action']);
     $fullname = esc_attr($instance['fullname']);
     $email = esc_attr($instance['email']);
     $phone = esc_attr($instance['phone']);
     $location = esc_attr($instance['location']);
     $locationone = esc_attr($instance['locationone']);
     $locationtwo = esc_attr($instance['locationtwo']);
     $locationthree = esc_attr($instance['locationthree']);
     $locationfour = esc_attr($instance['locationfour']);
     $interests = esc_attr($instance['interests']);
     $dropdown = esc_attr($instance['dropdown']);
     $placeholder = esc_attr($instance['placeholder']);
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
     $actionType = '';
     $action = '';
     $fullname= '';
     $email = '';
     $phone = '';
     $location = '';
     $interests = '';
     $dropdown = '';
     $placeholder = '';
     $procedureone = '';
     $proceduretwo = '';
     $procedurethree = '';
     $procedurefour = '';
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
<label for="<?php echo $this->get_field_id('actionType'); ?>"><?php _e('Unique Form Action:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('actionType'); ?>" name="<?php echo $this->get_field_name('actionType');?>" type="radio" value="unique" checked="checked" <?php checked( 'unique', $actionType ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('actionType'); ?>"><?php _e('Standard API key:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('actionType'); ?>" name="<?php echo $this->get_field_name('actionType');?>" type="radio" value="standard" <?php checked( 'standard', $actionType ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('action'); ?>"><?php _e('Form Action:', 'tightrope_form_widget'); ?></label>
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
<label for="<?php echo $this->get_field_id('location'); ?>"><?php _e('Location:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('location'); ?>" name="<?php echo $this->get_field_name('location'); ?>" type="checkbox" value="checked" <?php checked( 'checked', $location ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('locationone'); ?>"><?php _e('Location 1:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('locationone'); ?>" name="<?php echo $this->get_field_name('locationone');?>" type="text" value="<?php echo $locationone; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('locationtwo'); ?>"><?php _e('Location 2:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('locationtwo'); ?>" name="<?php echo $this->get_field_name('locationtwo');?>" type="text" value="<?php echo $locationtwo; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('locationthree'); ?>"><?php _e('Location 3:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('locationthree'); ?>" name="<?php echo $this->get_field_name('locationthree');?>" type="text" value="<?php echo $locationthree; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('locationfour'); ?>"><?php _e('Location 4:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('locationfour'); ?>" name="<?php echo $this->get_field_name('locationfour');?>" type="text" value="<?php echo $locationfour; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('interests'); ?>"><?php _e('Interests:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('interests'); ?>" name="<?php echo $this->get_field_name('interests'); ?>" type="checkbox" value="checked" <?php checked( 'checked', $interests ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('dropdown'); ?>"><?php _e('Dropdown:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('dropdown'); ?>" name="<?php echo $this->get_field_name('dropdown'); ?>" type="radio" value="dropdown" checked="checked" <?php checked( 'dropdown', $dropdown ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('dropdown'); ?>"><?php _e('Text Field:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('dropdown'); ?>" name="<?php echo $this->get_field_name('dropdown'); ?>" type="radio" value="textfield" <?php checked( 'textfield', $dropdown ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('placeholder'); ?>"><?php _e('Placeholder Text:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('placeholder'); ?>" name="<?php echo $this->get_field_name('placeholder');?>" type="text" value="<?php echo $placeholder; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('procedureone'); ?>"><?php _e('Procedure 1:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('procedureone'); ?>" name="<?php echo $this->get_field_name('procedureone');?>" type="text" value="<?php echo $procedureone; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('proceduretwo'); ?>"><?php _e('Procedure 2:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('proceduretwo'); ?>" name="<?php echo $this->get_field_name('proceduretwo');?>" type="text" value="<?php echo $proceduretwo; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('procedurethree'); ?>"><?php _e('Procedure 3:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('procedurethree'); ?>" name="<?php echo $this->get_field_name('procedurethree');?>" type="text" value="<?php echo $procedurethree; ?>" />
</p>
<p>
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
      $instance['actionType'] = strip_tags($new_instance['actionType']);
      $instance['action'] = strip_tags($new_instance['action']);
      $instance['fullname'] = strip_tags($new_instance['fullname']);
      $instance['email'] = strip_tags($new_instance['email']);
      $instance['phone'] = strip_tags($new_instance['phone']);
      $instance['location'] = strip_tags($new_instance['location']);
      $instance['locationone'] = strip_tags($new_instance['locationone']);
      $instance['locationtwo'] = strip_tags($new_instance['locationtwo']);
      $instance['locationthree'] = strip_tags($new_instance['locationthree']);
      $instance['locationfour'] = strip_tags($new_instance['locationfour']);
      $instance['interests'] = strip_tags($new_instance['interests']);
      $instance['dropdown'] = strip_tags($new_instance['dropdown']);
      $instance['placeholder'] = strip_tags($new_instance['placeholder']);
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
   $actionType = $instance['actionType'];
   $action = $instance['action'];
   $fullname = $instance['fullname'];
   $email = $instance['email'];
   $phone = $instance['phone'];
   $location = $instance['location'];
   $locationone = $instance['locationone'];
   $locationtwo = $instance['locationtwo'];
   $locationthree = $instance['locationthree'];
   $locationfour = $instance['locationfour'];
   $interests = $instance['interests'];
   $dropdown = $instance['dropdown'];
   $placeholder = $instance['placeholder'];
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
          <div class="form-container-'.$orientation.'">';
     if($actionType == 'standard'){
            echo '<form name="signupForm" id="signupForm" method="post" action="http://app.crystalpec.com/j1.pl?'.$action.'">';
     }
     else if($actionType == 'unique'){
    echo '<form name="signupForm" id="signupForm" method="post" action="'.$action.'">';
     } 
           echo '<input type="hidden" name="AutomaticTeamIDs" value='.$value.' />';
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
     echo '<input type="email" name="Email" placeholder="Email" maxlength="64" id="signup_Email" class="field" onblur="validateData(this.form,this.id)"/>';
   }
   // Check if Phone is set
   if( $phone && $phone == 'checked' ) {
     echo '<input type="text" name="Mobile" placeholder="Phone" maxlength="64" id="signup_Mobile" class="field" onblur="validateData(this.form,this.id)"/>';
   }
  // Check if Location is set
   if( $location && $location == 'checked' ) {
     echo '<select name="City" id="signup_City" class="field"/>
      <option value="" disabled selected>Location</option>';
     if( $locationone ) {
        echo '<option value="'.$locationone.'">'.$locationone.'</option>';
      }
      if ( $locationtwo ){
        echo '<option value="'.$locationtwo.'">'.$locationtwo.'</option>';
      }
      if ( $locationthree ){
        echo '<option value="'.$locationthree.'">'.$locationthree.'</option>';
      }
      if ( $locationfour ){
        echo '<option value="'.$locationfour.'">'.$locationfour.'</option>';
      }
      echo '</select>';
   }
  // Check if interests
   if($interests && $interests == 'checked' ) {
    if($dropdown == 'dropdown'){
      if($placeholder){
       echo '<select name="SkillsInterests" id="signup_SkillsInterests" class="field">
              <option value="" disabled selected>'.$placeholder.'</option>';
      }
      else{
        echo '<select name="SkillsInterests" id="signup_SkillsInterests" class="field">
              <option value="" disabled selected>Select Procedure</option>';
      }
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
   else if($dropdown == 'textfield') {
    if($placeholder){
     echo '<input type="text" name="SkillsInterests" placeholder="'.$placeholder.'" id="signup_SkillsInterests" class="field" onblur="validateData(this.form,this.id)">';
    }
    else{
      echo '<input type="text" name="SkillsInterests" placeholder="How May We Help?" id="signup_SkillsInterests" class="field" onblur="validateData(this.form,this.id)">';
    }
  }
}
   if ( $submit ) {
      echo '<input id="formSubmit" type="submit" name="formSubmit" value="'.$submit.'" onclick="javascript: return SubmitForm()" />';
   }
   if ( !$submit ) {
      echo '<input id="formSubmit" type="submit" name="formSubmit" value="Send" onclick="javascript: return SubmitForm()" />';
   }


   if ($actionType == 'standard'){
   echo'<input type="hidden" name="Referrer" value="" /> 
        <input type="hidden" name="qstring" value="'.$action.'" /> 
        <input type="hidden" name="formSubmitCheck" value="1" />
    </div>';
  }
   echo '</form>
          </div>
        </div>';
   echo $after_widget;
  }

}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("wp_my_plugin");'));

//enqueue validation script
function form_validation(){
    wp_register_script('form_validation',plugin_dir_url( __FILE__ ).'js/validation.js');
    wp_enqueue_script('form_validation');
}
add_action('wp_enqueue_scripts','form_validation');



?>