<!DOCTYPE html>

<?php 

require_once "Connection.php";

    $id = '';
    $title = '';
    $slug = '';
    $user_id = '';
    $content = '';
    $hits = '';
    $aktif = '';
    $status = '';

if(isset($_GET['ubah'])){
    $id = $_GET['ubah'];
    $query = "SELECT * FROM tbl_posts WHERE id = '$id'";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $id = $result["id"];
    $title = $result["title"];
    $slug = $result["slug"];
    $user_id = $result["user_id"];
    $content = $result["content"];
    $hits = $result["hits"];
    $aktif = $result["aktif"];
    $status = $result["status"];
    
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image" href="img/Tinta Hitam.jpg">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-nav mx-auto w-75 text-center text-center mb-0">
            <h1 class="py-2 mt-2 mb-0 ms-n1">Pengelolaan Data</h1>
            <marquee behavior="loop" direction="left">Website CRUD Basis Data&emsp;|&emsp;Special Place for Special Moments!&emsp;|&emsp;Create Read Update Delete >_- </marquee>
        </div>
    </nav>
    <main class="text-center">
        <form method="POST" action="Proses.php" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <h2 class="text-white mt-4 ms-4.5 text-center">Masukkan Data</h2>

            <div container class="d-flex justify-content-evenly" style="width: 100%;">
                <div class="container-fluid">
                    <!-- Title -->
                    <div class="ms-2 mt-4 row text-white">
                        <label for="title" class="col-sm-1 col-form-label">Title</label>
                        <div class="col-sm-8 ms-5">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Masukkan judul" required value="<?php echo $title?>">
                        </div>
                    </div>
                    <!-- Slug -->
                    <div class="ms-2 mt-4 row text-white">
                        <label for="slug" class="col-sm-1 col-form-label">Slug</label>
                        <div class="col-sm-8 ms-5">
                            <input type="text" name="slug" class="form-control" id="slug" placeholder="Link" required value="<?php echo $slug?>">
                        </div>
                    </div>
                    <!-- User ID -->
                    <div class="ms-2 mt-4 row text-white">
                        <label for="user_id" class="col-sm-1 col-form-label">User_ID</label>
                        <div class="col-sm-8 ms-5">
                            <input type="text" name="user_id" class="form-control" id="user_id" placeholder="Nomor ID user" required value="<?php echo $user_id?>">
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="ms-2 mt-4 row text-white">
                        <label for="content" class="col-sm-1 col-form-label">Content</label>
                        <div class="col-sm-8 ms-5" >
                            <input type="text" name="content" class="form-control" id="content" placeholder="Tambahkan konten" required value="<?php echo $content?>">
                        </div>
                    </div>
                    <!-- Hits -->
                    <div class="ms-2 mt-4 row text-white">
                        <label for="hits" class="col-sm-1 col-form-label">Hits</label>
                        <div class="col-sm-8 ms-5">
                            <input type="text" name="hits" class="form-control" id="hits" placeholder="Seberapa hits" required value="<?php echo $hits?>">
                        </div>
                    </div>
                </div>



                <div class="container-fluid">
                    <!-- Aktif -->
                    <div class="ms-5 mt-4 row text-white">
                        <label for="aktif" class="col-sm-1 col-form-label">Aktif</label>
                        <div class="col-sm-8 row ms-5">
                            <select id="aktif" name="aktif" class="form-select" aria-label="aktif">
                                <option value='Y' >Ya</option>
                                <option value='N'>Tidak</option>
                            </select>
                        </div>
                    </div>
                    <!-- Status -->
                    <div class="ms-5 mt-4 row text-white">
                        <label for="status" class="col-sm-1 col-form-label">Status</label>
                        <div class="col-sm-8 row ms-5">
                            <select id="status" name="status" class="form-select" aria-label="status">
                                <option value="Publish">Publish</option>
                                <option value="Draft" >Draft</option>
                            </select>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="ms-5 mt-4 row text-white">
                        <label for="image" class="col-sm-1 col-form-label form-label">Image</label>
                        <div class="col-sm-8 row ms-5">
                            <input class="form-control" type="file" name="image" id="image" accept="image/*">
                        </div> 
                    </div>
                    
                    <div class="d-flex gap-2 mt-4 ms-5 justify-content-center">
                        <!-- Buat percabangan -->
                        <?php if(isset($_GET['ubah'])) { ?>
                            <button type="submit" name="aksi" value="edit" class="col-sm-4 btn btn-success btn-sm">Simpan Perubahan</button>
                        <?php } else { ?>
                            <button type="submit" name="aksi" value="add" class="col-sm-4 btn btn-success btn-sm">Tambah Data</button>
                        <?php } ?>
                        <a href="Index.php" type="button" class="col-sm-4 btn btn-danger btn-sm">Batal</a>  
                    </div>
                </div>
            </div>
        </form>
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