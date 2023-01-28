function AddNewFormAr(item){
    
    document.getElementById('container-Form').innerHTML += `<div> <div class="form-floating">
    <input value="" name="title[]" type="text" id="titleInput" class="form-control my-3" placeholder="Title"/>
    <label for="title" class="form-label">Title</label>
    </div>
    <div class="form-floating">
    <input value="" name="author[]" type="text" id="authorInput" class="form-control my-3" placeholder="Writer"/>
    <label for="Writer" class="form-label">Writer</label>
    </div>
    <select name="category[]" class="form-select my-3" aria-label="Default select example" id="category" required>
    <option selected disabled value="">Select Category</option>
        ${item}
    </select>
    <div >
    <textarea value="" class="my-3" name="content[]" name="" id="contentInput" cols="30" rows="10">
    </textarea>
    </div>
    <div>
    <input name="image[]" type="file" id="image" class="form-control my-3" accept=".jpg, .png, .jpeg, .webp"/>
    </div>
    </div>
    `;
}


function clearModal(){
    document.querySelector('#articles-form').reset();

    document.querySelector('#addButton').style.display = "block";
    document.querySelector('#updateButton').style.display = 'none';
    
}

