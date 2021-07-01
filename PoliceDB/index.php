<?php include_once 'config/init.php';?>

<?php
$rec = new Record;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category)
{
		$template->recs = $rec->getByCategory($category);
		$template->title = 'Convicts in Category: '. $rec->getCategory($category)->Category_Name;
}
else
{
		$template->title = 'Latest Records';
		$template->recs = $rec->getAllRecs();
}

$template->categories = $rec->getCategories();

echo $template;