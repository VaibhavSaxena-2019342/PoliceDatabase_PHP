<?php include_once 'config/init.php'; ?>

<?php
$rec = new Record;

if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();
	$data['NAME'] = $_POST['NAME'];
	$data['CRIME_TYPE'] = $_POST['CRIME_TYPE'];

	if($rec->create($data)){
		redirect('index.php', 'Record has been listed', 'success');
	} else {
		redirect('index.php', 'Something went wrong', 'error');
	}
}

$template = new Template('templates/rec-create.php');

$template->categories = $rec->getCategories();

echo $template;