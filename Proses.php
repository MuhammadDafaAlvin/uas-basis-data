<?php 

require_once "Connection.php";

/* -------------------------------------------------------------------------- */
/*                                Menambah Data                               */
/* -------------------------------------------------------------------------- */

if(isset($_POST['aksi'])){
    if($_POST['aksi'] == "add"){
        
        $id = $_POST["id"];
        $title = $_POST["title"];
        $slug = $_POST["slug"];
        $user_id = $_POST["user_id"];
        $content = $_POST["content"];
        $image = $_FILES['image']['name'];
        $hits = $_POST["hits"];
        $aktif = $_POST["aktif"];
        $status = $_POST["status"];

        $dir = "img/";
        $tmpFile = $_FILES['image']['tmp_name'];

        // Memindah lokasi folder
        move_uploaded_file($tmpFile, $dir.$image);

        $query = "INSERT INTO tbl_posts VALUES(null,'$title', '$slug', '$user_id','$content', '$image', '$hits', '$aktif', '$status', CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP());";

        $sql = mysqli_query($conn, $query);
        if($sql){
            header("Location: Index.php");
        } else {
            echo $query;
        }
        
/* -------------------------------------------------------------------------- */
/*                                  Edit Data                                 */
/* -------------------------------------------------------------------------- */

    } else if($_POST['aksi'] == "edit"){
        // Berpindah ke halaman utama
        header("Location: Index.php");

        $id = $_POST["id"]; // Harus ada.
        $title = $_POST["title"];
        $slug = $_POST["slug"];
        $user_id = $_POST["user_id"];
        $content = $_POST["content"];
        $hits = $_POST["hits"];
        $aktif = $_POST["aktif"];
        $status = $_POST["status"];

        $queryShow = "SELECT * FROM tbl_posts WHERE id = $id";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        if($_FILES['image'] ['name'] == ""){
            $foto = $result['image'];
        } else {
            $foto = $_FILES['image'] ['name'];
            unlink('img/'. $result["image"]);
            move_uploaded_file( $_FILES['image'] ['tmp_name'], 'img/'. $_FILES['image'] ['name']);

        }

        $query = "UPDATE tbl_posts SET title='$title', slug='$slug', user_id='$user_id', content='$content', hits='$hits', status='$status', image='$foto' WHERE id='$id';";

        $sql = mysqli_query($conn, $query);

    }
}

/* -------------------------------------------------------------------------- */
/*                                 Hapus Data                                 */
/* -------------------------------------------------------------------------- */

if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];

    $queryShow = "SELECT * FROM tbl_posts WHERE id = $id";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    // Menghapus file
    unlink('img/' . $result["image"]);
    
    $query = "DELETE FROM tbl_posts WHERE id='$id'";
    $sql = mysqli_query($conn, $query);

    $sql = mysqli_query($conn, $query);
        if($sql){
            header("Location: Index.php");
        } else {
            echo $query;
        }
}
?>
