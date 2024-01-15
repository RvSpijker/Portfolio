<?php
    session_start();
    require 'src/dbconnect/dbconnect.php';

    $project_id = $_GET['id'];
    
    $dbconnect = new dbconnection();

    $sql = "SELECT * FROM projecten WHERE id = $project_id";

    $query = $dbconnect -> prepare($sql);
    $query -> execute();
    $recset = $query -> fetchAll(PDO::FETCH_ASSOC);

    $project_name = $recset[0]['project_name'];
    $project_img = $recset[0]['project_img'];
    $project_link = $recset[0]['project_link'];
    $project_desc = $recset[0]['project_desc'];
    $github_link = $recset[0]['github_link'];

    $pagetitle = $project_name;
    include 'src/includes/header.php';
?>

<main>
    <h1 class="centertext"><?= $project_name ?></h1>
    <h2 class="centertext"><?= $project_desc ?></h2>
    <div class="btndiv">
        <a href="<?= $github_link ?>"><button class="contactsubmit projectbutton"><h1>Code</h1></button></a>
        <a href="<?= $project_link ?>"><button class="contactsubmit projectbutton"><h1>Naar Website</h1></button></a>
    </div>
    <h4>Preview website:</h4>
    <img class="projectimg" src="img/<?= $project_img ?>" alt="projectimage">
</main