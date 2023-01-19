<!DOCTYPE html>
<html lang="en">
<?php @include('./includes/dashboard/head.php') ?>
<body class="bg-dark">
    <!--//////////////// Navigation Section /////////////////////// -->
    <?php @include('./includes/dashboard/navbar.php') ?>
    
    
    <!--////////////////////////// TABLE SECTION //////////////////////////-->
    <div class="col-md-10 mx-auto d-flex justify-content-end">
        <button type="button" class="btn rounded-pill text-light bg-primary my-3 " data-bs-toggle="modal"  data-bs-target="#staticBackdrop"><i class="fa-solid fa-circle-plus px-1"></i>Add Article</button>
    </div>
    <div class="table-responsive mt-2 categories-table col-md-10 mx-auto">
        <table id="myTable" class="table table-dark table-striped table-bordered rounded shadow-sm table-hover">
            <thead>
                <tr>
                <tr class=>
                    <th scope="col" class="text-center">Id</th>
                    <th scope="col" class="text-center">Image</th>
                    <th scope="col" class="text-center">Title</th>
                    <th scope="col" class="text-center">Subtitle</th>
                    <th scope="col" class="text-center">Author</th>
                    <th scope="col" class="text-center">Category</th>
                    <th scope="col" class="text-center">Content</th>
                    <th scope="col" class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col" class="text-center">1</th>
                    <th scope="col" class="text-center">img.jpg</th>
                    <th scope="col" class="text-center">5 Steps to Learn Coding</th>
                    <th scope="col" class="text-center">Learn Coding</th>
                    <th scope="col" class="text-center">Traversy Media</th>
                    <th scope="col" class="text-center">Web Development</th>
                    <th scope="col" class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sit recusandae quia unde exercitationem nesciunt quo molestiae ullam aliquid perferendis.</th>
                    <th scope="col" class="text-center">
                        <button type="submit" class="btn btn-info rounded-pill mt-2 mb-2">Update</button>
                        <button name="deleteProduct" type="submit" class="btn btn-danger mb-2 mt-2 rounded-pill">Delete</button>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
    <!--//////////////// MODAL STARTS HERE ///////////////////////-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Article</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../functions/crud.php" method="post" class="form-transparent" enctype="multipart/form-data">
                <div class="modal-body">
                <div>
                    <label for="title" class="form-label fw-bold">Title</label>
                    <input name="title" type="text" id="title" class="form-control" placeholder="Enter the Title of the Article"/>
                </div>
                <div>
                    <label for="title" class="form-label fw-bold">Subtitle</label>
                    <input name="subtitle" type="text" id="title" class="form-control" placeholder="Enter the Subtitle of the Article"/>
                </div>
                <label for="category" class="form-label fw-bold">Category</label>
                <select name="category" class="form-select" aria-label="Default select example" id="category" required>
                    <option selected disabled value="">Please select</option>
                    <option value="1">Cloud</option>
                    <option value="2">Databases</option>
                    <option value="3">Computer Science</option>
                    <option value="4">Mobile Development</option>
                    <option value="5">Open Source</option>
                    <option value="6">Security</option>
                    <option value="7">Startup</option>
                    <option value="8">Tech News</option>
                    <option value="9">Web Development</option>
                </select>

                <div>
                    <label for="content" class="form-label fw-bold">Content</label>
                    <input name="content" type="text" id="price" class="form-control" placeholder="Enter the body of the article"/>
                </div>
                <div>
                    <label for="image" class="form-label fw-bold">Image</label>
                    <input name="image" type="file" id="image" class="form-control" accept=".jpg, .png, .jpeg"/>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="addProduct" class="btn btn-primary">Add New Article</button>
                </div>
            </form>
            </div>
        </div>
        </div>
      <!--//////////////// MODAL ENDS HERE ///////////////////////-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>