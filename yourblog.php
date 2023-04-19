<?php


$conn = mysqli_connect('localhost', 'root', 'nafil', 'voting');


if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}


$sql = 'SELECT * FROM blog_data';
$result = mysqli_query($conn, $sql);


if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog Data Form</title>
    <style>
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            display: block;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        textarea {
            height: 150px;
        }

        img {
            max-width: 100%;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>your blog details</h1>
    <form>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <label>blog no:</label>
        <input type="text" value="<?php echo $row['id']; ?>">

        <label>Name of you traveled:</label>
        <input type="text" value="<?php echo $row['place']; ?>">

        <label>location :</label>
        <input type="text" value="<?php echo $row['location']; ?>">

        <label>best moments with :</label>
        <img src="<?php echo $row['photo']; ?>" alt="photo">

        <label>About your journey:</label>
        <textarea><?php echo $row['about']; ?></textarea>
        <br><br><br>
    <?php
    }
    ?>
    </form>

</body>
</html>

<?php

mysqli_close($conn);
?>
