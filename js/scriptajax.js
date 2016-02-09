$(document).ready(function(){
$("#submit").click(function(){

var name = $("#name").val();
var designation = $("#designation").val();
var department = $("#department").val();
var institute = $("#institute").val();
var city = $("#city").val();
var state = $("#state").val();
var country = $("#country").val();
var zip = $("#zip").val();
var presenting = $("#presenting").val();
var correspondence = $("#correspondence").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name='+ name + '&designation='+ designation + '&department='+ department + '&institute='+ institute + '&city='+ city + '&state='+ state + '&country='+ country + '&zip='+ zip + '&presenting='+ presenting + '&correspondence='+ correspondence;
if(name==''||designation==''||department==''||institute==''city==''||state==''||country==''||zip=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxsubmit.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});