<?php $this->layout('inner_template', ['title' => 'Matthew House | Refugee Reception Services Toronto', 'page'=>'volunteer', 'subpage' => 'contact']) ?>

<div id="content">
<div class="maincolbox" style='clear:both;' controller="1">
<div class="maincolcblock ywdblock_coords">
</div>
</div>
<div class="maincolbox" style='clear:both;' controller="1">
<div class="maincolcblock ywdblock_stacked">
<div class="wp"><h5><span style="color: rgb(0, 121, 193);">VOLUNTEER CONTACT FORM</span></h5>


<script src="library/javascript/parsley.js"></script>
<link href="site/ywd_prototype/library/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="site/ywd_prototype/library/css/parsley.css" rel="stylesheet" type="text/css" />
<script src='https://www.google.com/recaptcha/api.js'></script>

<script type="text/javascript">
  $( document ).ready(function() {
    setTimeout(function() {
      $("#g-recaptcha-response").attr('data-parsley-group','block1');
      $("#g-recaptcha-response").attr('data-parsley-required','true');
      $("#g-recaptcha-response").attr('data-parsley-remote-message','Wrong Captcha');
      $("#g-recaptcha-response").attr('data-parsley-remote','util/recaptcha.php');      
        }, 2000);
  });

</script>

<style type="text/css">
.noshow {
display:none;
}

h5 {
    font-size: 60px;
    font-family: leaguegothicRegular,"Arial Narrow", droidsansRegular, Arial, Helvetica, sans-serif;
}

.contentmaincolsub {
  padding-top: 0px;
}

</style>

<form id="ccform2" name="ccform2" data-parsley-validate="">
<table>
  <tr>
    <td>
      <div class="bs-callout bs-callout-warning hidden">
        <h4>Form Submission Error!</h4>
        <p>Please check all the fields again</p>
      </div>

      <div class="bs-callout bs-callout-info hidden">
        <h4>Yay!</h4>
        <p>Everything seems to be ok :)</p>
      </div>

      <!--<form id="ccform2" name="ccform2" action="page.php?p=volunteer&s=contact&form_submitted=1" method="post" enctype="multipart/form-data">-->
      <input name="ID" type="hidden" value="44853">
      <input name="pagepath" type="hidden" value="Volunteer/Volunteer_Form">
      <input type="hidden" name="ProcessClientForm" value="true">
      <input type="hidden" name="ClientFormID" value="1413">
    </td>
  </tr>
<tr >
<td valign="top" class="displayFieldLabel">
<span class="displayFieldLabelText">First Name: <span class="requiredField">*</span></span>
  <td valign="top" class="displayFieldContents">
  <input class="displayFieldInput" data-parsley-minlength="2" required="" name="First Name" type="text" value="" size="30" maxlength="30" />
  </td>
</tr>
<tr class="formAltRow">
<td valign="top" class="displayFieldLabel">
<span class="displayFieldLabelText">Last Name: <span class="requiredField">*</span></span>
<td valign="top" class="displayFieldContents">
  <input class="displayFieldInput" name="Last Name" type="text" value="" size="30" maxlength="30" required="" data-parsley-minlength="2" />
</td>
</tr>
<tr >
<td valign="top" class="displayFieldLabel">
<span class="displayFieldLabelText">Group Name (if applicable): <td valign="top" class="displayFieldContents">
  <input class="displayFieldInput" name="Group Name" type="text" value="" size="30" maxlength="30" />
</td>
</tr>
<tr class="formAltRow">
<td valign="top" class="displayFieldLabel">
<span class="displayFieldLabelText">Email: <span class="requiredField">*</span></span>
<td valign="top" class="displayFieldContents">
  <input class="displayFieldInput" name="Email" type="email" value="" size="30" maxlength="30" data-parsley-trigger="change" required=""  />
</td>
</tr>
<tr >
<td valign="top" class="displayFieldLabel">
<span class="displayFieldLabelText">Phone: <span class="requiredField">*</span></span>
<td valign="top" class="displayFieldContents">
  <input class="displayFieldInput" name="Phone" type="text" value="" size="30" maxlength="30" required="" />
</td>
</tr>
<tr class="formAltRow">
<td valign="top" class="displayFieldLabel"><span class="displayFieldLabelText">Volunteer Activities:&nbsp;<span class="requiredField">*&nbsp;</span></span></td><td valign="top" class="displayFieldContents">
<input name="volunteer" type="checkbox" value="Meal Preparation"><span class="displayFieldInputText" data-parsley-mincheck="1">Meal Preparation</span><br>
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
<td valign="top" class="displayFieldLabel">
  <span class="displayFieldLabelText">What areas apart from the above are of interest to you?:&nbsp;</td>
    <td valign="top" class="displayFieldContents">
      <textarea name="Interests" cols="60" rows="5" placeholder=""></textarea>
</td>
</tr>
<tr class="formAltRow"> 
<td valign="top" class="displayFieldLabel">
  <span class="displayFieldLabelText">Which orientation session can you attend?:&nbsp;<span class="requiredField">*</span>
</span></td>
<td valign="top" class="displayFieldContents">
  <textarea name="Orientation Date" cols="60" rows="2" placeholder="" required=""></textarea>
</td>
</tr>
<tr >
<td valign="top" class="displayFieldLabel">
  <span class="displayFieldLabelText">How did you hear about us?:&nbsp;<span class="requiredField">*</span></span></td>
  <td valign="top" class="displayFieldContents">
    <textarea name="Where did you hear about us" cols="60" rows="5" placeholder="" required=""></textarea>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<!--<input type="hidden" name="captchaHash" value="FC032F00-BE31-34BB-959BD82B60EA4267" />-->
<tr>
<td colspan="2">
<!--Please enter the text that you see in the image below:
<input type="text" name="captchaText" size="10" />-->
</td>
</tr>
<tr>
<td colspan="2">
<!--<img src="library/captcha/showCaptchaf2da.cfm?hashReference=FC032F00-BE31-34BB-959BD82B60EA4267" id="captchaImage" name= "captchaImage" style="width:px";/>-->
<div class="g-recaptcha" data-sitekey="6LczBRQTAAAAAGCMPtyTeZ3kJ-QOXUrga2omuvbj"></div>
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
</table>
</form>

<script type="text/javascript">
$(function () {
  $('#ccform2').parsley().on('field:validated', function() {
    //console.log("error " + $('.parsley-error').length)
    var ok = $('.parsley-error').length === 0;
    //$('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {

      $subject = "Volunteer submission";
      $body = "Submission details:<br><br>";
      $from = "";
      $email = "";
      $checkbox_choices = "Volunteer Interests: <br>";
      $('#ccform2 input, select, textarea').each(
          function(index){  
              var input = $(this);

              var type = input.attr('type');
              var name = input.attr('name');
              if (type != "hidden" && type != "submit" && name.indexOf("recaptcha") == -1)
              {

                if (type == "checkbox")
                {
                  if (input.prop("checked") == true)
                  {
                    $checkbox_choices += input.val() + "<br>";
                  }
                }
                else
                {
                  $body += name + ': ' + input.val() + "<br><br>";

                  if (name == "Email")
                  {
                    $email = input.val();
                  }
                  else if (name == "First Name")
                  {
                    $from = input.val();
                  }
                }
              }
          }
      );

      $body += $checkbox_choices;

      // submit this form via js

      $("#submitButton").hide();

      // submit form
      $.ajax({
        type: "POST",
        url: "https://mandrillapp.com/api/1.0/messages/send.json",
        data: {
          'key': "SuHidAwFRPjJHiJ2YvW6Xg",
          'message': {
            'from_email': "volunteer@matthewhouse.ca",
            "from_name": $from,
            'to': [
                {
                  'email': "volunteer@matthewhouse.ca",
                  'name': "Volunteer",
                  'type': 'to',
                }
              ],
            'autotext': 'true',
            "headers": {
              "Reply-To": $email
            },
            'bcc_address': 'raul@matthewhouse.ca',
            'subject': $subject,
            'html': $body
          }
        },
          success: function(data) {
            console.log(data);
            window.location = "page.php?p=volunteer&s=volunteer";
          },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                }  
              });     

      return true;
  });
});
</script>



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

