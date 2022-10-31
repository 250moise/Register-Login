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
    <title>Upload New Files</title>
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
                <button><a href="view_uploaded_file.php">View Uploaded</a></button> || <button><a href="includes/logout.php">Logout</a></button>
                <br>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <center>
                    <table>
                    <form method="POST" action="includes/file_upload.php" enctype="multipart/form-data">
                        <tr>
                            <td>
                                <label for="name">File name </label>
                            </td>
                            <td>
                                <input class="form-control"  type="text" name="fname">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="name">File Category </label>
                            </td>
                            <td>
                               <select class="form-control" name="fcat">
                                   <option>Assignment</option>
                                   <option>Cat</option>
                                   <option>Group work</option>
                                   <option>Test</option>
                                   <option>Final Project</option>
                                   <option>Late Submission</option>


                               </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="name">File Description </label>
                            </td>
                            <td>
                                <input class="form-control"  type="text" name="fdesc">
                            </td>
                        </tr>

                         <tr>
                            <td>
                                <label for="name">File</label>
                            </td>
                            <td>
                                <input class="form-control"  type="file" name="image">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label for="name"></label>
                            </td>
                            <td>
                                <br>
                               <center>
                                <input class="btn btn-success"  type="submit" value="Upload" name="">
                                <br>
                                <br>
                            </td>
                        </tr>
                    </form>
                </table>
                </center>
                
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>