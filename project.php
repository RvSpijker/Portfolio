<?php
    include 'src/includes/header.php';

    session_start();
    require 'src/dbconnect/dbconnect.php';
    
    $dbconnect = new dbconnection();

    $sql = "SELECT * FROM projecten WHERE project_id = $project_id";

    $query = $dbconnect -> prepare($sql);
    $query -> execute();
    $recset = $query -> fetchAll(PDO::FETCH_ASSOC);

    // $project_id = $recset[1]['project_id'];
    $project_name = $recset[$key]['project_name'];
    // $project_img = $recset[$key]['project_img'];
    // $project_link = $recset[$key]['project_link'];
    // $project_desc = $recset[$key]['project_desc'];

    $pagetitle = '$project_name';
?>