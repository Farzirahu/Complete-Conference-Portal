<?php
session_start();
if(!isset($_SESSION["user_login"])){
                echo "<script>window.top.location.href = '../login';</script>";
              }
              else{

                if (isset($_POST['submit'])) {

                  $subtype = mysql_real_escape_string($_POST['submissiontype']);
                  $subthemecode = mysql_real_escape_string($_POST['subtheme']);
                  $abstract_id = preg_replace('/\s+/', '', $subthemecode);
                  $subtheme = substr( $abstract_id,0,3 );
                if ($subtype == "oral_abstract") {
                  $type = "oral presentation";
                }
                else if ($subtype == "poster_abstract"){
                  $type = "poster presentation";
                }
                else if ($subtype == "young_abstract") {
                  $type = "young scientist award";
                }
                else{
                  echo "<script>window.top.location.href = '../error';</script>";
                }
                include("include/connection.php");
                $uid = $_SESSION["user_login"];
                $userquery = mysql_query("SELECT * FROM registrations WHERE uid='$uid'");
                $counterquery = mysql_query("SELECT * FROM $subtype WHERE uid='$uid'");
                $userrow = mysql_fetch_assoc($userquery);
                $fname = $userrow['firstname'];
                $lname = $userrow['lastname'];
                
                }
                else{
                  echo "<script>window.top.location.href = '../error';</script>";
                }
                ?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Abstract Submission Portal Biosangam 2016</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.tagit.css" rel="stylesheet" type="text/css">
<link href="css/tagit.ui-zendesk.css" rel="stylesheet" type="text/css">
<script src="jquery.min.js"></script>
<script src="jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>

    <!-- The real deal -->
<script src="js/tag-it.js" type="text/javascript" charset="utf-8"></script>
<style type="text/css">
.main_form input{
  font-family: "Times New Roman", Times, serif !important;
    font-size:16px !important;
}
#abstitle{
  font-family: "Times New Roman", Times, serif !important;
    font-size:16px !important;
}
#contact_body input{
  font-family: "Times New Roman", Times, serif !important;
    font-size:16px !important;
}
label input{
  font-family: "Times New Roman", Times, serif !important;
    font-size:16px !important;
}
#abstract{
    font-family: "Times New Roman", Times, serif !important;
    font-size:16px !important;
}
</style>
<script type="text/javascript">
  $(function(){
            var sampleTags = ['c++', 'java', 'php', 'coldfusion', 'javascript', 'asp', 'ruby', 'python', 'c', 'scala', 'groovy', 'haskell', 'perl', 'erlang', 'apl', 'cobol', 'go', 'lua'];

            //-------------------------------
            // Minimal
            //-------------------------------
            $('#myTags').tagit();

            //-------------------------------
            // Single field
            //-------------------------------
            $('#singleFieldTags').tagit({
                availableTags: sampleTags,
                // This will make Tag-it submit a single form value, as a comma-delimited field.
                singleField: true,
                singleFieldNode: $('#mySingleField')
            });

            // singleFieldTags2 is an INPUT element, rather than a UL as in the other 
            // examples, so it automatically defaults to singleField.
            $('#singleFieldTags2').tagit({
                availableTags: sampleTags
            });

            
            //-------------------------------
            // Tag events
            //-------------------------------
            var eventTags = $('#eventTags');

            var addEvent = function(text) {
                $('#events_container').append(text + '<br>');
            };

            eventTags.tagit({
                availableTags: sampleTags,
                beforeTagAdded: function(evt, ui) {
                    if (!ui.duringInitialization) {
                        addEvent('beforeTagAdded: ' + eventTags.tagit('tagLabel', ui.tag));
                    }
                },
                afterTagAdded: function(evt, ui) {
                    if (!ui.duringInitialization) {
                        addEvent('afterTagAdded: ' + eventTags.tagit('tagLabel', ui.tag));
                    }
                },
                beforeTagRemoved: function(evt, ui) {
                    addEvent('beforeTagRemoved: ' + eventTags.tagit('tagLabel', ui.tag));
                },
                afterTagRemoved: function(evt, ui) {
                    addEvent('afterTagRemoved: ' + eventTags.tagit('tagLabel', ui.tag));
                },
                onTagClicked: function(evt, ui) {
                    addEvent('onTagClicked: ' + eventTags.tagit('tagLabel', ui.tag));
                },
                onTagExists: function(evt, ui) {
                    addEvent('onTagExists: ' + eventTags.tagit('tagLabel', ui.existingTag));
                }
            });

            
            
            //-------------------------------
            // Allow spaces without quotes.
            //-------------------------------
            $('#allowSpacesTags').tagit({
                availableTags: sampleTags,
                allowSpaces: true
            });

           
            
        });


$(document).ready(function() {

/*
$(".addauthorbtn").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "display.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#contact_body").html(response); 
            //alert(response);
        }

    });
});*/


    $("#submit_btn").click(function() { 
       
	    var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields		
		$("#mydiv input[type=text], #contact_form input[name=abstitle], #contact_form textarea[required=true]").each(function(){
			$(this).css('border-color',''); 
			if(!$.trim($(this).val())){ //if this field is empty 
				$(this).css('border-color','red'); //change border color to red   
				proceed = false; //set do not proceed flag
			}
				
		});
       
        if(proceed) //everything looks good! proceed...
        {
			//get input field values data to be sent to server
            post_data = {
				'user_name'		       : $('input[name=name]').val(),
        'user_subtype'     : $('input[name=submissiontype]').val(), 
				'user_designation'	   : $('input[name=designation]').val(), 
                'user_department'      : $('input[name=department]').val(), 
                'user_institute'       : $('input[name=institute]').val(), 
                'user_city'            : $('input[name=city]').val(), 
                'user_state'           : $('input[name=state]').val(), 
                'user_country'         : $('input[name=country]').val(), 
                'user_zip'             : $('input[name=zip]').val(), 
                'user_presenting'      : $('input[name=presenting]').val(), 
                'user_correspondence'  : $('input[name=correspondence]').val()
                
			};
            
            //Ajax post data to server
            $.post('ajaxsubmit.php', post_data, function(response){  
				if(response.type == 'error'){ //load json data from server and output message     
					output = '<div class="error">'+response.text+'</div>';
				}else{
				    output = '<div class="success">'+response.text+'</div>';
					//reset values in all input fields
					$("#mydiv  input[required=true]").val(''); 
                    
					$("#mydiv #contact_body").slideUp(); //hide form after success
				}
				$("#mydiv #contact_results").hide().html(output).slideDown();
            }, 'json');
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#mydiv  input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
        $("#result").slideUp();
    });
});


(function($){
  $.fn.textareaCounter = function(options) {
    // setting the defaults
    // $("textarea").textareaCounter({ limit: 100 });
    var defaults = {
      limit: 250
    };  
    var options = $.extend(defaults, options);
 
    // and the plugin begins
    return this.each(function() {
      var obj, text, wordcount, limited;
      
      obj = $(this);
      obj.after('<span style="font-size: 11px; clear: both; margin-top: 3px; display: block;" id="counter-text">Max. '+options.limit+' words</span>');

      obj.keyup(function() {
          text = obj.val();
          if(text === "") {
            wordcount = 0;
          } else {
            wordcount = $.trim(text).split(" ").length;
        }
          if(wordcount > options.limit) {
              $("#counter-text").html('<span style="color: #DD0000;">0 words left</span>');
          limited = $.trim(text).split(" ", options.limit);
          limited = limited.join(" ");
          $(this).val(limited);
          } else {
              $("#counter-text").html((options.limit - wordcount)+' words left');
          } 
      });
    });
  };
})(jQuery);
</script>

</head>

<body>
  <div class="alert" style="background-color:red; color:#ffffff; text-align:center; font-family:Arial">
<h2>Please do not use refresh or back button during the submission otherwise your content may be lost !!!</h2></div>
<div class="form-style" id="contact_form" style="margin-top:5px; padding-top:5px;">
  <form class="main_form" action="<?php echo $subtype; ?>" method="POST">
    <div class="form-style-heading"><p style="font-size:20px;">Abstract Submission Portal - Biosangam 2016</p>

<div>
      <p style="float:left">Submission for
       <?php echo $type; ?> <br>
       Read <a href="#instructions">instructions</a> carefully before proceeding.
      </p>
      <p style="float:right">Welcome, <?php echo $fname." ".$lname; ?> 
        <br>
        <a style="text-decoration:none;" href="abstract-dashboard">Portal Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a style="text-decoration:none;" href="../dashboard">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a style="text-decoration:none;" href="logout">Logout</a>
      </div>
<br><br><br>
    </div>
    <input type="hidden" name="subtheme" value="<?php echo $subtheme; ?>">
    <input type="hidden" name="abstract_id" value="<?php echo $abstract_id; ?>">
     <label><span>Title :<span class="required">*</span></span>
            <input style="width:100%" placeholder="Max 150 character including spaces. Use Times New Roman font if adding from other source." type="text" name="abstitle" id="abstitle" maxlength="150" required="true" class="input-field"/>
       <!-- Note: while adding title use only Times New Roman font with font size 12. Max 150 character including spaces.-->
        </label>  
    
      <input type="button" name="addauthor"  id="addauthorbtn"  onClick="toggle('mydiv');" value="Add Authors for your abstract (compulsory)*">  
      <script type="text/javascript">
      function toggle(elel)
      {
        var togglel = document.getElementById(elel);
        var togglebtn = document.getElementById('addauthorbtn'); 
        if (togglel){
            togglel.style.display="block";
            togglebtn.style.display="none";

        }
        else{
            togglel.style.display="none";
            togglebtn.style.display="block";
        }

      }
      </script>
      <br>
     
      <div id ="mydiv" style="display:none">
      <div id="contact_results"></div>
    <div id="contact_body">
       
   
  <fieldset>
    <legend id="authorpresent"><h3><b>Author 1</b></h3></legend>
    <label style="display:none;"><span>type :<span class="required">*</span></span>
            <input type="text" name="submissiontype" id="submissiontype" value="<?php echo $subtype;?>" class="input-field"/>
        </label>
        <label><span>Name :<span class="required">*</span></span>
            <input type="text" name="name" id="name"  class="input-field"/>
        </label>
        <label><span>Designation: <span class="required">*</span></span>
            <input type="text" name="designation" id="designation"   class="input-field"/>
        </label>
        <label><span>Department/section/center: <span class="required">*</span></span>
            <input type="text" name="department" id="department"    class="input-field"/>
        </label>
        <label><span>Institute: <span class="required">*</span></span>
            <input type="text" name="institute" id="institute"   class="input-field"/>
        </label>
        <label><span>City: <span class="required">*</span></span>
            <input type="text" name="city" id="city"   class="input-field"/>
        </label>
        <label><span>State:<span class="required">*</span></span>
            <input type="text" name="state" id="state"   class="input-field"/>
        </label>
        <label><span>Country: <span class="required">*</span></span>
            <input type="text" name="country" id="country"  class="input-field"/>
        </label>
         <label><span>ZIP: <span class="required">*</span></span>
            <input type="text" name="zip" id="zip"  class="input-field"/>
        </label>

        <label><span>Presenting Author: </span>
            <input type="checkbox" name="presenting" id="presenting" value="no" onClick="checkpresentauthor() "  class="input-field"/>
        </label><br>
        <label><span>Correspondence Author: </span>
            <input type="checkbox" name="correspondence" id="correspondence" value="no" onClick="checkcorrespondenceauthor()"  class="input-field"/>
        </label><br>

        <label>
            <span>&nbsp;</span><input type="button" id="submit_btn" onclick="insert()"  value="Submit Author" />
        </label>
         </fieldset>


         </div>
    
   
</div>

    <br>
    <label for="field5"><span>Abstract: <span class="required">*</span></span>
            <textarea name="abstract" placeholder="Max 250 words are allowed. Use Times New Roman font if adding from other sources i.e. source should be in Times New Roman to prevent errors. " id="abstract" class="textarea-field" cols="30" rows="12" required="true"></textarea>
        
        </label>
        <script type="text/javascript">
  $("textarea").textareaCounter();
  </script>
        <br>
         <label for="field5"><span>Keywords: <span class="required">*</span></span>
         <p>Press enter or comma to save your keyword after typing.</p>
            <p></p>
            
            <ul id="allowSpacesTags"></ul>
              
       </label>
        
        
  <br><br>
        <label>
            <span>&nbsp;</span><input name="submit" onClick="return confirm('Are you sure about submitting your abstract. you will not be able to make any changes later.')" type="submit" id="finalsubmit" value="Final Submit" />
        </label>
      </form>
      <b id="instructions">Instructions:</b><br>
      1. Submission of abstract will not be completed until you click the <b>final submit</b> button.<br>
      2. Please do not use refresh/back button at any cost. you can use navigation menu under your name if you want.<br>
      3. There can be as many as authors to the abstract. But there will be only one presenting author.<br>   
      4. Abstract once finally submitted cannot be change later. Make sure before submitting. <br>
      5. Navigating in between of submission results in loss of information. we advise you to resubmit abstract from beginning.<br>
      6. In case of connection failure or any other interrupt it is advised to submit the abstract from beginning.<br>
      7. If you are facing any difficulty or issue kindly write to us at <a href="mailto:reg.biosangam@mnnit.ac.in">reg.biosangam@mnnit.ac.in</a>
</div>
<span style="background-color:black; bottom:0px; padding-bottom:0px; margin-botton:0px; color:#ffffff; text-align:center; font-family:Arial">
<h3>Design and Developed by: <a style="text-decoration:none;" target="_blank" href="http://rahulkushwaha.in">Rahul Kushwaha</a></h3></span>
</body>
 <script type="text/javascript">

var designation;
var department;
var institute;
var city;
var state;
var country;
var zip;

var fixed = 0;

var designationInput  = document.getElementById("designation");
var departmentInput   = document.getElementById("department");
var instituteInput = document.getElementById("institute");
var cityInput  = document.getElementById("city");
var stateInput   = document.getElementById("state");
var countryInput = document.getElementById("country");
var zipInput  = document.getElementById("zip");


function insert ( ) {
var presentingInput  = document.getElementById("presenting");
designation = designationInput.value;
department = departmentInput.value;
institute = instituteInput.value;
city = cityInput.value;
state = stateInput.value;
country = countryInput.value;
zip = zipInput.value;

if (presentingInput.checked) {

  fixed = 1;
  
}


}

function checkpresentauthor(){
  var current = document.getElementById("presenting");
if(current.checked){
current.value = "yes"
}
else{
  current.value = "no"
}
  if (fixed == 1) {
    alert("you have already selected a presenting author. you can select it once only")
document.getElementById("presenting").checked = false;
current.value = "no"
  }
}
function checkcorrespondenceauthor(){

   var current = document.getElementById("correspondence");
if(current.checked){
current.value = "yes"
}
else{
  current.value = "no"
}
}
/*function clearAndShow () {
  // Clear our fields
  titleInput.value = "";
  nameInput.value = "";
  ticketInput.value = "";
  
  // Show our output
  messageBox.innerHTML = "";
  
  messageBox.innerHTML += "Titles: " + titles.join(", ") + "<br/>";
  messageBox.innerHTML += "Names: " + names.join(", ") + "<br/>";
  messageBox.innerHTML += "Tickets: " + tickets.join(", ");
  titles.length = 0;
  names.length = 0;
  tickets.length = 0;
}*/




var counter = 1;
var limit = 10;
function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of adding " + counter + " authors");
     }
     else {
            var conf = confirm("do you want to have the same address as last one");
            if (conf) {
          var oldresultdiv = document.getElementById('contact_results');  
          var oldformdiv = document.getElementById('contact_body'); 
          var authorpre = document.getElementById('authorpresent'); 
          oldresultdiv.innerHTML="";
          oldformdiv.style.display="block";
          
           authorpre.innerHTML =  " <h3><b>Author " + (counter + 1) + "</b></h3>";
          document.getElementById("name").value = "";
           document.getElementById("designation").value = designation;
           document.getElementById("department").value = department;
           document.getElementById("institute").value = institute;
           document.getElementById("city").value = city;
           document.getElementById("state").value = state;
           document.getElementById("country").value = country;
           document.getElementById("zip").value = zip;
           
           
   document.getElementById("presenting").checked = false;
   document.getElementById("presenting").value = "";
  document.getElementById("correspondence").checked = false;
document.getElementById("correspondence").value = "";
       }
       else{
        var oldresultdiv = document.getElementById('contact_results');  
          var oldformdiv = document.getElementById('contact_body'); 
          var authorpre = document.getElementById('authorpresent'); 
          oldresultdiv.innerHTML="";
          oldformdiv.style.display="block";
           authorpre.innerHTML =  " <h3><b>Author " + (counter + 1) + "</b></h3>";
           document.getElementById("name").value = "";
           document.getElementById("designation").value = "";
           document.getElementById("department").value = "";
           document.getElementById("institute").value = "";
           document.getElementById("city").value = "";
           document.getElementById("state").value = "";
           document.getElementById("country").value = "";
           document.getElementById("zip").value = "";
            document.getElementById("presenting").checked = false;
             document.getElementById("presenting").value = "";
            document.getElementById("correspondence").checked = false;
            document.getElementById("correspondence").value = "";
           //oldformdiv.reset();
           //$('#contact_body').trigger("reset");

       }

/*
          var newdiv = document.createElement('div');
            newdiv.id = "contact_body";
          var conf = confirm("do you want to have the same address as last one");
          
          if (conf) {
    newdiv.innerHTML =  " <br><fieldset><legend><h3><b>Author " + (counter + 1) + "</b></h3></legend><label><span>Name :<span class='required'>*</span></span><input type='text' name='name' id='name' required='true' class='input-field'/></label><label><span>Designation: <span class='required'>*</span></span><input type='text' name='designation' id='designation' required='true' class='input-field'/></label><label><span>Department/section/center: <span class='required'>*</span></span><input type='text' name='department' id='department' required='true' class='input-field'/></label><label><span>Institute: <span class='required'>*</span></span><input type='text' name='institute' id='institute' required='true' class='input-field'/></label><label><span>City: <span class='required'>*</span></span><input type='text' name='city' id='city' required='true' class='input-field'/></label><label><span>State:<span class='required'>*</span></span><input type='text' name='state' id='state' required='true' class='input-field'/></label><label><span>Country: <span class='required'>*</span></span><input type='text' name='country' id='country' required='true' class='input-field'/></label><label><span>ZIP: <span class='required'>*</span></span><input type='text' name='zip' id='zip' required='true' class='input-field'/></label></label><label><span>Presenting Author: </span><input type='checkbox' name='presenting' id='presenting' value='yes'  class='input-field'/></label><br><label><span>Correspondence Author: </span><input type='checkbox' name='correspondence' id='correspondence' value='yes'  class='input-field'/></label><br><label><span>&nbsp;</span><input type='submit' id='submit_btn' value='Submit Author' /></label></fieldset>";
            
          }
          else{
    newdiv.innerHTML =  " <br><fieldset><legend><h3><b>Author " + (counter + 1) + "</b></h3></legend><label><span>Name :<span class='required'>*</span></span><input type='text' name='name' id='name' required='true' class='input-field'/></label><label><span>Designation: <span class='required'>*</span></span><input type='text' name='designation' id='designation' required='true' class='input-field'/></label><label><span>Department/section/center: <span class='required'>*</span></span><input type='text' name='department' id='department' required='true' class='input-field'/></label><label><span>Institute: <span class='required'>*</span></span><input type='text' name='institute' id='institute' required='true' class='input-field'/></label><label><span>City: <span class='required'>*</span></span><input type='text' name='city' id='city' required='true' class='input-field'/></label><label><span>State:<span class='required'>*</span></span><input type='text' name='state' id='state' required='true' class='input-field'/></label><label><span>Country: <span class='required'>*</span></span><input type='text' name='country' id='country' required='true' class='input-field'/></label><label><span>ZIP: <span class='required'>*</span></span><input type='text' name='zip' id='zip' required='true' class='input-field'/></label></label><label><span>Presenting Author: </span><input type='checkbox' name='presenting' id='presenting' value='yes'  class='input-field'/></label><br><label><span>Correspondence Author: </span><input type='checkbox' name='correspondence' id='correspondence' value='yes'  class='input-field'/></label><br><label><span>&nbsp;</span><input type='submit' id='submit_btn' value='Submit Author' /></label></fieldset>";
          
     }
     document.getElementById(divName).appendChild(newdiv);*/
          counter++;
}}

</script>

</html>
<?php
}
?>