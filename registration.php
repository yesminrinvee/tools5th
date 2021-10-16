<html>

<head>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 " style="height:200px;">
                <form action="save.php" method="POST">
                    <div class="card">
                        <div class="card-header">
                            <h3>Student Registration</h3>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label>Student Name</label>
                                <input class="form-control" type="text" id="studentName" name="studentName">
                            </div>
                            <div class="form-group">
                                <label>Student ID</label>
                                <input class="form-control" type="text" id="studentId" name="studentId">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>

                            <div class="card-footer">
                                <div class="form-group">
                                    <label></label>
                                    <input class="btn btn-primary" type="submit" id="submitButton" name="submitButton">
                                </div>
                            </div>
                </form>
            </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 " style="height:200px;">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <td>ID</TD>
                    <td>Student Name</TD>
                    <td>Department</TD>
                    <td>Roll</TD>
                </tr>
                <?php
                include 'database_connection.php';
                $select_query="SELECT * FROM student";

                $result=mysqli_query($connection,$select_query);
            
                while ($row_array = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php $row_array['id'] ?></td>
                        <td><?php $row_array['studentName'] ?></td>
                        <td><?php $row_array['department'] ?></td>
                        <td><?php $row_array ['studentId'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    </div>

    <body>

</html>