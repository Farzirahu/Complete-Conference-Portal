
<form  action="submit-here" method="POST"  >
 <?php

 echo"<input type='hidden' name='subtheme' id='subtheme' value='";?>
                  <?php
                      $idquery1 = mysql_query("SELECT * FROM young_abstract WHERE subtheme='BSY' AND valid='yes'");
                      while ($row1 = mysql_fetch_array($idquery1)) {
                       $abstract_idd1 = $row1['abstract_id'];
                      }

                      $abstract_idd1 = substr( $abstract_idd1, 5 );
                      $abstract_id1 = (int)$abstract_idd1;
                      if ($abstract_id1 == 0) {
                        $abstract_id1 = 1;
                        echo "BSYSA".$abstract_id1;
                      }
                      else{
                        $abstract_id1=$abstract_id1+1;
                        echo "BSYSA".$abstract_id1;
                      }

                    
                  ?><?php
                echo"'>";?>
                  
<input style="" type="hidden" name="submissiontype" value="young_abstract" /><br />
                    <input type="submit" name="submit" value="Submit" />
                    </form>