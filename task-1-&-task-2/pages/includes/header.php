<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET['page']; ?></title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<body>
    <section>
        <?php if(isset($_SESSION['id'])) { ?>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
                <a class="navbar-brand text-light" href="route.php?page=area"><span class="fw-bolder">Intern</span>project</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <!-- <li class="nav-item">
            <a class="nav-link text-light active" aria-current="page" href="route.php?page=home">Home</a>
            </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="route.php?page=area" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Area
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="route.php?page=circle">Circel</a></li>
                                <li><a class="dropdown-item" href="route.php?page=rectangle">Rectangular </a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="route.php?page=logout">Logout</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <?php } ?>
    </section>

   