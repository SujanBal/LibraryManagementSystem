<?php
	error_reporting(0);
?>

<?php
	if($_GET['mode']=="error4"){
		echo '<div class="alert alert-info alert-dismissable fade in" style="z-index:999;position:fixed;top:185px;left:524.5px;width:270px;">
    <a href="' . URL . 'person" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong>  Book Id does not exists, no book left or Student Id is mistake.
  </div>';
	}
?>

<?php
	if($_GET['mode']=="success4"){
		echo '<div class="alert alert-success alert-dismissable fade in" style="z-index:999;position:fixed;top:185px;left:524.5px;width:270px;">
    <a href="' . URL . 'person" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong>  Book assigned successfully.
  </div>';
	}
?>
<?php
	if($_GET['mode']=="successd2"){
		echo '<div class="alert alert-success alert-dismissable fade in" style="z-index:999;position:fixed;top:185px;left:524.5px;width:270px;">
    <a href="' . URL . 'person" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong>  Successfully deleted.
  </div>';
	}
?>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Assign Book</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo URL; ?>person/addPerson" method="POST" >
			<div style="width:200px" class="form-group">
				<label>Student Id</label>
				<input class="form-control" type="text" name="student_id" autofocus required>
			</div>
			<div style="width:210px" class="form-group">
				<label>Name</label>
				<input class="form-control" type="text" name="person_name" value="" required>
			</div>
			<div style="width:100px" class="form-group">
				<label>Book Id</label>
				<input class="form-control" type="number" name="book_i" value=""  required>
			</div>
			<div class="row">
				<div style="width:250px" class="col-sm-6 form-group">
					<label>Issued Date</label>
					<input class="form-control" type="date" name="issued_date" value=""  required>
				</div>
				<div style="width:250px" class="col-sm-6 form-group">
					<label>Returning Date</label>
					<input class="form-control" type="date" name="returning_date" value=""  required>
				</div>
			</div>
			<br>
			<input class="btn btn-primary" type="submit" name="submit_addPerson" value="Submit">
			<br><br>
		</form>
      </div>

    </div>

  </div>
</div>

<form action="<?php echo URL;?>login/logout" method="POST">
<div id="confirmation2" style="border-radius:6px;box-shadow: 0px 0px 20px red;background-color:white;display:none;padding-top:30px;padding-left:60px;position:fixed;left:473.5px;bottom:270px;width:400px;height: 150px;border: 1px solid red">
			<label style="font-size: 18px;">Are you sure you want to delete?</label><br><br>
			<div id="cancel" style="margin-top:-14px;height:30px; width:30px;font-size:40px;position:absolute;top:0px;right:-5px;" onclick="cancel2()">&times;</div>
			<div style="position: absolute;left:150px;bottom:35px;">
			<input type="submit" class="btn btn-default" name="yes_logout" value="Yes">&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default" onclick="cancel2()">No</button>
			</div>
	</div>	
</form>


<div class="container table-responsive" style="border: 1px solid black;margin-top: 50px;margin-bottom: 60px;min-height: 500px">
<form action="<?php echo URL;?>person/delPerson" method="GET">
	<table id="record_student" class="table table-hover">
	<h4 style="font-weight: bold;font-size: 24px;">Library Registration</h4>
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

		<div style="padding-bottom:10px;border-bottom: 2px solid black;">
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Assign</button>
			&nbsp;
			<input class="btn btn-warning" type="submit" name="submit_update" value="Update">
			&nbsp;
			<button id="delete" class="btn btn-danger" type="button" onclick="del()">Delete</button>
			&nbsp;

			<div style="float:right" class="dropdown">
			    <button style="float:right" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">By
			    <span class="caret"></span></button>
			    <ul class="dropdown-menu dropdown-menu-right">
			      <li><button class="btn btn-default form-control" type="button"  onclick="search1()">Student Id</button></li>
			      <li><button class="btn btn-default form-control" type="button"  onclick="search2()">Student Name</button></li>
			      <li><button class="btn btn-default form-control" type="button"  onclick="search3()">Book Name</button></li>
			      <li><button class="btn btn-default form-control" type="button"  onclick="search4()">Issued Date</button></li>
			      <li><button class="btn btn-default form-control" type="button"  onclick="search5()">Returning Date</button></li>
			    </ul>
		    </div>
		
			<div style="float:right;" id="input1">
				<input style="float:right;max-width: 160px" class="form-control" type="text" id="myInput1" onkeyup="myFunction1()" placeholder="search">
			</div>
			<div id="input2" style="display: none">
				<input style="float:right;max-width: 160px" class="form-control" type="text" id="myInput2" onkeyup="myFunction2()" placeholder="search">
			</div>
			<div id="input3" style="display: none">
				<input style="float:right;max-width: 160px" class="form-control" type="text" id="myInput3" onkeyup="myFunction3()" placeholder="search">
			</div>
			<div id="input4" style="display: none">
				<input style="float:right;max-width: 160px" class="form-control" type="text" id="myInput4" onkeyup="myFunction4()" placeholder="search">
			</div>
			<div id="input5" style="display: none">
				<input style="float:right;max-width: 160px" class="form-control" type="text" id="myInput5" onkeyup="myFunction5()" placeholder="search">
			</div>

		</div>
		<br><br>	
		<thead>
			<tr>
				<th><input type="checkbox" id="selectall" ></th>
				<th>Student Id</th>
				<th>Student Name</th>
				<th colspan="2">Book Name</th>
				<th>Issued Date</th>
				<th>Returning Date</th>
				<th>Charges in Rs.</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($name as $bo) {
					echo "<tr>";
					echo "<td>";
					echo "<input class='second' type='checkbox' name='num[]' value='$bo->SN'/>";
					echo "</td>";
					echo "<td>$bo->student_id</td>
						<td><a style='color:black;' href='" . URL ."cv/myDetails/$bo->student_id'>$bo->Person_Name</a></td>
						<td>$bo->Book_Id</td>
						<td>$bo->NameOfBook</td>
						<td>$bo->Issued_Date</td>
						<td>$bo->Returning_Date</td>
						<td>$bo->Payment.00</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</form>
</div>