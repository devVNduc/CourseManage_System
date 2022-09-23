<?php
    require_once'dbconfig.php';
    if(isset($_POST['insert'])){

        $name_course=$_POST['name_course'];
        $start_day = $_POST['start_day'];
        $end_day = $_POST['end_day'];
        $sql = 'INSERT INTO course_infor(name_course,start_day,end_day) VALUES (:Nc,:St,:Ed)';
        $query = $conn->prepare($sql);
        $query->bindParam('Nc',$name_course,PDO::PARAM_STR);
        $query->bindParam('St',$start_day,PDO::PARAM_STR);
        $query->bindParam('Ed', $end_day, PDO::PARAM_STR);
        $query->execute();
        







    }

?>