<?php
    include 'db_conn.php';

    $query = 'SELECT * FROM blog_managers';
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Blog managers</title>
        <link rel="stylesheet" href="#">
        <style></style>
    </head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <?php
                while($manager=mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $manager['id']; ?></td>
                <td><?php echo $manager['username']; ?></td>
                <td><?php echo $manager['password']; ?></td>
                <td><?php echo $manager['email']; ?></td>
                <td><?php echo $manager['pp']; ?></td>
                <td>View</td>
                <td>Remove</td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>