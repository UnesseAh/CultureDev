<?php
    session_start();
    if(!isset($_SESSION['userId'])){
        header('location: ./index.php');
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php @include('./includes/dashboard/head.php') ?>
<body class="">
    <!--//////////////// Navigation Section /////////////////////// -->
    <?php @include('./includes/dashboard/navbar.php') ?>
    
    <div class="col-md-10 mx-auto d-flex justify-content-between py-4 ">
        <div class="stats-cards rounded w-25 p-3 d-flex flex-column align-items-center bg-dark text-light">
            <?php include('./stats.controller.php');
            $displayStats = new getStatistics();
            ?>
            <p>Total Number of Articles</p>
            <p><?php echo $displayStats->getTotalArticles()?></p>
        </div>
        <div class="stats-cards rounded w-25 p-3 d-flex flex-column align-items-center bg-dark text-light">
            <p>Total Number of Categories</p>
            <p><?php echo $displayStats->getTotalCategories()?></p>
        </div>
        <div class="stats-cards rounded w-25 p-3 d-flex flex-column align-items-center bg-dark text-light">
            <p>Total Number of Devs</p>
            <p><?php echo $displayStats->getUniqueAuthors()?></p>
        </div>
    </div>
    <!--////////////////////////// TABLE SECTION //////////////////////////-->
    <div class="col-md-10 mx-auto d-flex justify-content-end">
        <button type="button" class="btn rounded-pill text-light bg-primary my-3 " data-bs-toggle="modal"  data-bs-target="#staticBackdrop" onclick="clearModal()"><i class="fa-solid fa-circle-plus px-1"></i>Add Article</button>
    </div>
    <div class="table-responsive mt-2 categories-table col-md-10 mx-auto">
    <table id="table" class="table table-dark table-striped table-bordered rounded shadow-sm table-hover table-group-divider table-articles text-light" style="width:100%">
        <!-- <table id="myTable" class=""> -->
            <thead class="table-light">
                <tr>
                <tr class=>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center th-image w-25">Image</th>
                    <th scope="col" class="text-center">Title</th>
                    <th scope="col" class="text-center">Author</th>
                    <th scope="col" class="text-center">Category</th>
                    <th scope="col" class="text-center">Content</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                @include('./article.controller.php');
                $display = new Crud();
                $articles = $display->read("articles", "*");
                ?>
                <?php foreach ($articles as $article) {
                    $id = $article['id'];
                    $image = $article['image'];
                    $title = $article['title'];
                    $author = $article['author'];
                    $category = $article['category_id'];
                    $content = $article['body'];
                ?>
                <tr id="<?php echo $article['id'] ?>">
                    <td scope="col" class="text-center"><?php echo $id ?></td>
                    <td scope="col" class="text-center"><img class="w-25" src="./src/img/<?php echo $image ?>"></td>
                    <td scope="col" class="text-center titleText"><?php echo $title ?></td>
                    <td scope="col" class="text-center authorText"><?php echo $author ?></td>
                    <td scope="col" class="text-center categoryText">
                        <?php
                            $displayCategories = new Crud();
                            $categories = $displayCategories->read("categories", "*");
                            foreach($categories as $category) {
                                if($article['category_id'] == $category['id']) echo $category['category'];
                            }
                        ?>
                    </td>
                    <td scope="col" class="text-center contentText"><?php echo $content ?></td>
                    <td class="d-flex justify-content-evenly">
                        <a name="updateArticle" type="submit" data-bs-toggle="modal"  data-bs-target="#staticBackdrop" class="btn btn-success mb-2 mt-2 rounded-pill" onclick="fillModalOfArticles(<?php echo $article['id']; ?>,`<?php echo $article['category_id']; ?>`)">Update</a>
                        <form action="./article.controller.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $article['id'] ?>">
                            <button name="deleteArticle" type="submit" class="btn btn-danger mb-2 mt-2 rounded-pill">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--//////////////// MODAL STARTS HERE ///////////////////////-->
    <div  class="modal fade modal-xl" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Article</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form data-parsley-validate id="articles-form" action="./article.controller.php" method="post" class="form-transparent" enctype="multipart/form-data">
                <div class="modal-body">
                    <div>
                        <input type="hidden" name="modalId" id='modalId' value="" class="my-3" data-parsley-required data-parsley-trigger="keyup">
                    </div>
                <div class="form-floating">
                    <input value="" name="title[]" type="text" id="titleInput" class="form-control my-3" placeholder="Title" data-parsley-trigger="keyup" data-parsley-required/>
                    <label for="title" class="form-label">Title</label>
                </div>
                <div class="form-floating">
                    <input value="" name="author[]" type="text" id="authorInput" class="form-control my-3" placeholder="Writer" data-parsley-trigger="keyup" data-parsley-required/>
                    <label for="Writer" class="form-label">Writer</label>
                </div>
                <select name="category[]" class="form-select my-3" aria-label="Default select example" id="category" required>
                    <option selected disabled value="">Select Category</option>
                    <?php shown() ?>
                </select>
                <div >
                    <textarea class="my-3 w-100" name="content[]" id="contentInput" cols="30" rows="10">
                    </textarea>
                </div>
                <div>
                    <input name="image[]" type="file" id="image" class="form-control my-3" accept=".jpg, .png, .jpeg, .webp" data-parsley-trigger="keyup"/>
                    <input type="hidden" value="<?php  ?>">
                </div>
                <div id="container-Form">
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="plusButton" onclick="AddNewFormAr(`<?php shown();?>`)" class="btn btn-primary">+</button>
                <button type="submit" id="addButton" name="addNewArticle" class="btn btn-primary">Add</button>
                <button type="submit" id="updateButton" name="editArticle" class="btn btn-warning">Update</button>
                </div>
            </form>
            </div>
        </div>
        </div>
      <!--//////////////// MODAL ENDS HERE ///////////////////////-->
    <script defer src="https://parsleyjs.org/dist/parsley.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./src/js/formar.js"></script>
    <script src="./src/js/form.js"></script>
    <script src="./src/js/datatable.js"></script>
    <script>
        $(form).parsley();
    </script>
</body>
</html>