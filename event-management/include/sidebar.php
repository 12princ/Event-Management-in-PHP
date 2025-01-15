<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview"> 
		<a href="<?php echo WEB_ROOT; ?>views/?v=DB"><i class="fa fa-calendar"></i><span>Events Calendar</span></a>
	</li>
                
        </li>
	<li class="treeview"> 
            <a href="../add/addevent.php"><i class="fa fa-calendar-check-o"></i><span>Event</span></a>
	</li>
        
        <li class="treeview"> 
            <a href="../add/addvenues.php"><i class="fa fa-building"></i><span>venues</span></a>
	</li>
        
	<li class="treeview"> 
            <a href="../add/addpackage.php"><i class="fa fa-gift"></i><span>Package</span></a>
	</li>	
        
        <li class="treeview"> 
		<a href="<?php echo WEB_ROOT; ?>views/?v=LIST"><i class="fa fa-credit-card"></i><span>Event Booking</span></a>
        </li>

        
        <li class="treeview"> 
		<a href="<?php echo WEB_ROOT; ?>views/?v=USERS"><i class="fa fa-users"></i><span>User Details</span></a>
	</li>
        
	<?php 
	$type = $_SESSION['calendar_fd_user']['type'];
	if($type == 'admin') {
	?>
	<li class="treeview"> 
		<a href="<?php echo WEB_ROOT; ?>views/?v=HOLY"><i class="fa fa-plane"></i><span>Holidays</span></a>
	</li>
	<?php
	}
	?>
  </ul>
</section>
<!-- /.sidebar -->