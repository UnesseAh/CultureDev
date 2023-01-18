<!DOCTYPE html>
<html lang="en">
<?php @include('./includes/dashboard/head.php') ?>
<body class="bg-dark">
    <!--//////////////// Navigation Section /////////////////////// -->
    <?php @include('./includes/dashboard/navbar.php') ?>
    
    <!--////////////////////////// TABLE SECTION //////////////////////////-->
    <button type="button" class="btn rounded-pill text-light bg-primary" data-bs-toggle="modal"  data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus"></i>Add Article</button>

    <div class="table-responsive mt-2">
        <table id="myTable" class="table table-dark table-striped table-bordered rounded shadow-sm table-hover">
            <thead>
                <tr class="" >
                <th scope="col" class="text-center">Image</th>
                <th scope="col" class="text-center">Title</th>
                <th scope="col" class="text-center">Subtitle</th>
                <th scope="col" class="text-center">Author</th>
                <th scope="col" class="text-center">Category</th>
                <th scope="col" class="text-center">Content</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
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
                    <input name="content" type="text" id="price" class="form-control" placeholder="Enter the price of the product"/>
                </div>
                <div>
                    <label for="image" class="form-label fw-bold">Image</label>
                    <input name="image" type="file" id="image" class="form-control" accept=".jpg, .png, .jpeg"/>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="addProduct" class="btn btn-primary">ADD</button>
                </div>
            </form>
            </div>
        </div>
        </div>
      <!--//////////////// MODAL ENDS HERE ///////////////////////-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>