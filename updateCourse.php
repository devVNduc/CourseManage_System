<?php
require_once 'dbconfig.php';
if (isset($_POST['update'])) {
    $userid = intval($_GET['ID']);
    $Name_course = $_POST['Name_course'];
    $Start_day = $_POST['Start_day'];
    $End_day = $_POST['End_day'];
    $sql = "UPDATE courses_infor SET Name_course=:Nc,Start_day=:Sd,End_day=:Ed WHERE ID=:uID";
    $query = $conn->prepare($sql);

    $query->bindParam(':Nc', $Name_course, PDO::PARAM_STR);
    $query->bindParam(':Sd', $Start_day, PDO::PARAM_STR);
    $query->bindParam(':Ed', $End_day, PDO::PARAM_STR);
    $query->bindParam(':uID', $userid, PDO::PARAM_STR);

    $query->execute();
    echo "<script>alert('update successfully!!!');</script>";
    echo "<script>window.location.href='CourseInfor_index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <h3>Update course</h3>
        </div>
    </div>

    <?php

    $userid = intval($_GET['ID']);
    $sql = "SELECT Name_course,Start_day,End_day FROM courses_infor WHERE ID=:uID";
    $query = $conn->prepare($sql);
    $query->bindParam(':uID', $userid, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetch(PDO::FETCH_ASSOC);
    ?>
    <form name="insertrecord" method="post">
        <div class="row">
            <div class="col-md-4"><b>Name course</b>
                <input type="text" name="Name_course" value="<?php echo $results['Name_course']; ?>" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"><b>Start day</b>
                <input type="text" name="Start_day" value="<?php echo $results['Start_day']; ?>" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"><b>End day</b>
                <input type="text" name="End_day" value="<?php echo $results['End_day']; ?>" class="form-control" required>
            </div>
        </div>
        <?php
        ?>
        <div class="row" style="margin-top:1%">
            <div class="col-md-8">
                <input type="submit" name="update" value="update">
            </div>
        </div>
    </form>



</body>

</html>