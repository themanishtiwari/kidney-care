    function clearErrors(){
    
    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }
    
    }
    function seterror(id, error){
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
    
    }
    
    function validateForm(){
    var returnval = true;
    clearErrors();
    
    //perform validation and if validation fails, set the value of returnval to false
    var name = document.forms['contact_form']["name"].value;
    var nametest = /^[A-Za-z ]+$/;
    if (!nametest.test(name)){
        seterror("name", "Name is not Valid");
        returnval = false;
    }

    if (name.length>100){
        seterror("name", "Name is too long");
        returnval = false;
    }
    var disease = document.forms['contact_form']["disease"].value;
    if (disease.length==0){
        seterror("disease", "Please select disease");
        returnval = false;
    }

    var phone = document.forms['contact_form']["phone"].value;
    if (phone.length> 14){
        seterror("phone", "invalid phone number");
        returnval = false;
    }
    if (phone.length< 10){
        seterror("phone", "invalid phone number");
        returnval = false;
    }
    var phonetest = /^[0-9 ]+$/;
    if (!phonetest.test(phone)){
        seterror("phone", "invalid phone number");
        returnval = false;
    }
    var format = /[`!@#$%^*()_\=\[\]{};':"\\|<>\/?~]/;
    var message = document.forms['contact_form']["message"].value;
    if (format.test(message)){
        
        seterror("message", "Special Characters not allowed");
        returnval = false;
    }
    if (message.length>300){
        
        seterror("message", "Max. 300 Characters allowed");
        returnval = false;
    }
    return returnval;
    }
