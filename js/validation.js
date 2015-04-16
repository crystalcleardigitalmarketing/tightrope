var validName;
var validPhone;
var validEmail;
var validInterest;
var values = new Array();
var str = '';
var str2 = '';
var noname = nophone = noemail = nointerest = true;
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

    if(!interest.value){
    validInterest = false;
    if(values.length == 0 ){
              values.push("Invalid Interest");
        nointerest = false;
    }
    else{
        for(var i = 0; i < values.length; i++){
      if(values[i] == "Invalid Interest"){
          nointerest = false;
          break;
      }
        }
    if(nointerest){
       values.push("Invalid Interest");
       nointerest = false;
    }
    }
  }
  else{
            validInterest = true;
      for(var i = 0; i < values.length; i++){
          if(values[i]=="Invalid Interest"){
        values.splice(i,1);
        nointerest = true;
        break;
          }
      }
  }

    if(validName == false && validEmail == false && validPhone == false && validInterest == false){
        str2 = values.toString();
        alert(str2);
    }
    else{
        document.forms['signupForm'].submit();
    }
}