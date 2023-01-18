const signup = document.querySelector(".signup");
const signin = document.querySelector(".signin");
const signinButton = document.querySelector('.signinButton');
const signupButton = document.querySelector('.signupButton');

signinButton.addEventListener("click", function (){
    signup.classList.add('hidden');
    signin.classList.remove('hidden');
})

signupButton.addEventListener("click", function (){
    signup.classList.remove('hidden');
    signin.classList.add('hidden');
})

