
<div class="container">
	<h2>Edit Registration</h2>
	<form action="<?php echo URL;?>registration/updateRegistration" method="POST">
		<input type="hidden" name="id" value="<?php echo $lists[0]->student_id;?>" readonly >
		<div class="form-group">
			<label>Student Id</label>
			<input style="width:210px" class="form-control" type="text" name="student_id" value="<?php echo $lists[0]->student_id;?>" required >
		</div>
		<div class="form-group">
			<label>Student Name</label>
			<input style="width:230px" class="form-control"  type="text" name="student_name" value="<?php echo $lists[0]->student_name;?>" required>
		</div>
		<div class="form-group">
			<label>Address</label>
			<input style="width:250px" class="form-control"  type="text" name="address" value="<?php echo $lists[0]->address;?>" required>
		</div>
		<div class="form-group">
			<label>Guardian Name</label>
			<input style="width:230px" class="form-control"  type="text" name="guardian_name" value="<?php echo $lists[0]->guardian_name;?>" required>
		</div>
		<div class="row">
			<div class="col-sm-3 form-group">
				<label>Phone</label>
				<input style="width:200px" class="form-control"  type="text" name="phone" value="<?php echo $lists[0]->phone;?>"  required>
			</div>
			<div class="col-sm-4 form-group">
				<label>Birth Date</label>
				<input style="width:250px" class="form-control" type="date" name="birth_date" value="<?php echo $lists[0]->birth_date;?>" required>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 form-group">
				<label>Course</label>
				<select style="width:150px" name="course" class="form-control" required>
			        <option>Bsc. IT</option>
			        <option>BBA</option>
			    </select>
			</div>
			<div class="col-sm-4 form-group">
				<label>Enrolled Date</label>
				<input style="width:250px" style="width:210px" class="form-control" type="date" name="enrolled_date" value="<?php echo $lists[0]->enrolled_date;?>" required>
			</div>
		</div><br>
		<input class="btn btn-primary" type="submit" name="submit_update" value="Submit">
	</form><br><br>
</div>