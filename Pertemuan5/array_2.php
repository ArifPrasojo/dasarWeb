<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            font-family: 'Times New Roman';
            margin: 0 auto;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];

        // echo "Nama : {$Dosen ['nama']} <br>";
        // echo "Domisili : {$Dosen ['domisili']} <br>";
        // echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>"; 
    ?>

    <table border=1 height=100% width=40% cellpadding = 20 cellspacing="5">
        <tr>
            <th>Atribut</th>
            <th>Nilai</th>
        </tr>
        <?php foreach ($Dosen as $atribut => $nilai): ?>
            <tr>
                <td><?php echo ucfirst($atribut); ?></td>
                <td><?php echo $nilai; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>