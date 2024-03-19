<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h2>Array Terindeks dan Perulangan</h2>
        <?php
        $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

        // Perulangan For
        for ($i = 0; $i < count($Listdosen); $i++) {
            echo $Listdosen[$i] . "<br>";
        }
        echo "<br>";

        // Perulangan Foreach
        foreach($Listdosen as $dosen){
            echo $dosen . "<br>";
        }
        echo "<br>";

        //Index
        echo $Listdosen[2] . "<br>";
        echo $Listdosen[0] . "<br>";
        echo $Listdosen[1] . "<br>";
        ?>
    </body>
</html>