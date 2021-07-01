<?php include 'inc/header.php'; ?>
          
<div class="jumbotron">
        <h1>Find Record by Crime Type</h1>
        <form method="GET" action="index.php">
        <br>
            <select name="category" class="form-control">
                <option value="0">Crime Type</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->Category_ID; ?>"><?php echo $category->Category_Name; ?></option>
                <?php endforeach; ?>
            </select>
            <br><br>
            <input type="submit" class="btn btn-lg btn-success" value="SEARCH">
        </form>
      </div>
        <h3><?php echo $title; ?></h3>
      	<?php foreach($recs as $rec):?>
        <br>
      	<div class="row marketing boxi justified-content-center">
	        <div class="col-md-10 dataa">
	          <h4><?php echo $rec->NAME; ?></h4>
	          <p>Crime: <?php echo $rec->CRIME_TYPE; ?> <br>Timestamp: <?php echo $rec->DOA; ?></p>     
	        </div>
	        <div class="col-md-1">
	        		<a class=" btndef" href="reco.php?id=<?php echo $rec->ID; ?>">View</a>
	        </div>
        </div>  
        <?php endforeach; ?>
        <br><br><br>

<?php include 'inc/footer.php'; ?>