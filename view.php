<?php

include 'connect.php';

$id = $_GET['viewid'];
$sql = "select * from `crud` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row["id"];
$name = $row["name"];
$email = $row["email"];
$mobile = $row["mobile"];
$password = $row["pass"];

if (isset($_POST['cancel'])) {
    header("location:display.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud-Operation</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <form method="post" class="w-50 m-auto">
            <h2>Update user</h2>
            <div class="form-group mt-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Please enter your name."
                    value=<?php echo $name; ?> disabled>
            </div>
            <div class="form-group mt-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Please enter your email."
                    value=<?php echo $email; ?> disabled>
            </div>
            <div class="form-group mt-3">
                <label>Mobile</label>
                <input type="number" name="mobile" class="form-control" placeholder="Please enter your mobile."
                    value=<?php echo $mobile; ?> disabled>
            </div>
            <div class="form-group mt-3">
                <label>Password</label>
                <input type="password" name="pass" class="form-control" placeholder="Please enter your password."
                    value=<?php echo $password; ?> disabled>
            </div>
            <div class="mt-3">
                <button type="submit" name="cancel" class="btn btn-warning ml-5">Cancel</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>