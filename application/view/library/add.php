<?php
	error_reporting(0);
?>
<?php
	if($_GET['mode']=="error2"){
		echo '<div class="alert alert-info alert-dismissable fade in" style="z-index:999;position:fixed;top:185px;left:524.5px;width:270px;">
    <a href="' . URL . 'library/addMoreBook/Book_Id" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong> INVALID NUMBER.
  </div>';
	}
?>
<div class="container" style="min-height: 409px">
	<h2>Add</h2>
	<form action="<?php echo URL; ?>library/bookadd" method="POST">
		<div class="form-group">
			<label>Book Id</label>
			<input style="width:100px" class="form-control" type="text" name="book_id" value="<?php echo $listBook[0]->Book_Id;?>"  readonly required>
		</div>
		<div class="form-group">
			<label>Name</label>
			<input style="width:250px" class="form-control" type="text" name="book_name" value="<?php echo $listBook[0]->Book_Name;?>" readonly required>
		</div class="form-group">
		<div>
			<label>Numbers</label>
			<input style="width:150px" class="form-control" type="text" name="numbers" value="" autofocus required>
		</div><br><br>
		<input class="btn btn-primary" type="submit" name="submit_bookadd" value="Submit">
		<input type="hidden" name="help" value="<?php echo $listBook[0]->Book_Id;?>">
		<input type="hidden" name="hel" value="<?php echo $listBook[0]->Book_Id;?>">
		<input type="hidden" name="rand" value="<?php echo $listBook[0]->Numbers;?>">
	</form>
</div>