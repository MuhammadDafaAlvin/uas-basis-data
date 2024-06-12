<?php 

require_once "Connection.php";

if(isset($_POST['aksi'])){
    if($_POST['aksi'] == "add"){
        
        $id = $_POST["id"];
        $title = $_POST["title"];
        $slug = $_POST["slug"];
        $user_id = $_POST["user_id"];
        $content = $_POST["content"];
        $image = "example1.jpg";
        $hits = $_POST["hits"];
        $aktif = $_POST["aktif"];
        $status = $_POST["status"];
        $created_at = $_POST["created_at"];
        $updated_at = $_POST["updated_at"];

        $query = "INSERT INTO tbl_posts VALUES(null,'$title', '$slug', '$user_id','$content', '$image', '$hits', '$aktif', '$status', null, null)";
        $sql = mysqli_query($conn, $query);

        if($sql){
            echo "Successfully added <a href='Index.php'>Home</a>";
        } else {
            echo "Gagal terkoneksi";
        }

        echo "$id | $title | $slug | $user_id | $content | $image | $hits | $aktif | $status";
        


        
        echo "Tambah Data <a href='Index.php'>Home</a>";
    } else if($_POST['aksi'] == "edit"){
        echo "Edit Data <a href='Index.php'>Home</a>";
    }
}

if(isset($_GET['hapus'])){
    echo "Hapus Data <a href='Index.php'>Home</a>";
}
?>
