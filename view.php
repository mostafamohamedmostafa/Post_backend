<?php
//connection to data base
$connect = mysqli_connect("localhost", "root", "", "blog");

//query

$q = "select * from `post`";

$my_q = mysqli_query($connect, $q);

//3 loop over posts data

foreach ($my_q as $post_details) {
    //  echo '<pre>';

    //print_r($data);
    $id = $post_details["id"];
    $title = $post_details["title"];
    $article = $post_details["article"];
    $created_at = $post_details["created_at"];
    $img = $post_details["img"];
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
                    <li class="nav-item ">
                        <a class="nav-link" href="post.php"><i class="fas fa-plus-square"> Posts Entry</i> <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="view.php"><i class="fas fa-eye">View</i></a>
                    </li>
         
                </ul>

            </div>
        </nav>


    </section>

    <section class="view_post">
        <div class="container">
            <div class="row">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Post ID</th>
                            <th scope="col">Post Title</th>
                            <th scope="col">Article</th>
                            <th scope="col">Created_At</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Img</th>
                            <th scope="col">Contral</th>

                       

                        </tr>
                    </thead>
                    <?php foreach($my_q as $post_details){?>
                    <tbody>
                        <tr>
                            
                            <th scope="row"><?= $post_details["id"]; ?></th>
                            <td><?= $post_details["title"]; ?></td>
                            <td><?= $post_details["article"]; ?></td>
                            <td><?= $post_details["created_at"]; ?></td>
                            <td><?= $post_details["user_id"]; ?></td>
                            <td><img class="img-fluid" src="img/<?= $post_details["img"]; ?> " alt=""></td>
                            <td><a href="update.php?id=<?= $post_details["id"]; ?>">Update</a>|| 
                            <a href="delete.php?id=<?= $post_details["id"]; ?>">Delete</a></td>

                            <?php }  ?>
                        </tr>

                    </tbody>
                </table>
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