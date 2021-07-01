<?php include_once 'config/init.php'; ?>

<?php
$rec = new Record;

if(isset($_POST['del_id'])){
	$del_id = $_POST['del_id'];
	if($rec->delete($del_id)){
		redirect('index.php', 'Record Deleted', 'success');
	} else {
		redirect('index.php', 'Record Not Deleted', 'error');
	}
}

$template = new Template('templates/rec-single.php');

$rec_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->rec = $rec->getRec($rec_id);

echo $template;