<?php
$folder = $_GET['folder'];
$subfolder = substr($folder,10);
$subfolder2 = substr($folder,7,1);
if ($subfolder2 == 'A'){
$pesan = "Folder sedang dibuka";
// $pesan = $folder;
}else{
$pesan = "Folder sedang dibuka";
// $pesan = $folder;
}
$explorer = $_ENV["SYSTEMROOT"] . '\\explorer.exe';
shell_exec("$explorer /n,/e,$folder");
$data = array($pesan);	
echo json_encode($data);
?>	