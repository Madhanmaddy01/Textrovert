const pwdfield = document.querySelector(".form input[type='password']");
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = ()=>{
    if(pwdfield.type== "password"){
        pwdfield.type ="text";
        toggleBtn.classList.add("active");
    }else{
        pwdfield.type ="password";
        toggleBtn.classList.remove("active");
    }
}