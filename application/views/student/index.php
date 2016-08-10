<html>
    <head>
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
   
	
        <style>
                table{
                    font-family: arial, sans-serif; 
                    border-collapse: collapse;
                    width:65%;
                    border-spacing: 15px;
                     border-collapse: collapse;
                     float-left: 10%;
                }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                color: #000000;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
<body>
            <?php
                if ($this->session->userdata('sess_ci_admin_msg_type') == 'success') {
                    ?>
                    <div >
                         <?php echo $this->session->userdata('sess_ci_admin_msg');?>
                    </div>
                    <?php 
                     $this->session->set_userdata(array(
                        'sess_ci_admin_msg' => "",
                        'sess_ci_admin_msg_type' => ''
                    ));
                } ?>

    <div class="container">
        <div style=" float: right;">
            <img src="<?php echo base_url('images/insert.png'); ?>" alt=""/> <a href="<?php echo base_url()."index.php/student_ctrl/create"; ?>"> <button class="btn btn-default" style="alignment-adjust: central; " type="submit">Insert New Record</button></a>
            
           
        </div>   
        <table style="margin-top: 5%; " >
                    <tr>
                          <th >ID</th>
                          <th >Name</th>
                          <th >Father Name</th>
                          <th >class</th>
                          <th >Address</th>
                          <th>Edit / Delete</th>
                     </tr>
                        <?php foreach ($students as $student): ?>
                        <tr>
                                <td><?php echo $student['id'] ?></td>
                                <td><?php echo $student['name'] ?></td>
                                <td> <?php echo $student['fname'] ?></td>
                                <td> <?php echo $student['class'] ?></td>
                                <td><?php echo $student['address'] ?></td>
                                <td><a href="<?php echo base_url()."index.php/student_ctrl/update/".$student['id']?>"><img src="<?php echo base_url('images/delete.png'); ?>" alt=""/><input type="button" value="Edit Record"><a href="<?php echo base_url()."index.php/student_ctrl/delete/".$student['id']?>"><img src="<?php echo base_url('images/update.png'); ?>" alt=""/><input type="button" value="Delete Record">
                        </tr>
				<?php endforeach ?>
             </table>
    </div>
      

</body>
</html>


