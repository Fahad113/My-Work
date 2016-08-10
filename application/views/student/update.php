
<?php echo validation_errors(); ?>

<?php echo form_open('student_ctrl/update/'.$student['id']) ?>
<HTML>
    <head>
         <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css"/>
       
           <style>
                table{
                    font-family: arial, sans-serif; 
                    border-collapse: collapse;
                    width:35%;
                    border-spacing: 5px;
                     border-collapse: collapse;
                     margin-left: 40%;
                     text-align: right;
                }

            td, th {
                
                text-align: left;
                padding: 10px;
                color: #707070;
                font-size: 20px;
                font-family: "Comic Sans MS", Times, serif;
            }

/*            tr:nth-child(even) {
                background-color: #dddddd;
            }*/
            .style-1 input[type="text"] {
  padding: 10px;
 
  transition: box-shadow 0.3s, border 0.3s;
}
.style-1 input[type="text"]:focus,
.style-1 input[type="text"].focus {
 
  box-shadow: 0 0 5px 1px #969696;
}
        </style>
    </head>
	<body>
            <table class="table-striped">
                    <caption><h2 style="font-family:cursive;color: black"> <img src="<?php echo base_url('images/u.png'); ?>" alt=""/>Student Update Form</h2></caption>
				<tr>
					<td><label for="name">Student ID</label></td>
                                        <td><input class="focus" type="input" name="id"  value="<?php echo $student['id'];?>" /><br /></td>
				</tr>
				<tr>
					<td><label for="name">Student Name</label></td>
                                        <td><input class="focus" type="input" name="name"  value="<?php echo $student['name'];?>" /><br /></td>
				</tr>
				<tr>
					<td><label for="fname">Father Name</label></td> 
					<td><input class="focus" type="input" name="fname" value="<?php echo $student['fname'];?>" /><br /></td>
				</tr>
				<tr>
					<td><label for="class">Student Class</label></td>
					<td><input class="focus" type="input" name="class" value="<?php echo $student['class'];?>" /><br /></td>
				</tr>
				<tr>
					<td><label for="address">Student Address</label></td>
					<td><textarea class="focus"  name="address" ><?php echo $student['address'];?></textarea><br /></td>
				</tr>
				<tr>
                                    <td class="btn btn-default"><input type="submit" name="submit" value="Update" /></td>
				</tr>
		</table>
	</body>
</HTML>

<!--//<?php echo validation_errors(); ?>

//<?php echo form_open('student_ctrl/update/'.$student['id']) ?>
<html>
    <head>
        <link href="//<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css"/>
        <script src="//<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
        <script src="//<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
   
    </head>
    <body >
        <div class="container" style="width: 30%; float: right; margin-right: 20%;">
            <div class="form-group row">
              <label for="example-text-input" class="col-lg-4 col-form-label">Student ID</label>
              <div class="col-xs-10">
                  <input class="form-control" type="text" value="//<?php echo $student['id'];?>" placeholder="Enter ID" id="example-text-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-search-input" class=" col-lg-4 col-form-label">Student Name</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" value="//<?php echo $student['name'];?>" placeholder="Enter Student Name" id="example-search-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-email-input" class="col-lg-4 col-form-label">Father Name</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" value="//<?php echo $student['fname'];?>" placeholder="Enter Father Name" id="example-email-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-url-input" class="col-lg-4 col-form-label">Student Class</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" value="//<?php echo $student['class'];?>" placeholder="Enter Class" id="example-url-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-tel-input" class="col-lg-6 col-form-label">Student Address</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" value="//<?php echo $student['address'];?>" placeholder="Enter Student Address" id="example-tel-input">
              </div>
              <div class="col-xs-10" style=" margin-top: 10%;">
                 <input type="submit" name="submit" class="btn btn-danger" value="//<?php echo $student['name'];?> Record Update">
              </div>
       </div>
    </body>
</html>-->