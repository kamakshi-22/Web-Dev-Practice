function validate() {
    const name = document.getElementById("name").value;
    const age = document.getElementById("age").value;
    const gender = document.querySelector("input[name=gender]:checked").value;
    const address = document.getElementById("address").value;
    const email = document.getElementById("email").value;
    const rate = document.getElementById("rating").value;
    const password1 = document.getElementById("pass").value;
    const password2 = document.getElementById("pass2").value;

    //name
    var user = document.getElementById(name);
    if (name=="") 
    {alert("name can't be empty");
    return false;}
        
 return true;
}
