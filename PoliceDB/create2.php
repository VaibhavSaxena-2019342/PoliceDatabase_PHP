<?php include_once 'config/init.php'; ?>

<?php
$rec = new Record;

if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();
	$data['CRIME_TYPE'] = $_POST['CRIME_TYPE'];

	if($rec->create2($data)){
		redirect('index.php', 'Crime Type has been listed', 'success');
	} else {
		redirect('index.php', 'Something went wrong', 'error');
	}
}

$template = new Template('templates/cat-create.php');

$template->categories = $rec->getCategories();

echo $template;