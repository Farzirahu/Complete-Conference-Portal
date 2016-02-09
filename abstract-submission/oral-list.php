
<form  action="submit-here" method="POST"  >
 <?php

 echo"
 <select name='subtheme' id='subtheme'  required>
              <option value=''> --Choose Sub-Themes Here-- </option>
                  <option value='";?>
                  <?php
                      $idquery1 = mysql_query("SELECT * FROM oral_abstract WHERE subtheme='ABT' AND valid='yes'");
                      $count = mysql_num_rows($idquery1);
                      while($row1 = mysql_fetch_array($idquery1)){
                       $abstract_idd1 = $row1['abstract_id'];
                      }

                      $abstract_idd1 = substr( $abstract_idd1, 5 );
                      $abstract_id1 = (int)$abstract_idd1;
                      if ($abstract_id1 == 0) {
                        $abstract_id1 = 1;
                        echo "ABTOL".$abstract_id1;
                      }
                      else{
                        $abstract_id1=$abstract_id1+1;
                        echo "ABTOL".$abstract_id1;
                      }


                    
                  ?><?php
                echo"'>Agricultural Biotechnology</option>
                  <option value='";?>
                  <?php
                  
                   
                     $idquery2 = mysql_query("SELECT * FROM oral_abstract WHERE subtheme='EBT' AND valid='yes'");
                      while ($row2 = mysql_fetch_array($idquery2)) {
                       $abstract_idd2 = $row2['abstract_id'];
                      }
                      $abstract_idd2 = substr( $abstract_idd2, 5 );
                      $abstract_id2 = (int)$abstract_idd2;
                      if ($abstract_id2 == 0) {
                        $abstract_id2 = 1;
                        echo "EBTOL".$abstract_id2;
                      }
                      else{
                        $abstract_id2=$abstract_id2+1;
                        echo "EBTOL".$abstract_id2;
                      }

                    
                  ?><?php
                echo"'>Environmental Biotechnology</option>
                  <option value='";?>
                  <?php
                  
                   
                     $idquery3 = mysql_query("SELECT * FROM oral_abstract WHERE subtheme='IBT' AND valid='yes'");
                      while ($row3 = mysql_fetch_array($idquery3)) {
                       $abstract_idd3 = $row3['abstract_id'];
                      }
                      $abstract_idd3 = substr( $abstract_idd3, 5 );
                      $abstract_id3 = (int)$abstract_idd3;
                      if ($abstract_id3 == 0) {
                        $abstract_id3 = 1;
                        echo "IBTOL".$abstract_id3;
                      }
                      else{
                        $abstract_id3=$abstract_id3+1;
                        echo "IBTOL".$abstract_id3;
                      }

                    
                  ?><?php
              echo"'>Industrial Biotechnology</option>
                <option value='";?>
                  <?php
                  
                   
                     $idquery4 = mysql_query("SELECT * FROM oral_abstract WHERE subtheme='MBT' AND valid='yes'");
                      while ($row4 = mysql_fetch_array($idquery4)) {
                       $abstract_idd4 = $row4['abstract_id'];
                      }
                      $abstract_idd4 = substr( $abstract_idd4, 5 );
                      $abstract_id4 = (int)$abstract_idd4;
                      if ($abstract_id4 == 0) {
                        $abstract_id4 = 1;
                        echo "MBTOL".$abstract_id4;
                      }
                      else{
                        $abstract_id4=$abstract_id4+1;
                        echo "MBTOL".$abstract_id4;
                      }

                    
                  ?><?php
              echo"'>Medical Biotechnology</option>
                <option value='";?>
                  <?php
                  
                   
                      $idquery5 = mysql_query("SELECT * FROM oral_abstract WHERE subtheme='NBT' AND valid='yes'");
                      while ($row5 = mysql_fetch_array($idquery5)) {
                       $abstract_idd5 = $row5['abstract_id'];
                      }
                      $abstract_idd5 = substr( $abstract_idd5, 5 );
                      $abstract_id5 = (int)$abstract_idd5;
                      if ($abstract_id5 == 0) {
                        $abstract_id5 = 1;
                        echo "NBTOL".$abstract_id5;
                      }
                      else{
                        $abstract_id5=$abstract_id5+1;
                        echo "NBTOL".$abstract_id5;
                      }

                    
                  ?><?php
                echo"'>Nanobiotechnology</option>
                <option value='";?>
                  <?php
                  
                   
                     $idquery6 = mysql_query("SELECT * FROM oral_abstract WHERE subtheme='RET' AND valid='yes'");
                      while ($row6 = mysql_fetch_array($idquery6)) {
                       $abstract_idd6 = $row6['abstract_id'];
                      }
                      $abstract_idd6 = substr( $abstract_idd6, 5 );
                      $abstract_id6 = (int)$abstract_idd6;
                      if ($abstract_id6 == 0) {
                        $abstract_id6 = 1;
                        echo "RETOL".$abstract_id6;
                      }
                      else{
                        $abstract_id6=$abstract_id6+1;
                        echo "RETOL".$abstract_id6;
                      }

                    
                  ?><?php
          echo"'>Renewable Energy</option>
           <option value='";?>
                  <?php
                  
                   
                     $idquery6 = mysql_query("SELECT * FROM oral_abstract WHERE subtheme='SBT' AND valid='yes'");
                      while ($row6 = mysql_fetch_array($idquery6)) {
                       $abstract_idd6 = $row6['abstract_id'];
                      }
                      $abstract_idd6 = substr( $abstract_idd6, 5 );
                      $abstract_id6 = (int)$abstract_idd6;
                      if ($abstract_id6 == 0) {
                        $abstract_id6 = 1;
                        echo "SBTOL".$abstract_id6;
                      }
                      else{
                        $abstract_id6=$abstract_id6+1;
                        echo "SBTOL".$abstract_id6;
                      }

                    
                  ?><?php
          echo"'>Systems Biology</option>
              </select>";
              ?>
<input style="" type="hidden" name="submissiontype" value="oral_abstract" /><br />
                    <input type="submit" name="submit" value="Submit" />
                    </form>