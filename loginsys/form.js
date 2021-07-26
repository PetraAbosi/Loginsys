function validateFirstName(){
    const name = document.getElementById('firstName').value;
    
    if(!name.match(/^[A-Za-z]/)){
    alert('Enter a valid name');
    }
    return name;
    
    }
    
    function validateMiddleName(){
        const name = document.getElementById('middleName').value;
    
    if(!name.match(/^[A-Za-z]/)){
    alert('Enter a valid name');
    }
    return name;
    
    }
    
    function validateLastName(){
        const name = document.getElementById('lastName').value;
    
        if(!name.match(/^[A-Za-z]/)){
        alert('Enter a valid name');
        }
        return name;
    }
    

    
    function validateEmail(){
        const name = document.getElementById('email').value;
    
        if(!name.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
        alert('Enter a valid email');
        }
        return name;
    }
    
    function validateGender(){
        const name = document.getElementById('').value;
    if(!name.match(/^[A-Za-z]/)){
        alert('Enter a valid gender');
        }
        return name;
    }
    
    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
        });
        return vars;
    }
    
    /*
    var fname = getUrlVars()["fname"];
    var midname = getUrlVars()["midname"];
    var lname = getUrlVars()["lname"];
    var address = getUrlVars()["address"];
    var phone = getUrlVars()["phone"];
    var email = getUrlVars()["email"];
    var mgender = getUrlVars()["mgender"];
    
    document.getElementById('name').innerHTML = fname + " " + midname + " "  + lname;
    document.getElementById('address').innerHTML = address;
    document.getElementById('phone').innerHTML = phone;
    document.getElementById('email').innerHTML = email;
    */
    
    
    
    
    