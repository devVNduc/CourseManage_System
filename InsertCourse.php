<?php
require_once 'dbconfig.php';
if (isset($_POST['insert'])) {

    $name_course = $_POST['Name_course'];
    $start_day = $_POST['Start_day'];
    $end_day = $_POST['End_day'];
    $sql = 'INSERT INTO courses_infor(Name_course,Start_day,End_day) VALUES (:Nc,:St,:Ed)';
    $query = $conn->prepare($sql);
    $query->bindParam('Nc', $name_course, PDO::PARAM_STR);
    $query->bindParam('St', $start_day, PDO::PARAM_STR);
    $query->bindParam('Ed', $end_day, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $conn->lastInsertId();
    if ($lastInsertId) {
        echo "<script>alert('Record inserted successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Insert Course</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h3>Course Managemant System</h3>
        <form name="insertrecord" method="post">
            <div class="row">
                <div class="col-md-4"><b>Name Course</b>
                    <input type="text" name="Name_course" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"><b>Start Day</b>
                    <input type="text" name="Start_day" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"><b>End Day</b>
                    <input type="text" name="End_day" class="form-control" required>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-md-8">
                    <input type="submit" name="insert" value="Submit">
                </div>
            </div>
        </form>
    </div>
    </div>
</body>

</html>