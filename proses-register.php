<?php
   include("config.php");

   // cek apakah tombol daftar sudah diklik atau blum?
   if(isset($_POST['daftar'])){

   	  // ambil data dari formulir
   	  $nama = $_POST['nama'];
   	  $username = $_POST['username'];
   	  $password = $_POST['password'];

   	  // buat query
	      $sql="INSERT INTO admin (nama_lengkap, username, password) VALUE ('$nama','$username','$password')";    
         $query=mysqli_query($db,$sql);

   //apakah query simpan berhasil?
   if($query){
	//kalau berhasil alihkan ke halaman index.php dengan status=sukses 
	header('Location:index.php?status=sukses');
}else{
	//kalau gagal alihkan ke halaman index.php dengan status=gagal 
	header('Location:register.php?status=gagal');
}

}else{
	die("Akses dilarang...");
}
?>