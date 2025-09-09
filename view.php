<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>ulangan</title>
</head>
<body>
    <h2>Rumah Sakit</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Posisi</th>
            <th>Deskripsi</th>
        </tr>
        <?php while($u = $users->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $u['id']; ?></td>
            <td><?php echo $u['name']; ?></td>
            <td><?php echo $u['position']; ?></td>
            <td><?php echo $u['description']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
