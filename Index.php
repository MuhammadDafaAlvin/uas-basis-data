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
        <div class="container-nav mx-auto w-75 text-center text-center mb-0">
            <h1 class="py-2 mt-2 mb-0">Selamat Datang di Administrator</h1>
            <marquee behavior="loop" direction="left">Website CRUD Basis Data&emsp;|&emsp;Special Place for Special Moments!&emsp;|&emsp;Made with love by Dafa Alvin</marquee>
        </div>
    </nav>
    <main>
        <div class="mt-4 d-flex justify-content-end me-5">
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
                            <td><?php echo ++$no; ?></td>
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
                                <a href="Proses.php?hapus=<?php echo $result['id'];?>" type="button" class="btn btn-danger btn-sm mt-2" style="width: 70px;" onclick="return confirm('Yakin untuk menghapus data?')" >Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer class="mt-5 text-center text-lg-start" style="background-color: #2596be;">
        <div class="container d-flex justify-content-center py-3">
            <a href="https://github.com/Dapaalpinnn"><img src="img/github-mark-white.png" style="width: 40px;"></a>
        </div>
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            23091397083 | Muhammad Dafa Alvin Zuhdi | 2023C
        </div>
    </footer>

</body>
</html>