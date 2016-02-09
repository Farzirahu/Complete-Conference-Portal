

<?php

        $uid = "farzirahu";
      include("include/connection.php");
      $query = mysql_query("SELECT * FROM abstract WHERE uid='$uid'");
      $count = mysql_num_rows($query);
      $row = mysql_fetch_assoc($query);
      $name = $row['name'];
      $designation = $row['designation'];
      $department = $row['department'];
      $institute = $row['institute'];
      $city = $row['city'];
      $state = $row['state'];
      $country = $row['country'];
      $zip = $row['zip'];
      $presenting = $row['presenting'];
      $correspondence = $row['correspondence'];
      //echo $count;
        ?>

<fieldset>
    <legend id="authorpresent"><h3><b>Author 1</b></h3></legend>
        <label><span>Name :<span class="required">*</span></span>
            <input type="text" name="name" id="name" required="true" value="rahul" class="input-field"/>
        </label>
        <label><span>Designation: <span class="required">*</span></span>
            <input type="text" name="designation" id="designation" required="true" value="<?php echo $designation; ?>" class="input-field"/>
        </label>
        <label><span>Department/section/center: <span class="required">*</span></span>
            <input type="text" name="department" id="department" required="true" value="<?php echo $designation; ?>"  class="input-field"/>
        </label>
        <label><span>Institute: <span class="required">*</span></span>
            <input type="text" name="institute" id="institute" required="true" value="<?php echo $designation; ?>" class="input-field"/>
        </label>
        <label><span>City: <span class="required">*</span></span>
            <input type="text" name="city" id="city" required="true" value="<?php echo $designation; ?>" class="input-field"/>
        </label>
        <label><span>State:<span class="required">*</span></span>
            <input type="text" name="state" id="state" required="true" value="<?php echo $designation; ?>" class="input-field"/>
        </label>
        <label><span>Country: <span class="required">*</span></span>
            <input type="text" name="country" id="country" required="true" value="<?php echo $designation; ?>" class="input-field"/>
        </label>
         <label><span>ZIP: <span class="required">*</span></span>
            <input type="text" name="zip" id="zip" required="true" value="<?php echo $designation; ?>" class="input-field"/>
        </label>

        <label><span>Presenting Author: </span>
            <input type="checkbox" name="presenting" id="presenting" value="yes"  class="input-field"/>
        </label><br>
        <label><span>Correspondence Author: </span>
            <input type="checkbox" name="correspondence" id="correspondence" value="yes"  class="input-field"/>
        </label><br>

        <label>
            <span>&nbsp;</span><input type="submit" id="submit_btn" value="Submit Author" />
        </label>
         </fieldset>