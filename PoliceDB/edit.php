<?php include_once 'config/init.php'; ?>

<?php
$rec = new Record;

$rec_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();
	$data['NAME'] = $_POST['NAME'];
	$data['CRIME_TYPE'] = $_POST['CRIME_TYPE'];

	if($rec->update($rec_id, $data)){
		redirect('index.php', 'Record has been updated', 'success');
	} else {
		redirect('index.php', 'Something went wrong', 'error');
	}
}

$template = new Template('templates/rec-edit.php');

$template->rec = $rec->getRec($rec_id);
$template->categories = $rec->getCategories();

echo $template;