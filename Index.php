<?php 
require_once "Connection.php";

$query = "select * from tbl_posts;" ;
$sql = mysqli_query($conn, $query);
$no = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image" href="img/Tinta Hitam.jpg">
</head>

    <nav class="navbar navbar-light bg-light">
        <div class="container-nav mx-auto">
            <h1 class="py-2 mt-1">Selamat Datang di Administrator</h1>
            <marquee behavior="loop" direction="left">Special Place for Special Moments!</marquee>
        </div>
    </nav>
    <main>
        <div class="mt-5 ms-5">
            <a href="Manage.php " type="button" class="btn btn-success">Tambah Data</a>
        </div>
        <div class="table-responsive mx-5 mt-4" >
            <table class="table align-middle text-light text-center table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>User_ID</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Hits</th>
                        <th>Aktif</th>
                        <th>Status</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($result = mysqli_fetch_assoc($sql)): ?>
                        <tr>
                            <td>
                                <?php echo ++$no; ?>
                            </td>
                            <td><?php echo $result['title']; ?></td>
                            <td><?php echo $result['slug']; ?></td>
                            <td><?php echo $result['user_id']; ?></td>
                            <td><?php echo $result['content']; ?></td>
                            <td><img src="img/<?php echo $result['image']; ?>"></td>
                            <td><?php echo $result['hits']; ?></td>
                            <td><?php echo $result['aktif']; ?></td>
                            <td><?php echo $result['status']; ?></td>
                            <td><?php echo $result['created_at']; ?></td>
                            <td><?php echo $result['updated_at']; ?></td>
                            <td class="d-print gap-2">
                                <a href="Manage.php?ubah=<?php echo $result['id'];?>" type="button" class=" btn btn-success btn-sm" style="width: 70px;">Edit</a>
                                <a href="Proses.php?hapus=<?php echo $result['id'];?>" type="button" class="btn btn-danger btn-sm mt-2" style="width: 70px;">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
          </div>
    </main>

</body>
</html>