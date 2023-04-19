<?php
include("C:/wamp64/www/php/mypro/actions/2connet.php");

$name = $_POST['names'];
$place = $_POST['place'];
$location = $_POST['location'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$about = $_POST['about'];

$sql = "INSERT INTO `blog_data` (names, place, location, photo, about) VALUES ('$name', '$place', '$location', '$image', '$about')";
$result = mysqli_query($conn, $sql);
move_uploaded_file($tmp_name, "../uploads/$image");
echo '<script>
alert("registration successful");
window.location="../partials/blog.php";
</script>';