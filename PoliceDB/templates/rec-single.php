<?php include 'inc/header.php'; ?>
<br><br><br><br><br>
	<h2 class="page-header"><?php echo $rec->NAME; ?></h2>
	<hr>
	<ul class="list-group">
		<li class="list-group-item"><strong>Crime: </strong> <?php echo $rec->CRIME_TYPE; ?></li>
		<li class="list-group-item"><strong>Date of Admission: </strong> <?php echo $rec->DOA; ?></li>
	</ul>
	<br><br>
	<div class="welll">
			<a href="index.php" class="btndef2">Go Back</a>
			<a href="edit.php?id=<?php echo $rec->ID; ?>" class="btndef2">Edit Record</a> 

			<form style="display:inline;" method="post" action="reco.php">
				<input type="hidden" name="del_id" value="<?php echo $rec->ID; ?>">
				<input type="submit" class="btndef3" value="Delete Record">
			</form>
	</div>

<?php include 'inc/footer.php'; ?>