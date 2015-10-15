  //The following functions all check whether or not the values entered in the form are correct.
  //There is a separate validation check for each field and each one makes sure the field is not
  //empty and that it is a valid piece of data for that field.
  //all of our check functions will take the number of the form instance as an argument so we 
  //know what field in what form to analyze/

  //our name validation, check to make sure only letters were entered,
  //no odd characters or anything.
  function checkName(number){
    
    var number = parseInt(number);
    var regEx = /[a-zA-Z]/;
    var id = 'signup_FullName_'+number;
    var name = document.getElementById(id);
    var msg = document.getElementById('name');

    if(name.dataset.status == 'optional'){
  if(!name.value){
    name.setAttribute('class', 'field valid');
    msg.innerHTML = "Passed";
    return true;
  } 
    }

    //check if we have a value or not for this field, if not check to see
    //if an invalid class has been added yet, if not add it and alert the user
    if (!name.value){
      if(name.getAttribute("class").indexOf('invalid') == -1){
        name.setAttribute('class', 'field invalid');
      }
      msg.innerHTML = "Required Field";
      return false;
    }

    //we get here if the field has a value, now we will make sure it is a valid one
    //if it is not valid we again check for an invalid class, if it is there alert users if 
    // it is not present add the class and then alert user to incorrect field
    if(!name.value.match(regEx)){
      if(name.getAttribute("class").indexOf('invalid') == -1){
        name.setAttribute('class', 'field invalid');
      }
        msg.innerHTML = "Invalid Name";
        return false;
      }
      //we have good data in this field and have passed validation
      //now we check to see if previous bad data was entered by looking for
      //our invalid class, if it is present remove it (we have good data now so it's no in-accurate to keep it)
      //we then set the new valid class which means we have good data
      if(name.getAttribute("class").indexOf('invalid') != -1){
        name.setAttribute('class', 'field valid');
  msg.innerHTML = "Passed";
        return true;
      }
      name.setAttribute('class', 'field valid');
      msg.innerHTML = "Passed";
      return true;
  }

  //every part of this function operates the same as above, the only
  //difference is that this one checks emails, but the functionality is the same.
  function checkEmail(number){
    
    var id = 'signup_Email_'+number;
    var email = document.getElementById(id);
    var msg = document.getElementById('email');

    if(email.dataset.status == 'optional'){
  if(!email.value){
    email.setAttribute('class', 'field valid');
    msg.innerHTML = 'passed';
  return true;
  } 
    }

    if (!email.value){
      if(email.getAttribute("class").indexOf('invalid') == -1){
        email.setAttribute('class', 'field invalid');
      }
      msg.innerHTML="Required Field";
      return false;
    }

    if(email.value.indexOf('@') == -1){
      if(email.getAttribute("class").indexOf('invalid') == -1){
        email.setAttribute('class', 'field invalid');
      }
        msg.innerHTML="Not A Valid Email";
        return false;
      }
      if(email.getAttribute("class").indexOf('invalid') != -1){
        email.setAttribute('class', 'field valid');
  msg.innerHTML="Passed";
        return true;
      }
      email.setAttribute('class', 'field valid');
      msg.innerHTML="Passed";
      return true;
  }

  //function is the same as the two previous ones.
  function checkPhone(number){
    
    var id = 'signup_Mobile_'+number;
    var regEx = /^\(?([1-9]{1}[0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    var phone = document.getElementById(id);
    var msg = document.getElementById('phone');
    console.log(msg);

    if(phone.dataset.status == 'optional'){
    if(!phone.value){
      phone.setAttribute('class', 'field valid');
      msg.innerHTML='Passed';
      return true;
    }
    }
    if (!phone.value){
      if(phone.getAttribute("class").indexOf('invalid') == -1){
        phone.setAttribute('class', 'field invalid');
      }
      msg.innerHTML="Required Field";
      return false;
    }

    if(!phone.value.match(regEx)){
      if(phone.getAttribute("class").indexOf('invalid') == -1){
        phone.setAttribute('class', 'field invalid');
      }
        msg.innerHTML="Invalid Phone";
        return false;
      }
      if(phone.getAttribute("class").indexOf('invalid') != -1){
        phone.setAttribute('class', 'field valid');
  msg.innerHTML='Passed';
        return true;
      }
      phone.setAttribute('class', 'field valid');
      msg.innerHTML='Passed';
      return true
  }

  //this function does the same as the previous ones also, fundamentally
  //all these functions do the same thing and operate under the same logic
  function checkInterest(number){
    
    var id = 'signup_SkillsInterests_'+number;
    var regEx = /[a-zA-Z0-9]/;
    var interest = document.getElementById(id);
    var msg = document.getElementById('service');

    if(interest.dataset.status == 'optional'){
  if(!interest.value){
    interest.setAttribute('class', 'field valid');
  msg.innerHTML='Passed';
  return true;
  } 
    }

    if (!interest.value){
      if(interest.getAttribute("class").indexOf('invalid') == -1){
        interest.setAttribute('class', 'field invalid');
      }
      msg.innerHTML="Required Field";
      return false;
    }
    if(!interest.value.match(regEx)){
      if(interest.getAttribute("class").indexOf('invalid') == -1){
        interest.setAttribute('class', 'field invalid');
      }
        msg.innerHTML="Not A Valid Service";
        return false;
      }
    if(interest.getAttribute("class").indexOf('invalid') != -1){
      interest.setAttribute('class', 'field valid');
      msg.innerHTML='Passed';
      return true;
    }
    interest.setAttribute('class', 'field valid');
  msg.innerHTML='Passed';
    return true;
  }

  //this one is a bit unique as the field will always be a select field
  //so this one just checks to see if an option was selected
  //if it was add a valid class
  function checkLocation(number){
    
    var id = 'signup_City_'+number;
    var location = document.getElementById(id);
    var msg = document.getElementById('location');
    location.setAttribute('class', 'field valid');
    msg.innerHTML='Passed';
  }

  //this function determines which fields are being used. if the field is in use check the data
  //again to make sure all is good before submitting.
  //first we check if the field is in use if so check for a value if not one then operate as above 
  //with empty fields, if field does have value check to see if it's been approved or not
  //add our approved or dissaproved values to our value array. this function will take in all of 
  //our possible fields as arugments so it can check for their existence.
  function findAllActiveFields(number, form, name, email, phone, interest, location){
    fields = [];
    formPass = true;
    
    if(name != null){
      var nameMsg = document.getElementById('name');
      namePass = true;
      if(!name.value){
  if (name.dataset.status == 'optional'){
    name.setAttribute('class', 'field valid');
      nameMsg.innerHTML='Passed';
  }
  else{
            if(name.getAttribute("class").indexOf('invalid') == -1){
            name.setAttribute('class', 'field invalid');
    nameMsg.innerHTML='Required Field';
            }
            namePass = false;  
        }
      }
      else if(name.value){
        namePass = checkName(number);
      }
      fields.push(namePass);
    }

    if(email != null){
  emailMsg = document.getElementById('email');
      emailPass = true;
      if(!email.value){
          if(email.dataset.status == 'optional'){
     email.setAttribute('class', 'field valid');
    emailMsg.innerHTML='Passed';
     }
     else{
               if(email.getAttribute("class").indexOf('invalid') == -1){
                   email.setAttribute('class', 'field invalid');
       emailMsg.innerHTML='Required Field';
               }
              emailPass = false;
     }
        }
      else if(email.value){
        emailPass = checkEmail(number);
      }
      fields.push(emailPass);
    }

    if(phone != null){
      phoneMsg = document.getElementById('phone');
      phonePass = true;
      if(!phone.value){
  if(phone.dataset.status == 'optional'){
    phone.setAttribute('class', 'field valid');
  phoneMsg.innerHTML='Passed';
  }
        else{
        if(phone.getAttribute("class").indexOf('invalid') == -1){
          phone.setAttribute('class', 'field invalid');
    phoneMsg.innerHTML='Required Field';
        }
        phonePass = false;
  }
      }
      else if(phone.value){
        
          phonePass = checkPhone(number);
      }
      fields.push(phonePass);
    }

    if(interest != null){
      serviceMsg = document.getElementById('service');
      interestPass = true;
      if(!interest.value){
  if(interest.dataset.status == 'optional'){
    interest.setAttribute('class', 'field valid');
    serviceMsg.innerHTML='Passed';
  }
  else {
        if(interest.getAttribute("class").indexOf('invalid') == -1){
          interest.setAttribute('class', 'field invalid');
          service.innerHTML='Required Field';
        }
        interestPass = false;
  }
      }
      else if(interest.value){
        interestPass = checkInterest(number); 
      
      }
      fields.push(interestPass);
    }

    if(location != null){
      var locationMsg = document.getElementById('location');
      locationPass = true;
      if(!location.value){
  if(location.dataset.status == 'optional'){
    location.setAttribute('class', 'field valid');
    locationMsg.innerHTML='Passed';
  }
  else {
        if(location.getAttribute("class").indexOf('invalid') == -1){
          location.setAttribute('class', 'field invalid');
          locationMsg.innerHTML='Required Field';
        }
   }
        locationPass = false;
      }
      fields.push(locationPass);
    }

    //loop through our value array, if we find any dissaproved values
    //break the loop set our form to dissaprove and return the dissaproved form
    //back to the submit function so it may alert the user
    for (var i = 0; i < fields.length; i++){
      if(fields[i] == false){
          formPass = false;
          break;
      }
    }
    //no dissaproved values, therefore
    //the form is approved, so send 
    //it back to the submit function
    //so it may continue submmitting
    return formPass;
  }

  //this function submits the form
  //it just takes the number of the form instance
  //as an argument
  function SubmitForm(event, number) {
    event.preventDefault();

    //get all of our form id strings so we can use them
    //to find our form elements
    var form_id = 'signupForm_'+number;
    var name_id = 'signup_FullName_'+number;
    var email_id = 'signup_Email_'+number;
    var phone_id = 'signup_Mobile_'+number;
    var interest_id = 'signup_SkillsInterests_'+number;
    var location_id = 'signup_City_'+number;

    //here are those lovely elements we were looking form
    var form = document.getElementById(form_id);
    var name = document.getElementById(name_id);
    var email = document.getElementById(email_id);
    var phone = document.getElementById(phone_id);
    var interest = document.getElementById(interest_id);
    var location = document.getElementById(location_id);
    
    //pass all these elements and the form to the above function so it may 
    //determine what fields we're using and if they're all valid and approved
    formpass = findAllActiveFields(number, form, name, email, phone, interest, location)

    //if we got a dissaproved form we alert the user
    //and break out of our function, if we are approved,
    //just go right ahead with submitting the form, no 
    //reason to alert user b/c the submission will be the alert.
    if(!formpass){
      alert("Please make sure all fields are correct");
      return;
    }
    if(formPass){
      form.submit();
   }
 }