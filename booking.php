<form role="form" action="">
    <div class="box-body">
        
         <div class="form-group">
        <label for="exampleInputEmail1">Events</label>
		<input type="hidden" name="event" value=""  id="E_id"/>
        <span id="sprytf_name">
		<select name="name" class="form-control input-sm">
			<option>--select Event--</option>
			<?php
			$sql = "SELECT E_id, event FROM tbl_event";
			$result = dbQuery($sql);
			while($row = dbFetchAssoc($result)) {
				extract($row);
			?>
			<option value="<?php echo $E_Id; ?>"><?php echo $event; ?></option>
			<?php 
			}
			?>
		</select>
		<span class="selectRequiredMsg">Event is required.</span>
		
		</span>
      </div>

        
        <div class="form-group">
        <label for="exampleInputEmail1">Venues</label>
		<input type="hidden" name="V_Id" value=""  id="V_Id"/>
        <span id="sprytf_name">
		<select name="name" class="form-control input-sm">
			<option>--select Venues--</option>
			<?php
			$sql = "SELECT V_Id, Venue_Name FROM tbl_venues";
			$result = dbQuery($sql);
			while($row = dbFetchAssoc($result)) {
				extract($row);
			?>
			<option value="<?php echo $V_Id; ?>"><?php echo $Venue_Name; ?></option>
			<?php 
			}
			?>
		</select>
		<span class="selectRequiredMsg">Venues is required.</span>
		
		</span>
      </div>
        
        <div class="form-group">
        <label for="exampleInputEmail1">Packages</label>
		<input type="hidden" name="P_Id" value=""  id="P_Id"/>
        <span id="sprytf_name">
		<select name="name" class="form-control input-sm">
			<option>--select Package--</option>
			<?php
			$sql = "SELECT P_Id, P_Name FROM tbl_package";
			$result = dbQuery($sql);
			while($row = dbFetchAssoc($result)) {
				extract($row);
			?>
			<option value="<?php echo $P_Id; ?>"><?php echo $P_Name; ?></option>
			<?php 
			}
			?>
		</select>
		<span class="selectRequiredMsg">Package is required.</span>
		</span>
        </div>
        
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
		<input type="hidden" name="userId" value=""  id="userId"/>
        <span id="sprytf_name">
		<select name="name" class="form-control input-sm">
			<option>--select user--</option>
			<?php
			$sql = "SELECT id, name FROM tbl_users";
			$result = dbQuery($sql);
			while($row = dbFetchAssoc($result)) {
				extract($row);
			?>
			<option value="<?php echo $id; ?>"><?php echo $name; ?></option>
			<?php 
			}
			?>
		</select>
		<span class="selectRequiredMsg">Name is required.</span>
		
		</span>
      </div>
	  
	  <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
		<span id="sprytf_address">
        <textarea name="address" class="form-control input-sm" placeholder="Address" id="address"></textarea>
		<span class="textareaRequiredMsg">Address is required.</span>
		<span class="textareaMinCharsMsg">Address must specify at least 10 characters.</span>	
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
		<span id="sprytf_phone">
        <input type="text" name="phone" class="form-control input-sm"  placeholder="Phone number" id="phone">
		<span class="textfieldRequiredMsg">Phone number is required.</span>
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
		<span id="sprytf_email">
        <input type="text" name="email" class="form-control input-sm" placeholder="Enter email" id="email">
		<span class="textfieldRequiredMsg">Email ID is required.</span>
		<span class="textfieldInvalidFormatMsg">Please enter a valid email (user@domain.com).</span>
		</span>
      </div>
	       
      <div class="form-group">
      <div class="row">
      	<div class="col-xs-6">
			<label>Event Date</label>
			<span id="sprytf_rdate">
        	<input type="text" name="rdate" class="form-control" placeholder="YYYY-mm-dd">
			<span class="textfieldRequiredMsg">Date is required.</span>
			<span class="textfieldInvalidFormatMsg">Invalid date Format.</span>
			</span>
        </div>
        <div class="col-xs-6">
			<label>Event Time</label>
			<span id="sprytf_rtime">
            <input type="text" name="rtime" class="form-control" placeholder="HH:mm">
			<span class="textfieldRequiredMsg">Time is required.</span>
			<span class="textfieldInvalidFormatMsg">Invalid time Format.</span>
			</span>
       </div>
      </div>
	  </div>
	
        
        
	  <div class="form-group">
        <label for="exampleInputPassword1">No of Peoples</label>
		<span id="sprytf_ucount">
        <input type="text" name="ucount" class="form-control input-sm" placeholder="No of peoples" >
		<span class="textfieldRequiredMsg">No of peoples is required.</span>
		<span class="textfieldInvalidFormatMsg">Invalid Format.</span>
      </div>