<?php

function add($name,$faculty,$department,$gpa){
    global $con;
    $stmt = $con->prepare("INSERT INTO students(name,faculty,department,gpa) value(?,?,?,?)");
    $stmt->execute(array($name,$faculty,$department,$gpa));
    header("Refresh:3;url=index.php"); 
}

function delete_with_id($table,$id){
    global $con;
    $stmt = $con->prepare("DELETE FROM $table WHERE id=?");
    $stmt->execute(array($id));

    header('location:index.php');
}
function get_all_data($table){
    global $con;
    $stmt = $con->prepare("SELECT * FROM $table");
    $stmt->execute();
    $students = $stmt->fetchAll();
    return $students;
}







