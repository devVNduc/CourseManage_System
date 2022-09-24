<?php
// include database connection file
require_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Course Managemant System</h3>
                <hr />
                <div class="table-responsive">
                    <div class="main-topic">
                        <div class="list-group">
                            <h2 class="list-group-item">Main Menu</h2>
                            <a href="#" class="list-group-item active">Ql lớp học</a>
                            <a href="#" class="list-group-item">QL Giáo viên</a>
                            <a href="#" class="list-group-item">QL Môn học</a>
                            <a href="#" class="list-group-item">PCGD cho giáo viên</a>
                            <a href="#" class="list-group-item">Phân công môn cho lớp</a>
                            <a href="#" class="list-group-item">Quản lý thời khóa biểu</a>
                        </div>
                        <div class="table-infor_class">
                            <table id="mytable" class="table table-bordred table-striped">

                                <thead>
                                    <th>#</th>
                                    <th>Course Name</th>
                                    <th>Start Day</th>
                                    <th>End Day</th>
                                    <th>Fix</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT ID,Name_course,Start_day,End_day from courses_infor";
                                    $query = $conn->prepare($sql); //chuẩn bị kết nối câu lệnh 
                                    $query->execute(); //thực hiện kết nối
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    $ctn = 0;
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) {
                                    ?>
                                            <tr>
                                                <td><?php echo htmlentities($ctn) ?></td>
                                                <td><?php echo htmlentities($result->Name_course) ?></td>
                                                <td><?php echo htmlentities($result->Start_day) ?></td>
                                                <td><?php echo htmlentities($result->End_day) ?></td>
                                                <td><a href="updateCourse.php?ID=<?php echo htmlentities($result->ID); ?>"><button></button></button></a></td>
                                                <td><a href="deleteCourse.php?Del=<?php echo htmlentities($result->ID); ?>"><button></button></button></a></td>
                                            </tr>

                                            <?php
                                            $ctn++;
                                            ?>
                                    <?php
                                        }
                                    }

                                    ?>

                                </tbody>
                            </table>
                            <a href="insertCourse.php"><button class="btn btn-primary">Add Course</button></a>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</body>

</html>