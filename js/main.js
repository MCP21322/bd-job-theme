
document.addEventListener('DOMContentLoaded', function() {
    let modal = document.getElementById("signupModal");
    console.log(modal);
    let btn = document.getElementById("signupBtn");
    let span = document.getElementsByClassName("close-btn")[0];
    // বাটনে ক্লিক করলে পপআপ খুলবে
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // (x) বাটনে ক্লিক করলে পপআপ বন্ধ হবে
    span.onclick = function() {
        modal.style.display = "none";
    }

    // পপআপের বাইরে ক্লিক করলে বন্ধ হবে
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});



document.addEventListener('DOMContentLoaded', function(){
  // যদি ইউআরএল-এ signup_error থাকে, তবে পপআপটি অটোমেটিক ওপেন করো
  const urlParams =   new URLSearchParams(window.location.search);
  if(urlParams.has('signup_error')){
    let model = document.getElementById('signupModal');
    if(model){
        model.style.display = "block";
    }
  }else{
    model.style.display = "none";
  }
});
