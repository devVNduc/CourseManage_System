<?php
require_once 'dbconfig.php';
if (isset($_POST['insert'])) {

<<<<<<< HEAD
    $name_course = $_POST['name_course'];
    $start_day = $_POST['start_day'];
    $end_day = $_POST['end_day'];
    $sql = 'INSERT INTO course_infor(name_course,start_day,end_day) VALUES (:Nc,:St,:Ed)';
=======
    $name_course = $_POST['Name_course'];
    $start_day = $_POST['Start_day'];
    $end_day = $_POST['End_day'];
    $sql = 'INSERT INTO courses_infor(Name_course,Start_day,End_day) VALUES (:Nc,:St,:Ed)';
>>>>>>> 0768afe63627b5da0de6fc8ec67d77c7f71d6315
    $query = $conn->prepare($sql);
    $query->bindParam('Nc', $name_course, PDO::PARAM_STR);
    $query->bindParam('St', $start_day, PDO::PARAM_STR);
    $query->bindParam('Ed', $end_day, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $conn->lastInsertId();
    if ($lastInsertId) {
<<<<<<< HEAD
        echo "<script>alert('Record inserted successfully!!!')</script>";
        echo "<script>window.location.href='Courseinfor_index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong , please try again!!!')</script>";
=======
        echo "<script>alert('Record inserted successfully');</script>";
        echo "<script>window.location.href='Courseinfor_index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again');</script>";
>>>>>>> 0768afe63627b5da0de6fc8ec67d77c7f71d6315
        echo "<script>window.location.href='Courseinfor_index.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    

=======
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
>>>>>>> 0768afe63627b5da0de6fc8ec67d77c7f71d6315
</body>

</html>