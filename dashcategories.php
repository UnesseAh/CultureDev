<!DOCTYPE html>
<html lang="en">
<?php @include('./includes/dashboard/head.php') ?>
<body class="bg-dark">
    <!--//////////////// Navigation Section /////////////////////// -->
    <?php @include('./includes/dashboard/navbar.php') ?>
    <!--//////////////// ASIDE BAR SECTION ///////////////////////-->
    
    <!--////////////////////////// TABLE SECTION //////////////////////////-->
    <div class="col-md-6 mx-auto d-flex justify-content-end">
        <button type="button" class="btn rounded-pill text-light bg-primary my-3 " data-bs-toggle="modal"  data-bs-target="#staticBackdrop"><i class="fa-solid fa-circle-plus px-1"></i>Add Category</button>
    </div>
    <div class="table-responsive mt-2 categories-table col-md-6 mx-auto">
        <table id="myTable" class="table table-dark table-striped table-bordered rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Categories</th>
                    <th scope="col" class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col" class="text-center">#1</th>
                    <th scope="col" class="text-center">Cloud</th>
                    <th scope="col" class="text-center">
                    <button type="submit" class="btn btn-info rounded-pill mt-2 mb-2">Update</button>
                        <button name="deleteProduct" type="submit" class="btn btn-danger mb-2 mt-2 rounded-pill">Delete</button>
                    </th>
                </tr>
                <?php
                @include('./category.Controller.php');
                $displayCategories = new Crud();
                $displayCategories->read("category", "*");
                ?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                    <th scope="col" class="text-center"><?php echo $row['id']; ?></th>
                    <th scope="col" class="text-center"><?php echo $row['category']; ?></th>
                    <th scope="col" class="text-center">
                        <button type="submit" class="btn btn-info rounded-pill mt-2 mb-2">Update</button>
                        <button name="deleteProduct" type="submit" class="btn btn-danger mb-2 mt-2 rounded-pill">Delete</button>
                    </th>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--//////////////// MODAL STARTS HERE ///////////////////////-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add A New Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="./category.Controller.php" method="post" class="form-transparent" enctype="multipart/form-data">
                <div class="modal-body">
                <div>
                    <label for="category" class="form-label fw-bold">Category</label>
                    <input name="category" type="text" id="title" class="form-control" placeholder="category name"/>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="addNewCategory" class="btn btn-primary">ADD</button>
                </div>
            </form>
            </div>
        </div>
        </div>
      <!--//////////////// MODAL ENDS HERE ///////////////////////-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>