
// sign up model here 
document.addEventListener('DOMContentLoaded', function() {
    let modal = document.getElementById("signupModal");
    let btn = document.getElementById("signupBtn");
    let span = document.getElementsByClassName("close-btn")[0];
 
    if(modal && btn && span){
        btn.onclick = function() {
        modal.style.display = "block";
    }
    }

    
    if(modal && btn && span){
        span.onclick = function() {
        modal.style.display = "none";
    }
    }
   if(modal && btn && span){
     window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            console.log(modal)
        }
    }
   }

});



document.addEventListener('DOMContentLoaded', function(){
  // url signup_error 
  const urlParams =   new URLSearchParams(window.location.search);
  if(urlParams.has('signup_error')){
    let model = document.getElementById('signupModal');
    if(model){
        model.style.display = "block";
    }
  }
});

//switchToSignup button 
document.addEventListener("DOMContentLoaded",function(){
    let switchToSignup = document.querySelector('#switchToSignup');
    let switchToLogin = document.querySelector('#switchToLogin');
    let modal = document.getElementById("signupModal");
    let loginModal = document.getElementById("loginModal");

    
    if(loginModal){
        switchToSignup.onclick = function(){
            loginModal.style.display = "none";
            modal.style.display = 'block';

        }
    }

    if(modal){
        switchToLogin.onclick = function(){
            modal.style.display = "none";
            loginModal.style.display = 'block';

        }
    }
});

//Log in mode here

document.addEventListener("DOMContentLoaded", function(){
    let loginModal = document.getElementById("loginModal");
    let loginbtn = document.getElementById("loginBtn");
    let login_close = document.querySelector('.login_close-btn');

   //  বাটনে ক্লিক করলে পপআপ বন্ধ হবে
    if(loginModal && loginbtn){
        login_close.onclick = function() {
        loginModal.style.display = "none";
    }
    }
    if(loginModal && loginbtn){
        window.onclick = function(event) {
        if (event.target == loginModal) {
            loginModal.style.display = "none";
        }
    }
    }
 // whene click on btn then show popup
    if(loginModal && loginbtn){
       loginbtn.onclick = function(){
        loginModal.style.display = 'block';
       } 
    }

});

// add log in form placeholder text
document.addEventListener('DOMContentLoaded',function(){
    let loginField = document.querySelector("#custom-login-form input[name='log']" );
    let loginPassword = document.querySelector("#custom-login-form input[name='pwd']");

    if(loginField && loginPassword){
        loginField.setAttribute('placeholder','ইমেইল আথবা ইউজার নেইম');
        loginField.setAttribute('autocomplete', 'username');
    }
    if(loginPassword && loginField){
        loginPassword.setAttribute('placeholder','পাওয়াড');
        loginPassword.setAttribute('autocomplete', 'password');
    }

});






