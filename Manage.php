<!DOCTYPE html>
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
</head>
<body>
    <nav class="navbar navbar-light bg-light rounded-bottom">
        <div class="container-nav mx-auto">
            <h1 class="py-2 mt-1">Selamat Datang di Administrator</h1>
            <marquee behavior="loop" direction="left">Special Place for Special Moments!</marquee>
        </div>
    </nav>
    <main>
        <form method="POST" action="Proses.php">
            <h2 class="text-white mt-4 ms-5 text-center">Masukkan Data</h2>
            <div container class="d-flex justify-content-evenly" style="width: 100%;">
                <div class="container-fluid">
                    <!-- ID -->
                    <div class="ms-2 mt-4 row text-white">
                        <label for="id" class="col-sm-1 col-form-label">ID</label>
                        <div class="col-sm-8 ms-5">
                            <input type="text" name="id" class="form-control" id="id" placeholder="23871762872">
                        </div>
                    </div>
                    <!-- Title -->
                    <div class="ms-2 mt-4 row text-white">
                        <label for="title" class="col-sm-1 col-form-label">Title</label>
                        <div class="col-sm-8 ms-5">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Pilihan Hatiku">
                        </div>
                    </div>
                    <!-- Slug -->
                    <div class="ms-2 mt-4 row text-white">
                        <label for="slug" class="col-sm-1 col-form-label">Slug</label>
                        <div class="col-sm-8 ms-5">
                            <input type="text" name="slug" class="form-control" id="slug" placeholder="https://example.com">
                        </div>
                    </div>
                    <!-- User ID -->
                    <div class="ms-2 mt-4 row text-white">
                        <label for="user_id" class="col-sm-1 col-form-label">User_ID</label>
                        <div class="col-sm-8 ms-5">
                            <input type="text" name="user_id" class="form-control" id="user_id" placeholder="1">
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="ms-2 mt-4 row text-white">
                        <label for="content" class="col-sm-1 col-form-label">Content</label>
                        <div class="col-sm-8 ms-5" >
                            <input type="text" name="content" class="form-control" id="content" placeholder="Musik">
                        </div>
                    </div>
                    <!-- Hits -->
                    <div class="ms-2 mt-4 row text-white">
                        <label for="hits" class="col-sm-1 col-form-label">Hits</label>
                        <div class="col-sm-8 ms-5">
                            <input type="text" name="hits" class="form-control" id="hits" placeholder="1">
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <!-- Aktif -->
                    <div class="ms-5 mt-4 row text-white">
                        <label for="aktif" class="col-sm-1 col-form-label">Aktif</label>
                        <div class="col-sm-8 row ms-5">
                            <select id="aktif" name="aktif" class="form-select" aria-label="aktif">
                                <option selected>Aktif</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <!-- Status -->
                    <div class="ms-5 mt-4 row text-white">
                        <label for="status" class="col-sm-1 col-form-label">Status</label>
                        <div class="col-sm-8 row ms-5">
                            <select id="status" name="status" class="form-select" aria-label="status">
                                <option selected>status</option>
                                <option value="Publish">Publish</option>
                                <option value="Draft">Draft</option>
                            </select>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="ms-5 mt-4 row text-white">
                        <label for="image" class="col-sm-1 col-form-label form-label">Image</label>
                        <div class="col-sm-8 row ms-5">
                            <input class="form-control" type="file" name="image" id="image">
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

</body>
</html>