<?php
	error_reporting(0);
?>
<?php
	if($_GET['mode']=="error5"){
		echo '<div class="alert alert-info alert-dismissable fade in" style="z-index:999;position:fixed;top:185px;left:524.5px;width:270px;">
    <a href="' . URL . 'person/editperson/SN" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong>  Book Id does not exists, no book left or Student Id is mistake.
  </div>';
	}
?>
<div class="container">
	<h2>Assign Book</h2>
	<form action="<?php echo URL; ?>person/updatePerson" method="POST">
		<input type="hidden" name="sn" value="<?php echo $lists[0]->SN;?>" readonly>
		<div class="form-group">
			<label>Student Id</label>
			<input style="width:200px" class="form-control" type="text" name="student_id" value="<?php echo $lists[0]->student_id;?>" autofocus required>
		</div>
		<div class="form-group">
			<label>Name</label>
			<input style="width:230px" class="form-control" type="text" name="person_name" value="<?php echo $lists[0]->Person_Name;?>" required>
		</div>
		<div class="form-group">
			<label>Book Id</label>
			<input style="width:100px" class="form-control" type="text" name="book_i" value="<?php echo $lists[0]->Book_Id;?>"  required>
		</div>
		<div class="row">
			<div class="col-sm-3 form-group">
				<label>Issued Date</label>
				<input style="width:250px" class="form-control" type="date" name="issued_date" value="<?php echo $lists[0]->Issued_Date;?>"  required>
			</div>
			<div class="col-sm-4 form-group">
				<label>Returning Date</label>
				<input style="width:250px" class="form-control" type="date" name="returning_date" value="<?php echo $lists[0]->Returning_Date;?>"  required>
			</div>
		</div><br>
		<input class="btn btn-primary" type="submit" name="submit_updatePerson" value="Submit">
	</form>
</div>