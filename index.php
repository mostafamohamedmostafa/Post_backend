<?php
//connection to data base
$connect = mysqli_connect("localhost", "root", "", "blog");

//query

$q = "select * from `post`";

$my_q = mysqli_query($connect, $q);

//3 loop over posts data

foreach ($my_q as $data) {
    //  echo '<pre>';

    //print_r($data);

    $data["title"];
    $data["article"];
    $data["created_at"];
    $data["img"];
}




?>


<!doctype html>
<html lang="en">

<head>
    <title>Blog-Posts</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@600&display=swap" rel="stylesheet">
</head>

<body>

    <section class="nav-bar">
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php"><i class="fas fa-user-shield"></i>Post-Project</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="post.php"><i class="fas fa-plus-square"> Posts Entry</i> <span class="sr-only">(current)</span></a>
                    </li>
 
                    <li class="nav-item">
                        <a class="nav-link" href="view.php"><i class="fas fa-eye">View</i></a>
                    </li>
                  

                </ul>

            </div>
        </nav>


    </section>


    <section class="posts-view">
        <div class="container">

            <div class="row">
                <?php foreach ($my_q as $data) {  ?>

                    <div class="col-lg-4">
                        <div class="card bg-light">
                            <a href="details.php?id=<?= $data["id"]; ?>">
                            
                            <img class="card-img-top" src="img/<?= $data["img"]; ?> " alt="Card image cap">
                            </a>
                            <h5 class="card-header bg-primary"><?= $data["title"]; ?></h5>

                            <div class="card-body">
                                <p class="card-text"><?= $data["article"]; ?> </p>
                                <p class="card-text"><small class="text-muted"><?= $data["created_at"]; ?></small></p>
                            </div>
                        </div>
                    </div>
                <?php }  ?>
            </div>
        </div>




    </section>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/c4a989ea76.js" crossorigin="anonymous"></script>
</body>

</html>