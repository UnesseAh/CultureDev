const categoryModalInput = document.querySelector('#categoryInputId');
const categoryModal = document.querySelector('#categoryModalInput');
const addCategoryButton = document.querySelector('#addCategoryButton');
const updateCategoryButton = document.querySelector('#updateCategoryButton');


function fillModalOfCategories(id){
    const categoryInput = document.getElementById(id).querySelector('#categoryId').textContent;
    const categoryTable = document.getElementById(id).querySelector('#categoryInput').textContent;

    categoryModalInput.value = categoryInput;
    categoryModal.value = categoryTable;

    addCategoryButton.style.display = 'none';
    updateCategoryButton.style.display = 'block';
}

function resetCategoryForm(){
    updateCategoryButton.style.display = 'none';
    addCategoryButton.style.display = 'block';
    
    document.querySelector('#categoryForm').reset();
}

function fillModalOfArticles(id, categoryId){
    
    document.getElementById('plusButton').style.display = 'none';
    document.getElementById('addButton').style.display = 'none';
    document.querySelector('#updateButton').style.display = 'block';
    
    const titleInput = document.querySelector('#titleInput');
    const authorInput = document.querySelector('#authorInput');
    const contentInput = document.querySelector('#contentInput');
    const categoryValue = document.querySelector('#category');
    const modalId = document.querySelector('#modalId')
    
    const titleText = document.getElementById(id).querySelector('.titleText').textContent;
    const authorText = document.getElementById(id).querySelector('.authorText').textContent;
    const contentText = document.getElementById(id).querySelector('.contentText').textContent;
    
    titleInput.value = titleText;
    authorInput.value = authorText;
    contentInput.value = contentText;
    modalId.value = id;
    categoryValue.value = categoryId;
}