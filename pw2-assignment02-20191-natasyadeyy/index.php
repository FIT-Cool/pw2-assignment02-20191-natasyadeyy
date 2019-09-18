<?php
include_once 'db_function/insurance_func.php';
include_once 'db_function/patient_func.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Rumah Sakit</title>



    </head>
    <body>
        <div class="page">
            <header align="center"><h2>Rumah Sakit</h2></header>
            <nav>
                <ul>
                    <li><a href="?menu=p">Patient</a></li>
                    <li><a href="?menu=i">Insurance</a></li>
                </ul>
            </nav>
            <main>
                <?php
                $targetMenu = filter_input(INPUT_GET, 'menu');
                switch ($targetMenu) {
                    case 'p':
                        include_once 'view/patient.php';
                        break;
                    case 'i':
                        include_once 'view/insurance.php';
                        break;
                    default;
                }
                ?>
            </main>
            <footer>Pemrograman Web 2 &copy;2019</footer>
        </div>
    </body>


</html>
