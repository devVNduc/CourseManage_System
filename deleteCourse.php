<?php
require_once 'dbconfig.php';
if (isset($_REQUEST['Del'])) {
    $userid = intval($_GET['Del']);
    $sql = "DELETE FROM courses_infor WHERE ID=:uID";
    $query = $conn->prepare($sql);
    $query->bindParam(':uID', $userid, PDO::PARAM_STR);
    $query->execute();
    echo "<script>alert('Delete successfully!!!');</script>";
    echo "<script>window.location.href='CourseInfor_index.php'</script>";
}
