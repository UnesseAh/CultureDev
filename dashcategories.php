<!DOCTYPE html>
<html lang="en">
<?php @include('./includes/dashboard/head.php') ?>
<body class="">
    <!--//////////////////////// Navigation Section /////////////////////// -->
    <?php @include('./includes/dashboard/navbar.php') ?>
    <!--///////////////////////// ASIDE BAR SECTION ///////////////////////-->
    
    <!--////////////////////////// TABLE SECTION //////////////////////////-->
    <div class="col-md-6 mx-auto d-flex justify-content-end">
        <button type="button" class="btn rounded-pill text-light bg-primary my-3 " data-bs-toggle="modal"  data-bs-target="#staticBackdrop"><i class="fa-solid fa-circle-plus px-1"></i>Add Category</button>
    </div>
    <div class="table-responsive mt-2 categories-table col-md-6 mx-auto">
        <table id="table" class="table  table-striped table-bordered rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center w-50">Categories</th>
                    <th scope="col" class="text-center"></th>
                </tr>
            </thead>
            <tbody class="table-dark">
                <?php
                @include('./category.Controller.php');
                $displayCategories = new Crud();
                $categories = $displayCategories->read("categories", "*");
                ?>
                <?php foreach ($categories as $category) {
                ?>
                <tr id="<?php echo $category['id'] ?>">
                    <td scope="col" id="categoryId" class="text-center"><?php echo $category['id']; ?></td>
                    <td scope="col" id="categoryInput" class="text-center"><?php echo $category['category']; ?></td>
                    <td scope="col" class="text-center d-flex justify-content-evenly">
                    <button name="updateCategory" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="submit" class="btn btn-warning mb-2 mt-2 rounded-pill" onclick="fillModalOfCategories(<?php echo $category['id'] ?>)">Update</button>
                    <form action="./category.Controller.php" method="POST">
                        <input type="hidden" name="categoryId" value="<?php echo $category['id'] ?>">
                        <button name="deleteCategory" type="submit" class="btn btn-danger mb-2 mt-2 rounded-pill">Delete</button>
                    </form>
                    
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--///////////////////////// MODAL STARTS HERE ///////////////////////-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="./category.Controller.php" method="post" class="form-transparent" enctype="multipart/form-data">
                <div class="modal-body">
                <input type="hidden" name="categoryInputId" id='categoryInputId' value="" class="my-3">

                <div class="form-floating">
                    <input value="" name="category" type="text" id="categoryModalInput" class="form-control" placeholder="Category Name"/>
                    <label for="category" class="form-label">Category</label>
                    <button type="button" onclick="addNewForm()">Add</button>
                </div>
                <div id="cnct">

                </div>
                </div>
               
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="editCategory" class="btn btn-warning">Update</button>
                <button type="submit" name="addNewCategory" class="btn btn-primary">ADD</button>
                </div>
            </form>
            </div>
        </div>
        </div>
      <!--//////////////// MODAL ENDS HERE ///////////////////////-->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
                    <script src="./src/js/datatable.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./src/js/form.js"></script>
    <script src="./src/js/main.js"></script>
</body>
</html>