<?php include 'inc/header.php'; ?>
<br><br><br><br><br>
	<h2 class="page-header">Edit Record</h2><br><br>
	<form method="post" action="edit.php?id=<?php echo $rec->ID; ?>">
		<div class="form-group">
			<label>Name</label><br><br>
			<input type="text" class="form-control" name="NAME" value="<?php echo $rec->NAME; ?>"><br>
		</div>
		<div class="form-group">
			<label>Crime</label><br><br>
			<select class="form-control" name="CRIME_TYPE">
				<option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                	<?php if($rec->CRIME_TYPE == $category->Category_Name) : ?>
                		<option value="<?php echo $category->Category_Name; ?>" selected><?php echo $category->Category_Name; ?></option>
					<?php else: ?>
						<option value="<?php echo $category->Category_Name; ?>"><?php echo $category->Category_Name; ?></option>
					<?php endif; ?>          
                <?php endforeach; ?>
			</select>
		</div>
		<div class="welll">
		<input type="submit" class="btndef2" value="Submit" name="submit">
					</div>
	</form>
<?php include 'inc/footer.php'; ?>