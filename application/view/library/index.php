<?php
	error_reporting(0);

?>
<?php
	if($_GET['mode']=="success1"){
		echo '<div class="alert alert-success alert-dismissable fade in" style="z-index:999;position:fixed;top:185px;left:524.5px;width:270px;">
    <a href="' . URL . 'library" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong>  Books successfully added.
  </div>';
	}
?>
<?php
	if($_GET['mode']=="error1"){
		echo '<div class="alert alert-info alert-dismissable fade in" style="z-index:999;position:fixed;top:175px;left:524.5px;width:270px;">
    <a href="' . URL . 'library" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong>  Book Id already exists or INVALID NUMBER.
  </div>';
	}
?>
<?php
	if($_GET['mode']=="success2"){
		echo '<div class="alert alert-success alert-dismissable fade in" style="z-index:999;position:fixed;top:185px;left:524.5px;width:270px;">
    <a href="' . URL . 'library" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong>  Successfully added.
  </div>';
	}
?>
<?php
	if($_GET['mode']=="success3"){
		echo '<div class="alert alert-success alert-dismissable fade in" style="z-index:999;position:fixed;top:185px;left:524.5px;width:270px;">
    <a href="' . URL . 'library" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong>  Successfully updated.
  </div>';
	}
?>
<?php
	if($_GET['mode']=="successd1"){
		echo '<div class="alert alert-success alert-dismissable fade in" style="z-index:999;position:fixed;top:185px;left:524.5px;width:270px;">
    <a href="' . URL . 'library" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong>  Successfully deleted.
  </div>';
	}
?>




<div class="container" style="margin-top:50px;padding-right:-20px;border:2px solid black;background-color:white;min-height: 155px">
	<div class="row">
		<div class="col-sm-8" >
	<h2 style="font-weight: bold;font-size: 24px">Add a Book</h2>
	<div style="width:700px">
	<form action="<?php echo URL; ?>library/addBook" method="POST" class="form-inline">

		<div class="form-group">
			<label>Book Id</label>
			<input style="max-width: 100px" type="text" class="form-control" name="book_id" value="" autofocus required>
		</div>

		<div class="form-group">
			<label>Name</label>
			<input style="max-width: 200px" type="text" class="form-control" name="book_name" value="" required>
		</div>
		
		<div class="form-group">
			<label>Numbers</label>
			<input style="max-width: 100px" type="number" class="form-control" name="numbers" value=""  required> 
		</div>
		
		<button type="submit" class="btn btn-primary" name="submit_addBook">Submit</button>
		<br><br>
	</form>
	</div>
	</div>


<div class="col-sm-4" style="padding:10px 10px 0 0;border-top: 3px solid red;height:150px;max-width:300px">
	<form action="<?php echo URL; ?>library" method="GET">
		<input style="float:right" class="btn btn-default" type="submit" name="submit_countBook" value="Submit">
		<input style="float:right;max-width: 160px" class="form-control" type="text" name="searching" placeholder="search" required>
			
		</form>
		<div style="max-width:300px;" class="container table-responsive">
			<table class="table table-hover">
				
				<br>
				<th>Book Id</th>
				<th>Remaining NO. of Books</th>
				<tr>
					<td><?php echo $_GET["searching"];?></td>
					<td><?php echo $n;?></td>
				</tr>
			</table>
		</div>
</div>

</div>
</div>
<br>
<br>

<form action="<?php echo URL;?>login/logout" method="POST">
<div id="confirmation" style="border-radius:6px;box-shadow: 0px 0px 20px red;background-color:white;display:none;padding-top:30px;padding-left:60px;position:fixed;left:473.5px;bottom:270px;width:400px;height: 150px;border: 1px solid red">
			<label style="font-size: 18px;">Are you sure you want to delete?</label><br><br>
			<div id="cancel" style="margin-top:-14px;height:30px; width:30px;font-size:40px;position:absolute;top:0px;right:-5px;" onclick="cancel()">&times;</div>
			<div style="position: absolute;left:150px;bottom:35px;">
			<input type="submit" class="btn btn-default" name="yes_logout" value="Yes">&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default" onclick="cancel()">No</button>
			</div>
	</div>	
</form>







<div class="container table-responsive" style="border: 1px solid black;min-height: 300px;margin-bottom: 60px">
<form action="<?php echo URL;?>library/delBook" method="GET">
	<table id="record_book" class="table table-hover" >

		<h4 style="font-weight: bold;font-size: 24px;">Library Book</h4>
		<br>

			<!--div for confirmation-->
		<div id="confirmation1" style="border-radius:6px;box-shadow: 0px 0px 20px red;background-color:white;display:none;padding-top:30px;padding-left:60px;position:fixed;left:473.5px;bottom:270px;width:400px;height: 150px;border: 1px solid red">
				<label style="font-size: 18px;">Are you sure you want to delete?</label><br><br>
				<div id="cancel" style="margin-top:-14px;height:30px; width:30px;font-size:40px;position:absolute;top:0px;right:-5px;" onclick="cancel1()">&times;</div>
				<div style="position: absolute;left:150px;bottom:35px;">
				<input type="submit" class="btn btn-default" name="yes_delete" value="Yes">&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="button" class="btn btn-default" onclick="cancel1()">No</button>
				</div>
		</div>

		<div style="padding-bottom:10px;border-bottom: 2px solid black">
			<input class="btn btn-info" type="submit" name="add_book" value="Add">
			&nbsp;
			<input class="btn btn-warning" type="submit" name="update_book" value="Update">
			&nbsp;
			<button id="delete" class="btn btn-danger" type="button" onclick="dele()">Delete</button>
			<input style="float:right;max-width: 180px" class="form-control" type="text" id="my" onkeyup="myFunction()" placeholder="search">
		</div>
		<br><br>
		<thead>
			<tr>
				<th><input type="checkbox" id="selectall" ></th>
				<th>ID</th>
				<th>Book Name</th>
				<th>Numbers</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($name as $bo) {
					echo "<tr>";
					echo "<td>";
					echo "<input class='second' type='checkbox' name='num[]' value='$bo->Book_Id'/>";
					echo "</td>";
					echo "<td>$bo->Book_Id</td>
						<td>$bo->Book_Name</td>
						<td>$bo->Numbers</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
	</form>
</div>