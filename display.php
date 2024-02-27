<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="d-flex flex-row justify-content-between my-5">
            <h3>User Details</h3>
            <button class="btn btn-primary">
                <a href="user.php" class="text-light add-btn">Add new user</a>
            </button>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Sr No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email ID</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sqlquery = "select * from crud";
                $result = mysqli_query($con, $sqlquery);
                if ($result) {
                    // $row = mysqli_fetch_assoc($result);
                    // echo $row['name'];
                
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $pass = $row['pass'];
                        echo '<tr>
                                <th scope="row">' . $id . '</th>
                                <td>' . $name . '</td>
                                <td>' . $email . '</td>
                                <td>' . $mobile . '</td>
                                <td>' . $pass . '</td>
                                <td>
                                    <button class="btn btn-info"><a class="text-light add-btn" href="view.php?viewid='.$id.'">View</a></button>
                                    <button class="btn btn-warning"><a class="text-light add-btn" href="update.php?updateid='.$id.'">Update</a></button>
                                    <button class="btn btn-danger"><a class="text-light add-btn" href="delete.php?deleteid='.$id.'">Delete</a></button>
                                </td>
                            </tr>';
                    }
                }
                ?>


            </tbody>
        </table>
    </div>

</body>

</html>