var validName;
var validPhone;
var validEmail;
var validInterest;
var validLocation;
var values = new Array();
var str = '';
var str2 = '';
var noname = nophone = noemail = nointerest = nolocation = true;
function validateData(form,x){
    event.preventDefault();
        var name = document.getElementById(x).getAttribute('name');

        if(name == "FullName"){
        var fname = document.signupForm.FullName.value;
        var regEx = /[a-zA-Z]/;
        if(!fname.match(regEx)){
        validName = false;
        alert("Not A Valid Name");
        if(values.length == 0){
        values.push("Invalid Name");
        noname = false;
            return;
        }
        else{
        for(var i = 0; i < values.length; i++){
            if(values[i] == "Invalid Name"){
            noname = false;
            return;
            }
        }
         if(noname){
         values.push("Invalid Name");
             noname = false;
         return;
        }
            }
    }
    validName = true;
      for(var i = 0; i < values.length; i++){
          if(values[i] == "Invalid Name"){
         values.splice(i,1);
                 noname = true;
         return;
          } 
      }
    }

        if(name == "Mobile"){
        var phoneNum = document.signupForm.Mobile.value;
        var phoneRE = /(?:\d{3}|\(\d{3}\))([-\/\.])\d{3}\1\d{4}/;
        if(!phoneNum.match(phoneRE)){
        validPhone = false;
        alert("Not A Valid Phone Number Use xxx-xxx-xxxx Format");
        if(values.length == 0){
        values.push("Invalid Phone");
            nophone = false;
        return;
        }
        else{
        for(var i = 0; i < values.length; i++){
            if(values[i] == "Invalid Phone"){
            nophone = false;
            return;
            }
        }
         if(nophone){
            values.push("Invalid Phone");
                nophone = false;
        return;
        }
            }
    }
    validPhone = true;
      for(var i = 0; i < values.length; i++){
          if(values[i] == "Invalid Phone"){
         values.splice(i,1);
         nophone = true;
         return;
          } 
      }
    }

     if(name == "Email"){
         var eAddress = document.signupForm.Email.value;
         if(((eAddress != null) && (eAddress.length==0)) || ((eAddress != null) && (eAddress.length>0) &&   (eAddress.indexOf('@') == -1))) {
        validEmail = false;
        alert("Not A Valid Email");
        if(values.length == 0){
        values.push("Invalid Email");
            noemail = false;
        return;
        }
        else{
        for(var i = 0; i < values.length; i++){
            if(values[i] == "Invalid Email"){
            noemail = false;
            return;
            }
        }
         if(noemail){
            values.push("Invalid Email");
            noemail = false;
        return;
        }
            }
    }
    validEmail = true;
      for(var i = 0; i < values.length; i++){
          if(values[i] == "Invalid Email"){
         values.splice(i,1);
             noemail = true;
         return;
          } 
      }
    }
}



function SubmitForm()
{
    event.preventDefault();
    
  var interest = document.getElementById('signup_SkillsInterests');
  var location = document.getElementById('signup_City');
  var phone = document.getElementById('signup_Mobile');

  if(phone){
    var phoneNum = phone.value;
        var phoneRE = /(?:\d{3}|\(\d{3}\))([-\/\.])\d{3}\1\d{4}/;
        if(!phoneNum.match(phoneRE)){
        validPhone = false;
        alert("Not A Valid Phone Number Use xxx-xxx-xxxx Format");
        if(values.length == 0){
        values.push("Invalid Phone");
            nophone = false;
        return;
        }
        else{
        for(var i = 0; i < values.length; i++){
            nophone = false;
            return;
            }
        }
         if(nophone){
            values.push("Invalid Phone");
                nophone = false;
        return;
        }
            }
    validPhone = true;
      for(var i = 0; i < values.length; i++){
          if(values[i] == "Invalid Phone"){
         values.splice(i,1);
         nophone = true;
         return;
          } 
      }
    }

  if(interest){
    if(!interest.value){
    validInterest = false;
    if(values.length == 0 ){
              values.push("Invalid Service");
        nointerest = false;
    }
    else{
        for(var i = 0; i < values.length; i++){
      if(values[i] == "Invalid Service"){
          nointerest = false;
          break;
      }
        }
    if(nointerest){
       values.push("Invalid Service");
       nointerest = false;
    }
    }
  }
  else{
            validInterest = true;
      for(var i = 0; i < values.length; i++){
          if(values[i]=="Invalid Service"){
        values.splice(i,1);
        nointerest = true;
        break;
          }
      }
  }
}

if(location){
    if(!location.value){
    validLocation = false;
    if(values.length == 0 ){
              values.push("Invalid Location");
        nolocation = false;
    }
    else{
        for(var i = 0; i < values.length; i++){
      if(values[i] == "Invalid Location"){
          nolocation = false;
          break;
      }
        }
    if(nolocation){
       values.push("Invalid Location");
       nointerest = false;
    }
    }
  }
  else{
            validLocation = true;
      for(var i = 0; i < values.length; i++){
          if(values[i]=="Invalid Location"){
        values.splice(i,1);
        nolocation = true;
        break;
          }
      }
  }
}

    if(validName == false || validEmail == false || validPhone == false || validInterest == false || validLocation){
        str2 = values.toString();
        alert(str2);
    }
    else{
        document.forms['signupForm'].submit();
    }
}
