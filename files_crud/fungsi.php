<?php 
function saveTxt($id,$id_content,$code){
	if(!file_exists($id)) fopen($id,"w");
	$open = fopen($id,$code) or die ("Tidak berhasil membuka file $id");
	fputs($open,$id_content);
	fclose($open) or die ("Tidak berhasil menutup");

	$status_input = 'y';
}
?>