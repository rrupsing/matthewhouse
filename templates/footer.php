<table>
	<tr>
		<td id="shadowvert" style="background-repeat:repeat-y;background-position:bottom;"></td>
	</tr>
	<tr id="shadowbottomrow"><td id="shadowcornerleft"></td><td id="shadowhoriz"></td><td id="shadowcorner" style="background-repeat:no-repeat;"></td></tr>
	<tr>
		<td id="shadowbottomleft"></td>
		<td>
			<table class="footer" cellspacing="0" cellpadding="0" border="0" style="display:table;">
				<tr>
					<td colspan="2" class="tertiarynav">
					</td>
				</tr>
				<tr style="height:0px;">
					<td colspan="2" id="footertext_footnotes" class="footertext" valign="top">
						<div></div>	
						<div></div>	
					</td>
				</tr>
				<tr>
					<td width="145">
					</td>
					<td align="right">
					</td>
				</tr>
			</table>
		</td>
		<td>&nbsp;</td>
	</tr>
</table>
</div>
</div>
<script type="text/javascript" src="site/ywd_prototype/library/javascript/sitespecific.js"></script>
<link rel="stylesheet" href="site/ywd_prototype/library/javascript/prettyPhoto3-1-5/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="site/ywd_prototype/library/javascript/prettyPhoto3-1-5/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
jQuery(document).ready(function() {
// put all your jQuery goodness in here.
jQuery("a[rel^='prettyPhoto']").prettyPhoto();
});
</script>
<script type="text/javascript">
_ajaxConfig = {'_cfscriptLocation':'/library/ajaxcfc/calendar.cfc', 
'_jsscriptFolder':'/library/ajaxcfc/js',
'debug':true};
</script>
<script src="library/ajaxcfc/js/ajax.js" type="text/javascript"></script>
<script type="text/javascript">
var CalUpdatedContent = '';
function GetCalContent(CalDate,siteid) {
	var calobj = new Object();
	calobj.CalDate = CalDate;
	calobj.siteid = siteid;
	calobj.URLPATH = "?id=42160&abc=1";
	DWREngine.setAsync(false);
	DWREngine._execute(_ajaxConfig._cfscriptLocation, null, 'getcalcont', calobj,calobj,calobj, DoContent);
}
function DoContent(r) {
	document.getElementById('calendar').innerHTML = r.calcontent;
}
function GetCalEvent(EventID) {
	var EventID = EventID;
	DWREngine.setAsync(false);
	DWREngine._execute(_ajaxConfig._cfscriptLocation, null, 'geteventbyid', EventID,EventID, DoEventContent);
}
function DoEventContent(r) {
	$('csstips').innerHTML = r;
}
</script>
<script type="text/javascript" src="library/javascript/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="site/ywd_prototype/library/javascript/scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="site/ywd_prototype/library/javascript/scrollTo/jquery.localscroll.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery.localScroll();
});
</script>
<script type="text/javascript" src="site/ywd_prototype/library/javascript/boxover.js"></script>
<script type="text/javascript" src="site/master/library/javascript/simple-expand.js"></script>
<script type="text/javascript">
$(function () {
	$('.expander').simpleexpand({'defaultTarget': '.ywdexpand'});
});
</script>
<script type="text/javascript" src="site/ywd_trialsite_1564/library/scripts/body-closing-scripts1.js"></script>