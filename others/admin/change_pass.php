<div class="passbox">
            		 <form action="" method="POST">
            		 	<fieldset>
            		 	<label>Old Password:</label>
            		 	<input class="input pass" required type="text" name="oldPassword" placeholder="Old Password"><br><br>
            		 	<label>New password:</label>
            		 	<input class="input pass" required type="password" name="newPassword" placeholder="New Password"><br><br>
            		 	<label>Confirm new password:</label>
            		 	<input  class="input pass" required type="password" name="conNewPassword" placeholder="Confirm New Password"><br><br>
            		 	<input  class="submit"  type="submit" value="submit" name="submit" >
            		 	</fieldset>
            		 </form>
            		</div>
            		 </center>

                         <?php
                         if (isset($_POST['submit'])) {
                               include("include/connection.php");
                               $old = mysql_real_escape_string($_POST['oldPassword']);
                               $new = mysql_real_escape_string($_POST['newPassword']);
                               $new1 = mysql_real_escape_string($_POST['conNewPassword']);
                               $old = sha1($old);
                               $query = mysql_query("SELECT * FROM admin WHERE password ='$old'");
                $count = mysql_num_rows($query);
                    
                if ($count == 1) {
                            if ($new == $new1) {
      
                                          $new = sha1($new);
                                          $query = mysql_query("UPDATE admin set password='$new'");
                                                      if($query){
                                                            
                                                            echo "<script>alert('password changed successfully!!!')</script>";
                                                            echo "<script>window.top.location.href = 'index';</script>";
                                                      }
                                                      else{
                                                            echo "<script>alert('An error occurred please try again !!!')</script>";
                                                            header("location: index?category=changePassword");
                                                      }
                                    }
                                    else{
                                           echo "<script>alert('passwords doesn't match !!!');</script>";
                                    }
   
                         }
                         else{

                  echo "<script>alert('incorrect old password!!!');</script>";
                

                         }}

                         ?>