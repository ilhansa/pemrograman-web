<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            table {
                border-collapse: collapse;
                width: 60%;
                margin: auto;
            }
            th, td {
                border: 1px solid #333;
                padding: 10px;
                text-align: center;
            }
            th {
                background-color: teal;
                color: white;
            }
    </style>
    </head>
    <body>
        <?php
            $Mahasiswa = [
                'nama' => 'Ilsa',
                'domisili' =>'Kediri',
                'jenis_kelamin' => 'Laki-laki'
            ];
        ?>
        <table>
        <tr>
            <th>Nama </th>
            <th>Domisili </th>
            <th>Jenis kelamin</th>
        </tr>
        <tr>
            <td><?= $Mahasiswa["nama"] ?></td>
            <td><?= $Mahasiswa["domisili"] ?></td>
            <td><?= $Mahasiswa["jenis_kelamin"] ?></td>
        </tr>
    </table>
    </body>
</html>