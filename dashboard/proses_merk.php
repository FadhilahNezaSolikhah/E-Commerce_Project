<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   if(isset($_GET['iddel'])){
      $ar_data[]=$_GET['iddel'];// ? 
        $sql = "DELETE FROM merk WHERE id=?";
   } else {
        $_nama_merk = $_POST['nama_merk'];
        $_proses = $_POST['proses'];

      // array data
        $ar_data[]=$_nama_merk;

      if($_proses == "Simpan"){
      // data baru
      $sql = "INSERT INTO merk (nama_merk) VALUES (?)";
      }else if($_proses == "Update"){
      $ar_data[]=$_POST['idedit'];// ? 5
      $sql = "UPDATE merk SET nama_merk=? WHERE id=?";
      } 
   }
   
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }
   echo '<meta http-equiv="refresh" content="0;url=list_merk.php">'
?>