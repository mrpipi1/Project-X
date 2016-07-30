<?php
include('../../db-connect.php');

if(isset($_POST['table']) && isset($_POST['id'])) {
    $sql = "SELECT * FROM {$_POST['table']} WHERE id = {$_POST['id']}";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row['deleted_at'] === NULL) {
        $timestamp = time();
        $sql = "UPDATE {$_POST['table']} SET is_active = 0, deleted_at = " . $timestamp . " WHERE id = {$_POST['id']}";
        $result = mysqli_query($link, $sql);
        if($result) {
            $sql = "INSERT INTO log (_name, type, location )  VALUES ('{$row['_name']}','{$_POST['table']}','edit' )";
            $result = mysqli_query($link, $sql);
            if ($result) {
                echo $result;
            } else {
                echo 0;
            }
        }else {
            echo 0;
        }
    }else {
        echo 0;
    }

}
