<?php include 'includes/header.php';?>
<?php include 'includes/dashboard_header.php';?>
<div id="page_title">Stations</div>
<div class="dashboard ">
    <?php include 'includes/sidebar.php';?>
    <div class="pannel">
        <div class="pannel-header">
            <p class="mb-0">Stations</p>
        </div>
        <div class="pannel-body">
        	<div class="pg_name">
        		<h3 class="mb-0">Stations</h3>
        		<a href="stations_add.php" class="theme_btn">Add</a>
        	</div>
        	<div class="scroll">
			    <table id="example" class="order-column" style="width:100%">
			          <thead>
			              	<tr>
			                  	<th>S.No</th>
			                  	<th>User Name</th>
			                  	<th>Date</th>
			                	<th>Email</th>
			                	<th>Status</th>
			                	<th>Action</th>
			              	</tr>
			          </thead>
			          <tbody>
			              	<tr>
			                  	<td>01</td>
			                  	<td>ADCF</td>
			                  	<td>03/02/2020</td>
			                  	<td>asd@email.com</td>
			                  	<td>
			                  		<select id="status_select">
			                  			<option value="active">Active</option>
			                  			<option value="in-active">In-Active</option>
			                  			<option value="pending">Pending</option>
			                  		</select>
			                  	</td>
			                  	<td>
			                  		<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
			                  		<ul class="onhover">
			                  			<li><a href="stations_view.php"><i class="fa fa-eye" aria-hidden="true"></i> View</a></li>
			                  		</ul>
			                  	</td>
			              	</tr>
			          </tbody>
			    </table>
			</div>
        </div>
    </div>
</div>
<div class="paypopup status_select text-center">
    <div class="poppup_box">
        <div class="pop_close closer">x</div>
        <div class="content">
            <img src="assets/images/warning.png">
            <p class="black tc my-4">Are you sure you want to In-Active ABC User?</p>
            <ul class="btn_set">
                <li><a href="#" class="theme_btn closer">Yes</a></li>
                <li><a href="javascript:;" class="theme_btn closer" id="in-active_no">No</a></li>
            </ul>
        </div>
    </div>
</div>
<?php include 'includes/footer-links.php';?>