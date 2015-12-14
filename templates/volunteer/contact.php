<?php $this->layout('inner_template', ['title' => 'Matthew House | Refugee Reception Services Toronto', 'page'=>'volunteer', 'subpage' => 'contact']) ?>
<script type="text/javascript" src="library/javascript/qforms/c_qforms.js" libpath="library/javascript/"></script>
<script type="text/JavaScript">
qFormAPI.setLibraryPath("library/javascript/");
qFormAPI.include("field");
qFormAPI.include("validation");
qFormAPI.include("functions");
qFormAPI.include("functions_js12");
qFormAPI.include("cookies");
</script>
<script type="text/javascript" src="library/javascript/cdkpQformsAlterations/container-ext.js"></script>
<script language="JavaScript1.1" type="text/javascript">
<!--
var objCCForm1 = "";
var objCCForm2 = "";
function completeform2()
{
try {
}
catch (e)
{
window.alert(e);
}
}
function ONLOADDocumentFunction ()
{
////// start
try {
objCCForm2 = new qForm("ccform2");
objCCForm2.name.description = "NAME";
objCCForm2.name.required = true;
objCCForm2.last_name.description = "LAST_NAME";
objCCForm2.last_name.required = true;
objCCForm2.group_name.description = "GROUP_NAME";
objCCForm2.email.description = "EMAIL";
objCCForm2.email.required = true;
//objCCForm2.email.validate = true;
objCCForm2.email.validateEmail("OOPS!");
objCCForm2.phone.description = "PHONE";
objCCForm2.phone.required = true;
//objCCForm2.phone.validate = true;
objCCForm2.phone.validatePhoneNumber(10,"The phone number must contain 10 numbers.");
objCCForm2.volunteer.description = "VOLUNTEER";
objCCForm2.volunteer.required = true;
objCCForm2.interests_question.description = "INTERESTS_QUESTION";
objCCForm2.orientation_date.description = "ORIENTATION_DATE";
objCCForm2.orientation_date.required = true;
objCCForm2.where_hear.description = "WHERE_HEAR";
objCCForm2.where_hear.required = true;
}
catch (e)
{
//alert('Qforms attributes error:');
//window.alert(e);
}
objCCForm2.onSubmit = completeform2;
var els = document.ccform2.elements; 
for(i=0; i<els.length; i++){ 
if(els[i].type != "hidden" ){
try {
break;
}
catch (e)
{
//window.alert(e);
}
}
}
//////// end
}
//-->
</script>


<div id="content">
<div class="maincolbox" style='clear:both;' controller="1">
<div class="maincolcblock ywdblock_stacked">
<div class="wp"><h5><span style="color: rgb(144, 39, 142); ">&nbsp;VOLUNTEER CONTACT FORM</span></h5></div><div style="margin:0px;padding:0px;height:0px;clear:both;"></div>	
</div>
</div>
<div class="maincolbox" style='clear:both;' controller="1">
<div class="maincolcblock ywdblock_stacked">
<div class="nwp">
<style type="text/css">
.noshow {
display:none;
}
</style>
<div class="formarea">
<table class="formtable" cellspacing="3" cellpadding="0">
<form id="ccform2" name="ccform2" action="page.php?p=volunteer&s=contact&form_submitted=1" method="post" enctype="multipart/form-data">
<input name="ID" type="hidden" value="44853"><input name="pagepath" type="hidden" value="Volunteer/Volunteer_Form">
<input type="hidden" name="ProcessClientForm" value="true">
<input type="hidden" name="ClientFormID" value="1413">
<tr >
<td valign="top" class="displayFieldLabel">
<span class="displayFieldLabelText">First Name: <span class="requiredField">*</span></span><td valign="top" class="displayFieldContents"><input class="displayFieldInput" name="name" type="text" value="" size="30" maxlength="30" />
</td>
</tr>
<tr class="formAltRow">
<td valign="top" class="displayFieldLabel">
<span class="displayFieldLabelText">Last Name: <span class="requiredField">*</span></span><td valign="top" class="displayFieldContents"><input class="displayFieldInput" name="last_name" type="text" value="" size="30" maxlength="30" />
</td>
</tr>
<tr >
<td valign="top" class="displayFieldLabel">
<span class="displayFieldLabelText">Group Name (if applicable): <td valign="top" class="displayFieldContents"><input class="displayFieldInput" name="group_name" type="text" value="" size="30" maxlength="30" />
</td>
</tr>
<tr class="formAltRow">
<td valign="top" class="displayFieldLabel">
<span class="displayFieldLabelText">Email: <span class="requiredField">*</span></span><td valign="top" class="displayFieldContents"><input class="displayFieldInput" name="email" type="text" value="" size="30" maxlength="30" />
</td>
</tr>
<tr >
<td valign="top" class="displayFieldLabel">
<span class="displayFieldLabelText">Phone: <span class="requiredField">*</span></span><td valign="top" class="displayFieldContents"><input class="displayFieldInput" name="phone" type="text" value="" size="30" maxlength="30" />
</td>
</tr>
<tr class="formAltRow">
<td valign="top" class="displayFieldLabel"><span class="displayFieldLabelText">Volunteer Activities:&nbsp;<span class="requiredField">*&nbsp;</span></span></td><td valign="top" class="displayFieldContents">
<input name="volunteer" type="checkbox" value="Meal Preparation"><span class="displayFieldInputText">Meal Preparation</span><br>
<input name="volunteer" type="checkbox" value="House Cleaning"><span class="displayFieldInputText">House Cleaning</span><br>
<input name="volunteer" type="checkbox" value="Grocery Shopping"><span class="displayFieldInputText">Grocery Shopping</span><br>
<input name="volunteer" type="checkbox" value="Data base and general admin assistance"><span class="displayFieldInputText">Data base and general admin assistance</span><br>
<input name="volunteer" type="checkbox" value="Helping with resident apartment searches"><span class="displayFieldInputText">Resident Apartment Searches</span><br>
<input name="volunteer" type="checkbox" value="Organizing Household Donations (in garage)"><span class="displayFieldInputText">Organizing Household Donations (in garage)</span><br>
<input name="volunteer" type="checkbox" value="General House Maintenance ( Handy person)"><span class="displayFieldInputText">General House Maintenance (handy person)</span><br>
<input name="volunteer" type="checkbox" value="Newsletter: writing stories helping with mailing"><span class="displayFieldInputText">Newsletter: writing stories, helping with mailing</span><br>
<input name="volunteer" type="checkbox" value="Moving furniture (and residents)"><span class="displayFieldInputText">Moving furniture ( and residents)</span><br>
<input name="volunteer" type="checkbox" value="Fundraising and Special Events Assistance"><span class="displayFieldInputText">Fundraising assistance</span><br>
<input name="volunteer" type="checkbox" value="Translation"><span class="displayFieldInputText">Translation</span><br>
</select>
</td>
</tr>
<tr >
<td valign="top" class="displayFieldLabel"><span class="displayFieldLabelText">What areas apart from the above are of interest to you?:&nbsp;</td><td valign="top" class="displayFieldContents"><textarea name="interests_question" cols="60" rows="5" placeholder=""></textarea>
</td>
</tr>
<tr class="formAltRow">	
<td valign="top" class="displayFieldLabel"><span class="displayFieldLabelText">Which orientation session can you attend?:&nbsp;<span class="requiredField">*</span></span></td><td valign="top" class="displayFieldContents"><textarea name="orientation_date" cols="60" rows="2" placeholder=""></textarea>
</td>
</tr>
<tr >
<td valign="top" class="displayFieldLabel"><span class="displayFieldLabelText">How did you hear about us?:&nbsp;<span class="requiredField">*</span></span></td><td valign="top" class="displayFieldContents"><textarea name="where_hear" cols="60" rows="5" placeholder=""></textarea>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<input type="hidden" name="captchaHash" value="FC032F00-BE31-34BB-959BD82B60EA4267" />
<tr>
<td colspan="2">
Please enter the text that you see in the image below:
<input type="text" name="captchaText" size="10" />
</td>
</tr>
<tr>
<td colspan="2">
<img src="library/captcha/showCaptchaf2da.cfm?hashReference=FC032F00-BE31-34BB-959BD82B60EA4267" id="captchaImage" name= "captchaImage" style="width:px";/>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="2" align="center" class="formtablesubmit">
<input name="submit" class="button_submit" type="submit" value="Submit"> 
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
</form>
</table>
</div>
<div style="margin:0px;padding:0px;height:0px;clear:both;"></div>
<!-- Google Search Result Snippet Ends -->
</div>	
</div>
</div>
</div>
</td>
<td valign="top" class="rightcolsub">
<div id="contentrightcol">
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
<td id="shadowvert" style="background-repeat:repeat-y;"></td>
</tr>
