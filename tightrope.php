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

class tightrope_form extends WP_Widget {

public $id_base = 'signupForm';
public $name = 'Tightrope';
public $number = 1;
public $id = true;

  // constructor
function tightrope_form() {
  parent::WP_Widget($id_base, $name = __('Tightrope', 'tightrope_form_widget') );
}


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
     $captcha = esc_attr($instance['captcha']);
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
     $captcha = '';
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
<label for="<?php echo $this->get_field_id('actionType'); ?>"><?php _e('Standard API key:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('actionType'); ?>" name="<?php echo $this->get_field_name('actionType');?>" type="radio" value="standard"  <?php checked( 'standard', $actionType ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('actionType'); ?>"><?php _e('Unique Form Action:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('actionType'); ?>" name="<?php echo $this->get_field_name('actionType');?>" type="radio" value="unique" <?php checked( 'unique', $actionType ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('action'); ?>"><?php _e('Form Action:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('action'); ?>" name="<?php echo $this->get_field_name('action');?>" type="text" value="<?php echo $action; ?>" />
</p>
<p>
<span>Full Name:</span>
<br />
<label for="fullname_required"><?php _e('Required:', 'tightrope_form_widget'); ?></label>
<input id="fullname_required" name="<?php echo $this->get_field_name('fullname'); ?>" type="radio" value="required" <?php checked( 'required', $fullname ); ?> />
<label for="fullname_optional"><?php _e('Optional:', 'tightrope_form_widget'); ?></label>
<input id="fullname_optional" name="<?php echo $this->get_field_name('fullname'); ?>" type="radio" value="optional" <?php checked( 'optional', $fullname ); ?> />
<label for="fullname_not_used"><?php _e('Not Used:', 'tightrope_form_widget'); ?></label>
<input id="fullname_not_used" name="<?php echo $this->get_field_name('fullname'); ?>" type="radio" value="not used" <?php checked( 'not used', $fullname ); ?> />
</p>
<p>
<span>Email:</span>
<br />
<label for="email_required"><?php _e('Required:', 'tightrope_form_widget'); ?></label>
<input id="email_required" name="<?php echo $this->get_field_name('email'); ?>" type="radio" value="required"  <?php checked( 'required', $email ); ?> />
</p>
<p>
<span>Phone:</span>
<br />
<label for="phone_required"><?php _e('Required:', 'tightrope_form_widget'); ?></label>
<input id="phone_required" name="<?php echo $this->get_field_name('phone'); ?>" type="radio" value="required"  <?php checked( 'required', $phone ); ?> />
<label for="phone_optional"><?php _e('Optional:', 'tightrope_form_widget'); ?></label>
<input id="phone_optional" name="<?php echo $this->get_field_name('phone'); ?>" type="radio" value="optional" <?php checked( 'optional', $phone ); ?> />
<label for="phone_not_used"><?php _e('Not Used:', 'tightrope_form_widget'); ?></label>
<input id="phone_not_used" name="<?php echo $this->get_field_name('phone'); ?>" type="radio" value="not used" <?php checked( 'not used', $phone ); ?> />
</p>
<p>
<span>Captcha:</span>
<br />
<label for="captcha_required"><?php _e('Required:', 'tightrope_form_widget'); ?></label>
<input id="captcha_required" name="<?php echo $this->get_field_name('captcha'); ?>" type="radio" value="required" <?php checked( 'required', $captcha ); ?> />
<label for="captcha_not_used"><?php _e('Not Used:', 'tightrope_form_widget'); ?></label>
<input id="captcha_not_used" name="<?php echo $this->get_field_name('captcha'); ?>" type="radio" value="not used"  <?php checked( 'not used', $captcha ); ?> />
</p>
<p>
<span>Location:</span>
<br />
<label for="location_required"><?php _e('Required:', 'tightrope_form_widget'); ?></label>
<input id="location_required" name="<?php echo $this->get_field_name('location'); ?>" type="radio" value="required" <?php checked( 'required', $location ); ?> />
<label for="location_optional"><?php _e('Optional:', 'tightrope_form_widget'); ?></label>
<input id="location_optional" name="<?php echo $this->get_field_name('location'); ?>" type="radio" value="optional" <?php checked( 'optional', $location ); ?> />
<label for="location_not_used"><?php _e('Not Used:', 'tightrope_form_widget'); ?></label>
<input id="location_not_used" name="<?php echo $this->get_field_name('location'); ?>" type="radio" value="not used"  <?php checked( 'not used', $location ); ?> />
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
<span>Interests:</span>
<br />
<label for="interests_required"><?php _e('Required:', 'tightrope_form_widget'); ?></label>
<input id="interests_required" name="<?php echo $this->get_field_name('interests'); ?>" type="radio" value="required"  <?php checked( 'required', $interests ); ?> />
<label for="interests_optional"><?php _e('Optional:', 'tightrope_form_widget'); ?></label>
<input id="interests_optional" name="<?php echo $this->get_field_name('interests'); ?>" type="radio" value="optional" <?php checked( 'optional', $interests ); ?> />
<label for="interests_not_used"><?php _e('Not Used:', 'tightrope_form_widget'); ?></label>
<input id="interests_not_used" name="<?php echo $this->get_field_name('interests'); ?>" type="radio" value="not used" <?php checked( 'not used', $interests ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('dropdown'); ?>"><?php _e('Dropdown:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('dropdown'); ?>" name="<?php echo $this->get_field_name('dropdown'); ?>" type="radio" value="dropdown"  <?php checked( 'dropdown', $dropdown ); ?> />
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
      $instance['captcha'] = strip_tags($new_instance['captcha']);
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
      $number = str_replace('tightrope_form-', '', $widget_id);
   $title = apply_filters('widget_title', $instance['title']);
   $heading = $instance['heading'];
   $subheading = $instance['subheading'];
   $value = $instance['value'];
   $actionType = $instance['actionType'];
   $action = $instance['action'];
   $fullname = $instance['fullname'];
   $email = $instance['email'];
   $phone = $instance['phone'];
   $captcha = $instance['captcha'];
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
          <div class="form-container-'.$orientation.'">
            <form name="signupForm" id="signupForm_'.$number.'" method="post" action="https://app.crystalpec.com/j1.pl?'.$action.'"> 
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
   echo '<div class="field-wrap">';
   // Check if full name is set
   if ($fullname != 'not used'){
    if( $fullname == 'required' ) {
      echo '<div class="name-wrap">
    <input type="text" name="FullName" placeholder="Full Name*" maxlength="64" id="signup_FullName_'.$number.'" class="field" data-status="required" onblur="checkName('.$number.')"/>
          <span id="name" class="error-msg"></span>
      </div>';
    }
    else if($fullname == 'optional'){
      echo '<div class="name-wrap">
    <input type="text" name="FullName" placeholder="Full Name" maxlength="64" id="signup_FullName_'.$number.'" class="field" data-status="optional" onblur="checkName('.$number.')"/>
      </div>';
    }
   }
   //Email will always be set, it is required no matter what, no reason to check for it
    echo '<div class="email-wrap">
            <input type="email" name="Email" placeholder="Email*" maxlength="64" id="signup_Email_'.$number.'" class="field" data-status="required" onblur="checkEmail('.$number.')"/>
            <span id="email" class="error-msg"></span>
          </div>';
   // Check if Phone is set
   if($phone != 'not used'){
    if( $phone == 'required' ) {
      echo '<div class="phone-wrap">
    <input type="text" name="Mobile" placeholder="Phone*" maxlength="64" id="signup_Mobile_'.$number.'" class="field" data-status="required" onblur="checkPhone('.$number.')"/>
    <span id="phone" class="error-msg">
      </div>';
    }
    else if( $phone == 'optional' ) {
      echo '<div class="phone-wrap">
    <input type="text" name="Mobile" placeholder="Phone" maxlength="64" id="signup_Mobile_'.$number.'" class="field" data-status="optional" onblur="checkPhone('.$number.')"/>
      </div>';
    }
   }
   // Check if Location is set
   if($location != 'not used'){
    if( $location == 'required' ) {
     echo '<div class="location-wrap"><select name="City" id="signup_City_'.$number.'" class="field" data-status="required" onchange="checkLocation('.$number.')"/>
      <option value="" disabled selected>Location*</option>';
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
      echo '</select>
  <span id="location" class="error-msg"></span>
  </div>';
    }
    else if( $location == 'optional' ) {
     echo '<div class="location-wrap"><select name="City" id="signup_City_'.$number.'" class="field" data-status="optional" onchange="checkLocation('.$number.')"/>
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
      echo '</select></div>';
    }
   }
  // Check if interests
   if($interests != 'not used'){
    if($interests == 'required' && $dropdown == 'dropdown' ) {
      if($placeholder){
       echo '<div class="service-wrap">
    <select name="SkillsInterests" id="signup_SkillsInterests_'.$number.'" class="field" data-status="required" onchange="checkInterest('.$number.')">
               <option value="" disabled selected>'.$placeholder.'*</option>';
      }
      else{
        echo '<div class="service-wrap">
    <select name="SkillsInterests" id="signup_SkillsInterests_'.$number.'" class="field" data-status="required" onchange="checkInterest('.$number.')">
                <option value="" disabled selected>Service*</option>';
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
      </select>
  <span id="service" class="error-msg"></span>
  </div>';
   }
   else if( $interests == 'required' && $dropdown == 'textfield') {
    if($placeholder){
      echo '<div class="service-wrap">
    <input type="text" name="SkillsInterests" placeholder="'.$placeholder.'*" id="signup_SkillsInterests_'.$number.'" class="field" data-status="required" onblur="checkInterest('.$number.')">
    <span id="service" class="error-msg">
      </div>';
    }
    else{
      echo '<div class="service-wrap">
    <input type="text" name="SkillsInterests" placeholder="Service*" id="signup_SkillsInterests_'.$number.'" class="field" data-status="required" onblur="checkInterest('.$number.')">
    <span id="service" class="error-msg">
      </div>';
    }
  }
  else if($interests == 'optional' && $dropdown == 'dropdown' ) {
      if($placeholder){
       echo '<div class="service-wrap"><select name="SkillsInterests" id="signup_SkillsInterests_'.$number.'" class="field" data-status="optional" onchange="checkInterest('.$number.')">
              <option value="" disabled selected>'.$placeholder.'</option>';
      }
      else{
        echo '<select name="SkillsInterests" id="signup_SkillsInterests_'.$number.'" class="field" data-status="optional" onchange="checkInterest('.$number.')">
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
      </select></div>';
   }
   else if( $interests == 'optional' && $dropdown == 'textfield') {
    if($placeholder){
     echo '<div class="service-wrap">
    <input type="text" name="SkillsInterests" placeholder="'.$placeholder.'" id="signup_SkillsInterests_'.$number.'" class="field" data-status="optional" onblur="checkInterest('.$number.')">
     </div>';
    }
    else{
     echo '<div class="service-wrap">
    <input type="text" name="SkillsInterests" placeholder="Service" id="signup_SkillsInterests_'.$number.'" class="field" data-status="optional" onblur="checkInterest('.$number.')">
     </div>';
    }
  }
}
  if($captcha == 'required'){
   echo '</div>';
    echo '<div id="captchaTable">
    <div id="captchaText">For security purposes, please type the letters and numbers you see below.</div>
        <ul>
        <li><img id="captchaImage" src="https://app.crystalpec.com/captcha.pl?20150616061554"></li>
        <li><input id="captchaInput" type="text" name="captcha" size="16" maxlength="6" style="color: #fff; font-weight: bold; font-family: verdana; font-size: 14px;" class="field"></li>
        <li><input id="formSubmit" type="submit" name="formSubmit" value="Send" onclick="javascript: return SubmitForm(event, '.$number.')" /></li></ul></div>';
   }
   if($captcha != 'required'){
   if ( $submit ) {
      echo '<input id="formSubmit" type="submit" name="formSubmit" value="'.$submit.'" onclick="javascript: return SubmitForm(event, '.$number.')" />';
  echo '</div>';
   }
   if ( !$submit ) {
      echo '<input id="formSubmit" type="submit" name="formSubmit" value="Send" onclick="javascript: return SubmitForm(event, '.$number.')" />';
  echo '</div>';
   }
 }
   
   echo'<input type="hidden" name="Referrer" value="" /> 
        <input type="hidden" name="qstring" value="'.$action.'" /> 
        <input type="hidden" name="formSubmitCheck" value="1" />
    </div>';
   echo '</form>
          </div>
        </div>';
   echo $after_widget;
  }
}
// register widget
add_action('widgets_init', create_function('', 'return register_widget("tightrope_form");'));

//enqueue validation script
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