<?php
    $pagetitle = 'Projecten';
    include 'src/includes/header.php';

    session_start();
    require 'src/dbconnect/dbconnect.php';

    if (isset($_SESSION['varname'])) {
        $var_value = $_SESSION['varname'];
    }
    
    $dbconnect = new dbconnection();

    if ($var_value == 'up') {
        $sql = "SELECT * FROM projecten ORDER BY id ASC";
    } else {
        $sql = "SELECT * FROM projecten ORDER BY id DESC";
    }

    $query = $dbconnect -> prepare($sql);
    $query -> execute();
    $recset = $query -> fetchAll(PDO::FETCH_ASSOC);
?>
    <main>
        <div onclick="myFunction()" class='titlebox'>
            <h1 class="centertext2">Mijn Projecten</h1>
            <i id="uparrow" class="fa-solid fa-sort-up"></i>
            <i id="downarrow" class="downarrow fa-solid fa-sort-down"></i>
        </div>
        <div class="flex2">
        <?php foreach($recset as $key => $value) { ?>
            <a href="<?= $recset[$key]['project_link'] ?>" class="card2">
                <img class="card2img" src="img/<?= $recset[$key]['project_img'] ?>" alt="blog">
                <h2 class="card2h1"><?= $recset[$key]['project_name'] ?></h2>
            </a>
        <?php } ?>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>
</html>