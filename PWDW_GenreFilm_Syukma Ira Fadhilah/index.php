<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
        <h1>Data Film</h1>
        <table border="1" colspacing="0" colpadding="5">
            <tr>
                <th>No</th>
                <th>Nama Film</th>
                <th>Genre</th>
                <th>Durasi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($data_film as $row):?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['nama_film'] ?></td>
                    <td><?php echo $row['genre'] ?></td>
                    <td><?php echo $row['duration'] ?></td>
                </tr>
            <?php endforeach;?>
        </table>    

</html>