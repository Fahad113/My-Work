
<?php echo validation_errors(); ?>

<?php echo form_open('student/create') ?>
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
  border: solid 1px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;
}
.style-1 input[type="text"]:focus,
.style-1 input[type="text"].focus {
  border: solid 1px #707070;
  box-shadow: 0 0 5px 1px #969696;
}
        </style>
    </head>
    <!--<img src="../../../images/icn_new_article.png" alt=""/>-->
	<body>
            <table >
			<caption><h2 style="font-family:cursive;color: black"> <img src="<?php echo base_url('images/human.png'); ?>" alt=""/>Insert Student Record</caption>
                                <tr class="input-list style-1 clearfix">
					<td><label for="id">Student ID</label></td>
					<td><input class="focus" type="input" name="id" /><br /></td>
				</tr>	
                                 <tr class="input-list style-1 clearfix">
					<td><label for="name">Student Name</label></td>
					<td><input class="focus" type="input" name="name" /><br /></td>
				</tr>
				<tr class="input-list style-1 clearfix">
					<td><label for="fname">Father Name</label></td>
					<td><input class="focus" type="input" name="fname" /><br /></td>
				</tr>
				<tr class="input-list style-1 clearfix">
					<td><label for="class">Student Class</label></td>
					<td><input class="focus" type="input" name="class" /><br /></td>
				</tr>
				<tr class="input-list style-1 clearfix">
					<td><label for="address">Student Address</label></td>
					<td><textarea class="focus"  name="address" ></textarea><br /></td>
				</tr>
				<tr>
                                    <td align="center" colspan="2"><input  class="btn btn-link" type="submit" name="submit" value="Insert New Record" /></td>
				</tr>
		</table>
	</body>
</HTML>
</form>