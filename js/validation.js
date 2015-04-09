function validateData(form,x){
    event.preventDefault();
    //var field = document.input_form.elements;
    var name = document.getElementById(x).getAttribute('name');
    //console.log(name);
    
    if(name == "Firstname"){
    var fname = document.signupForm.Firstname.value;
    var regEx = /[a-zA-Z]/;
        if(!fname.match(regEx)){
            alert("Not A Valid First Name Name");
        }
     }
    
    if(name == "Lastname"){
        var lname = document.signupForm.Lastname.value;
        var regEx = /[a-zA-Z]/;
        if(!lname.match(regEx)){
            alert("Not A Valid Last Name");
            }
        }

    if(name == "Fullname"){
        var lname = document.signupForm.Fullname.value;
        var regEx = /[a-zA-Z]/;
        if(!lname.match(regEx)){
            alert("Not A Valid Name");
            }
        }

        if(name == "Phone"){
        var phoneNum = document.signupForm.Phone.value;
        var phoneRE = /[0-9]{3} [0-9]{3}-[0-9]{4}$/;
        if(!phoneNum.match(phoneRE)){
            alert("Not A Valid Phone Number");
            }
        }

     if(name == "Email"){
         var eAddress = document.signupForm.Email.value;
         if(((eAddress != null) && (eAddress.length==0)) || ((eAddress != null) && (eAddress.length>0) &&   (eAddress.indexOf('@') == -1))) {
            alert("Not A Valid Email");
            }
        }

    if(name == "SkillsInterests"){
        var skills = document.signupForm.SkillsInterests.value;
        var regEx = /[a-zA-Z]/;
        if(!skills.match(regEx)){
            alert("Not A Valid Skill Or Interest");
            }
        }
    
}


function validate(){
    event.preventDefault();
    var fname = document.signupForm.Firstname.value;
    var lname = document.signupForm.Lastname.value;
    var phoneNum = document.signupForm.Phone.value;
    var eAddress = document.signupForm.Email.value;
    var skills = document.signupForm.SkillsInterests.value;
    var regEx = /[a-zA-Z]/;
    var phoneRE = /[0-9]{3} [0-9]{3}-[0-9]{4}$/;

    if(!fname.match(regEx) || fname == ""){
    var regEx = /[a-zA-Z]/;
        alert("Not A Valid First Name");
        }

    if(!lname.match(regEx) || lname == ""){
            alert("Not A Valid Last Name");
     }

        if(!phoneNum.match(phoneRE) || phoneNum == ""){
            alert("Not A Valid Phone Number ex 888 888-888");
    }
        
        if(((eAddress != null) && (eAddress.length==0)) || ((eAddress != null) && (eAddress.length>0) &&            (eAddress.indexOf('@') == -1))) {
            alert("Not A Valid Email");
        }

    if(!skills.match(regEx) || skills == ""){
            alert("Not A Valid Skill Or Interest");
     }
    return(true);
}