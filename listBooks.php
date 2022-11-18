<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php require_once 'connect.php' ?>

    <div class="d-flex justify-content-center mt-4">
        <h1 class="">Listing all books</h1>
    </div>

    <div class="container mt-2">
        <div class="d-flex justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Release Date</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
            <?php
                //objeto com todos os registros da tabela
                $result = $mysqli->query("SELECT * FROM books");

                //fetch assoc coloca o resultado em um array associativo($row)
                while($row = $result->fetch_assoc()):
            ?>
                <tr>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['author'];?></td>
                    <td><?php echo $row['releaseDate'];?></td>
                    <td>
                        <a class="btn btn-info" href="editBook.php?edit=<?php echo $row['id'];?>">Edit</a>
                        <a class="btn btn-danger" href="index.php?delete=<?php echo $row['id'];?>">Delete</a>
                    </td>
                </tr>  
            <?php endwhile; ?>
            </table>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>