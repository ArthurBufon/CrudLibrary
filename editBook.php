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
        <h1 class="">Editing book</h1>
    </div>

    <div class="d-flex justify-content-center mt-4">
        <form action="connect.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="<?php echo $title;?>" placeholder="ex: Harry potter">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" class="form-control" name="author" value="<?php echo $author;?>" placeholder="ex: JK Rowling">
            </div>
            <div class="form-group">
                <label>Release Date</label>
                <input type="number" class="form-control" name="releaseDate" value="<?php echo $releaseDate;?>" placeholder="ex: 2006">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success form-control mt-3" value="Update" name="update">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>