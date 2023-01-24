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


function addNewForm(){
    document.querySelector('#cnct').innerHTML +=
    `<div>
        <div class="form-floating">
            <input value="" name="category" type="text" id="categoryModalInput" class="form-control" placeholder="Category Name"/>
            <label for="category" class="form-label">Category</label>
            <button type="button" onclick="addNewForm()">Add</button>
            <button type="button" onclick="deleteNewForm(this)">Delete</button>
        </div>
    </div>`;
}


function deleteNewForm(element){
    element.parentNode.remove();
}



