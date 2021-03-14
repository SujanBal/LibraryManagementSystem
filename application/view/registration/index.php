
<?php
	error_reporting(0);
?>

<?php
	if($_GET['mode']=="success5"){
		echo '<div class="alert alert-success alert-dismissable fade in" style="z-index:999;position:fixed;top:185px;left:524.5px;width:270px;">
    <a href="' . URL . 'registration" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong>  Student registered successfully.
  </div>';
	}
?>
<?php
	if($_GET['mode']=="successd3"){
		echo '<div class="alert alert-success alert-dismissable fade in" style="z-index:999;position:fixed;top:185px;left:524.5px;width:270px;">
    <a href="' . URL . 'registration" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong>  Successfully deleted.
  </div>';
	}
?>
<div id="myModal" class="modal fade" role="dialog" style="border: 1px solid black">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registration</h4>
      </div>
      <div class="modal-body">
		    
			<br>
			<form action="<?php echo URL;?>registration/addRegistration" method="POST" enctype="multipart/form-data">
			
				<div  style="position:relative;right:20px;float:right;min-width:210px;height: 250px">
					<div style="position:absolute;top:0px;right:30px;border: 1px solid black;height:180px;width: 150px;">
						<img src="<?php echo URL; ?>img/user.jpg" height="175" width="145">
					</div>
					<input style="position: absolute;bottom:20px;right: -70px" type="file" name="image">
				</div>
				<div class="form-group">
					<label style="min-width:200px;">Student Id</label>
					<input style="width:200px;" class="form-control" type="text" name="student_id" value="" autofocus required>
				</div >
				<div  style="width:200px" class="form-group">
					<label>Student Name</label>
					<input class="form-control" type="text" name="student_name" value="" required >
				</div>
				<div class="form-group">
					<label style="width:250px">Address</label>
					<input style="max-width:250px" class="form-control" type="text" name="address" value="" required>
				</div>
				<div style="max-width:200px" class="form-group">
					<label>Guardian Name</label>
					<input class="form-control" type="text" name="guardian_name" value="" required>
				</div>
				
				<div class="row">
					<div style="min-width:200px" class=" col-sm-6 form-group">
						<label>Phone</label>
						<input class="form-control" type="text" name="phone" value="" required>
					</div>
					<div style="min-width:200px" class="col-sm-6 form-group">
						<label>Birth Date</label>
						<input class="form-control" type="date" name="birth_date" value="" required>
					</div>
				</div>
				<div class="row">
					<div style="min-width:150px" class="col-sm-6 form-group">
						<label>Course</label>
						<select name="course" class="form-control" required>
					        <option>Bsc. IT</option>
					        <option>BBA</option>
					    </select>
					</div>
					<div style="min-width:200px" class="col-sm-6 form-group">
						<label>Enrolled Date</label>
						<input class="form-control" type="date" name="enrolled_date" value="" required >
					</div>
				</div>
				<br>
				<input class="btn btn-primary" type="submit" name="submit_add" value="Submit">
			</form>
			
      </div>
    </div>

  </div>
</div>
	
<form action="<?php echo URL;?>login/logout" method="POST">
<div id="confirmation3" style="border-radius:6px;box-shadow: 0px 0px 20px red;background-color:white;display:none;padding-top:30px;padding-left:60px;position:fixed;left:473.5px;bottom:270px;width:400px;height: 150px;border: 1px solid red">
			<label style="font-size: 18px;">Are you sure you want to delete?</label><br><br>
			<div id="cancel" style="margin-top:-14px;height:30px; width:30px;font-size:40px;position:absolute;top:0px;right:-5px;" onclick="cancel3()">&times;</div>
			<div style="position: absolute;left:150px;bottom:35px;">
			<input type="submit" class="btn btn-default" name="yes_logout" value="Yes">&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default" onclick="cancel3()">No</button>
			</div>
	</div>	
</form>

<div class="container table-responsive" style="margin-top:50px;margin-bottom:60px;min-height:500px;border: 1px solid black">
<form action="<?php echo URL;?>registration/delRegistration" method="GET">
	<table id="record_registration" class="table table-hover">
	<h4 style="font-weight: bold;font-size: 24px;">Student Registration</h4>
	<br>

	<!--div for confirmation-->
	<div id="confirmation" style="border-radius:6px;box-shadow: 0px 0px 20px red;background-color:white;display:none;padding-top:30px;padding-left:60px;position:fixed;left:473.5px;bottom:270px;width:400px;height: 150px;border: 1px solid red">
			<label style="font-size: 18px;">Are you sure you want to delete?</label><br><br>
			<div id="cancel" style="margin-top:-14px;height:30px; width:30px;font-size:40px;position:absolute;top:0px;right:-5px;" onclick="cancel()">&times;</div>
			<div style="position: absolute;left:150px;bottom:35px;">
			<input type="submit" class="btn btn-default" name="yes_delete" value="Yes">&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default" onclick="cancel()">No</button>
			</div>
	</div>


	<div style="padding-bottom:10px;border-bottom: 2px solid black">
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add New</button>
		&nbsp;
		<input class="btn btn-warning" type="submit" name="submit_update" value="Update">
		&nbsp;
		<button id="delete" class="btn btn-danger" type="button" onclick="del()">Delete</button>
		
		<input style="float:right;max-width: 160px" class="form-control" type="text" id="registration" onkeyup="myFunctionR()" placeholder="search">
	</div>
	<br><br>
		<thead>
			<tr>
				<th><input type="checkbox" id="selectall" ></th>
				<th>Student Id</th>
				<th>Student Name</th>
				<th>Address</th>
				<th>Guardian Name</th>
				<th>Phone</th>
				<th>Birth Date</th>
				<th>Course</th>
				<th>Year</th>
				<th>Enrolled Date</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($name as $bo) {
					echo "<tr>";
					echo "<td>";
					echo "<input class='second' type='checkbox' name='num[]' value='$bo->student_id'/>";
					echo "</td>";
						echo "<td>$bo->student_id</td>
						<td><a style='color:black' href='" . URL ."cv/myDetails/$bo->student_id'>$bo->student_name</a></td>
						<td>$bo->address</td>
						<td>$bo->guardian_name</td>
						<td>$bo->phone</td>
						<td>$bo->birth_date</td>
						<td>$bo->course</td>
						<td>$bo->year</td>
						<td>$bo->enrolled_date</td>";


						echo "</tr>";
						
				}
			?>
		</tbody>
	</table>
	
	</form>
</div>