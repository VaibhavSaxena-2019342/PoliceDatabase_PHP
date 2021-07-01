<?php include 'inc/header.php'; ?>
<br><br><br><br><br>
	<h2 class="page-header">Create New Record</h2><br><br>
	<form method="post" action="create.php">
		<div class="form-group">
			<label>Name</label><br><br>
			<input type="text" class="form-control" name="NAME"><br>
		</div>
		<div class="form-group">
			<label>Crime</label><br><br>
			<select class="form-control" name="CRIME_TYPE">
				<option value="0"></option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->Category_Name; ?>"><?php echo $category->Category_Name; ?></option>
                <?php endforeach; ?>
			</select>
		</div><br><br>
		<div class="welll">
		<input type="submit" class="btndef2" value="Submit" name="submit">
				</div>
	</form>
<?php include 'inc/footer.php'; ?>