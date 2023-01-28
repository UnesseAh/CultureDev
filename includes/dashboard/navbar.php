<nav class="dash-bg w-100 px-3 nav d-flex justify-content-between align-items-center bg-dark border-bottom border-light">
    <div class="d-flex justify-content-evenly align-items-center">
        <a class="nav-link active ps-0 fs-4" aria-current="page" href="#">CultureDev</a>
        <button class="btn text-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></button>
    </div>
    <p class="text-light m-0"><?php echo $_SESSION['username'];?><i class="fa-solid fa-user px-3"></i></p>
</nav>
<div class="offcanvas offcanvas-start text-bg-dark" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">CultureDev</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
        <div class="offcanvas-body d-flex  flex-column">
            <a class="btn btn-light my-4 btn-info btn-primary" href="../CultureDev/dasharticles.php">Articles</a>
            <a class="btn btn-light btn-primary" href="../CultureDev/dashcategories.php">Categories</a>
        </div>
    <div class="d-flex justify-content-center align-items-end my-4">
        <a href="./logout.php" class="btn btn-danger" >Log Out</a>
    </div>
</div>