<html>
<head>
  <style type="text/css">
label{
  display: inline-block;
  width: 200px;
}
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<!--<script src="js/scriptajax.js"></script>-->
<script type="text/javascript">


(function($){
  $.fn.textareaCounter = function(options) {
    // setting the defaults
    // $("textarea").textareaCounter({ limit: 100 });
    var defaults = {
      limit: 5
    };  
    var options = $.extend(defaults, options);
 
    // and the plugin begins
    return this.each(function() {
      var obj, text, wordcount, limited;
      
      obj = $(this);
      obj.after('<span style="font-size: 11px; clear: both; margin-top: 3px; display: block;" id="counter-text">Abstract should also be in Times New Roman with font size 12. Max. '+options.limit+' words</span>');

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

<label>Title:</label> <input type="text" maxlength="150" size="100" name ="title" placeholder="enter title here with max length 150 characters including spaces">
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Note: while adding your submission Use only Times New Roman font with font size 12.<br><br>
Author Information:<br><br>

<div id ="mydiv">
  <div id="form">
   
  <fieldset>
    <legend>Author 1</legend>

<label>Name:</label><input id="name" type="text" size="40" name ="" placeholder="enter title here with max le"><br><br>
<label>Designation:</label><input id="designation" type="text" size="40" name ="" placeholder="enter title here with max le"><br><br>
<label>Department/section/center:</label><input id="department" type="text" size="40" name ="" placeholder="enter title here with max le"><br><br>
<label>Institute:</label><input id="institute" type="text" size="40" name ="" placeholder="enter title here with max le"><br><br>
<label>City:</label><input id="city" type="text" size="40" name ="" placeholder="enter title here with max le"><br><br>
<label>State:</label><input id="state" type="text" size="40" name ="" placeholder="enter title here with max le"><br><br>
<label>Country:</label><input id="country" type="text" size="40" name ="" placeholder="enter title here with max le"><br><br>
<label>Zip:</label><input id="zip" type="text" size="40" name ="" placeholder="enter title here with max le"><br><br><br>
<label>Presenting Author:</label><input id="presenting" type="checkbox" value="yes"><br><br>
<label>Correspondence Author:</label><input id="correspondence" type="checkbox" value="yes"><br><br>
<input id="submit" type="button" value="add">

</fieldset>

</div>
</div>
<br><br>
Add another:<input type="button" name="author1"  onClick="addInput('mydiv');" value="add">
<script type="text/javascript">
var counter = 1;
var limit = 10;
function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of adding " + counter + " authors");
     }
     else {
      
            alert("rahul");
          var newdiv = document.createElement('div');
         // newdiv.innerHTML = " <br><fieldset><legend>Author " + (counter + 1) + "</legend><form name='authorform' ><label>Name:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>Designation:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>Department/section/center:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br>";
          var conf = confirm("do you want to have the same address as last one");
          
          if (conf) {
            
          newdiv.innerHTML = " <br><fieldset><legend>Author " + (counter + 1) + "</legend><form name='authorform'  ><label>Name:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>Designation:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>Department/section/center:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>Institute:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>City:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>State:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>Country:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>Zip:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>Presenting Author:</label><input type='checkbox'><br><br><label>Correspondence Author:</label><input type='checkbox'></form></fieldset>";
          }
          else{
          newdiv.innerHTML = " <br><fieldset><legend>Author " + (counter + 1) + "</legend><form name='authorform'  ><label>Name:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>Designation:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>Department/section/center:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>Institute:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>City:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>State:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>Country:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>Zip:</label><input type='text' size='40' name ='title' placeholder='enter title here with max le'><br><br><label>Presenting Author:</label><input type='checkbox'><br><br><label>Correspondence Author:</label><input type='checkbox'></form></fieldset>";
        }
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}
</script>

<br><br>
Abstract:<br><textarea name="abstract" maxlength="250" cols="80" rows="10" placeholder="enter your abstract here max 250 words..."></textarea>
<script type="text/javascript">
  $("textarea").textareaCounter();
  </script>
<!--<input type="submit" value="Submit Abstract">-->


</body>

</html>
