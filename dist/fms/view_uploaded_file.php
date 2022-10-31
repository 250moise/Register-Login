<?php
//include auth_session.php file on all user panel pages
include("includes/aunt.php");
include("includes/connection.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>View Uploaded Files ::</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background: var(--dark);">
    <div class="container">
        <div class="row" style="color: var(--blue);">
            <div class="col-md-12" style="margin-top: 22px;height: 134px;"></div>
        </div>
    </div>
    <h4 class="text-center" style="color: var(--white);">File Management System</h4>
    <div class="container" style="color: var(--white);background: var(--info);">
        <div class="row">
            <div class="col-md-12" style="margin-top: 13px;">
                <br>
                <h4 class="text-center">Fill In Your File Details</h4>
                <button><a href="upload_new.php">Upload New</a></button> || <button><a href="includes/logout.php">Logout</a></button>
                <br>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>filename</th>
                        <th>category</th>
                        <th>Descrption</th>
                        <th>actions</th>
                    </thead>
                    <tbody>
                        <?php
                            $user = $_SESSION['username'];
                            $sql = "SELECT * FROM files WHERE uploaded_by='$user';";
                            $sql2 = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($sql2)) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $category = $row['category'];
                                $descr = $row['descr'];
                                $path = $row['pathh'];
                        ?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $name ?></td>
                            <td><?php echo $category ?></td>
                            <td><?php echo $descr ?></td>
                            <td><button><a href="edit-file.php?id=<?php echo $id; ?>">Edit</a></button> 
                               |<button><a href="includes/delete_file.php?id=<?php echo $id; ?>">Delete</a></button>|
                               <button><a href="<?php echo $path; ?>">Download</a></button></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>