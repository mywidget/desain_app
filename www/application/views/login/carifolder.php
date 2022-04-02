<?php
// session_start();
// if (empty($_SESSION['info']['isloggedin'])){
// $pesan = "Anda Belum Login";
// }else{

$folder = $_GET['folder'];
$subfolder = substr($folder,0,10);
//$subfolder1 = substr($folder,1,5);
//echo $subfolder;

if ($folder == ''){
	$pesan = "Isi dulu nama foldernya";
}else{	
if (file_exists($folder)) {
    $pesan = "Folder sudah ada";
} else {
	if (file_exists($subfolder)) {
    $pesan = "Folder sudah dibuat";
	mkdir($folder,0777);
	}else{
    $pesan = "Folder tidak dapat dibuat, cek jaringan komputer";
		
	}
}
}
//		$data = array();
		$data = array($pesan);	
		echo json_encode($data);


	
// }
?>	
	