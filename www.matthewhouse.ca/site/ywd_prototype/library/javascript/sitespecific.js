function launchwin(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);

  if (window == null || window.closed)
	{
	newwindow = window.open(theURL,winName,features);
		if (window.opener == null) // set the opener property manually for Nav 2.0.
		{				
			//window.opener = windowparent;
		}
	window.opener.name = windowparent; // give our parent window a name so we can target it from newwindow
	}	
 }

	 
function secureWindow(theURL, width, height) {
   windowprops = "width=" + width + ",height=" + height;
   if (document.all||document.layers||document.getElementById)
   {
   	var top = ((screen.height-50)-height)/2;
  	var left = ((screen.width-10 )-width)/2;
  	 windowprops += ",top=" + top + ",left=" + left;
   }
   	windowprops += "location=0,toolbar=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=0";
  	 //alert(theURL);
	 secure = window.open(theURL, 'secure', windowprops);
	secure.focus();
  }	 
	 
function defaultMessageWindow(theURL, width, height, scrollbars) {
   windowprops = "width=" + width + ",height=" + height+",scrollbars="+scrollbars;
   messageWindow = window.open(theURL, 'messageWindow', windowprops);
   messageWindow.focus();
 }		 
	 
	 
function NewPrintWindow(FileToPrint) {
PrintWindow = window.open(FileToPrint,"","height=600,width=650,toolbar=yes,statusbar=no,menubar=no,titlebar=yes,location=no,scrollbars=yes");
			PrintWindow.focus();
}

/* shows/hides a layer */
function toggle(obj) {
	var el = document.getElementById(obj);
	if (el.style.display != 'none'  && el.style.display != '' ) {
		el.style.display = 'none';
	}
	else {
		el.style.display = 'block';
	}
}

/* positions a layer according to the mouse position */
var cX = 0; var cY = 0; var rX = 0; var rY = 0;
function UpdateCursorPosition(e){ cX = e.pageX; cY = e.pageY;}
function UpdateCursorPositionDocAll(e){ cX = event.clientX; cY = event.clientY;}
if(document.all) { document.onmousemove = UpdateCursorPositionDocAll; }
else { document.onmousemove = UpdateCursorPosition; }
function assignposition(d,ww,hh) {
if(self.pageYOffset) {
	rX = self.pageXOffset;
	rY = self.pageYOffset;
	}
else if(document.documentElement && document.documentElement.scrollTop) {
	rX = document.documentElement.scrollLeft;
	rY = document.documentElement.scrollTop;
	}
else if(document.body) {
	rX = document.body.scrollLeft;
	rY = document.body.scrollTop;
	}
if(document.all) {
	cX += rX; 
	cY += rY;
	}
/*d.style.left = (cX+10) + "px";
d.style.top = (cY+10) + "px";*/
/*d.style.left = (cX-300) + "px";*/
d.style.left = (document.documentElement.clientWidth - ww) / 2 + "px";
/*d.style.top = (cY-(hh/2)) + 30 + "px";*/
d.style.top = (cY-(hh/2)) - 60 + "px";
document.getElementById('ywdfloatclosebutton').style.left = ((document.documentElement.clientWidth - ww) / 2) + ww - 16 + "px";
/*document.getElementById('ywdfloatclosebutton').style.top = (cY-(hh/2)) + 10 + "px";*/
document.getElementById('ywdfloatclosebutton').style.top = (cY-(hh/2)) -80 + "px";
}

/* displays a floating iframe. Called from the display markup */
function ywdfloat(theURL,theWidth,theHeight) {
	if(theURL.length < 1) { return; }
	document.getElementById('ywdfloatingframe').src=theURL;
	document.getElementById('ywdfloatingframe').width=theWidth;
	document.getElementById('ywdfloatingframe').height=theHeight;
	var dd = document.getElementById('ywdfloat');
	assignposition(dd,theWidth,theHeight);
	toggle('ywdfloatscreen');
}
function ywdfloatclose() {
	document.getElementById('ywdfloatingframe').src='';
	toggle('ywdfloatscreen');
}

/* shows/hides a layer */
function toggleBox(szDivID, iState) // 1 visible, 0 hidden
{
    if(document.layers)	   //NN4+
    {
       document.layers[szDivID].visibility = iState ? "show" : "hide";
    }
    else if(document.getElementById)	  //gecko(NN6) + IE 5+
    {
        var obj = document.getElementById(szDivID);
        obj.style.visibility = iState ? "visible" : "hidden";
    }
    else if(document.all)	// IE 4
    {
        document.all[szDivID].style.visibility = iState ? "visible" : "hidden";
    }
}

function switchBoxOnOff(szDivID)
{
    if(document.layers)	   //NN4+
    {
       document.layers[szDivID].visibility = iState ? "show" : "hide";
    }
    else if(document.getElementById)	  //gecko(NN6) + IE 5+
    {
        var obj = document.getElementById(szDivID);
		if (obj.style.visibility == "visible") {
         obj.style.visibility = "hidden";
		}
		else {
          obj.style.visibility = "visible";
		}
   }
    else if(document.all)	// IE 4
    {
        document.all[szDivID].style.visibility = iState ? "visible" : "hidden";
    }
}

function openaprintwindow(theURL) {
	var width = 850;
	var height = 500;
	
	windowprops = "width=" + width + ",height=" + height;
	if (document.all||document.layers||document.getElementById)
	{
		var top = ((screen.height-50)-height)/2;
		var left = ((screen.width-10)-width)/2;
		windowprops += ",top=" + top + ",left=" + left;
	}
	windowprops += "toolbar=0,location=0,directories=0,status=0,menubar=1,scrollbars=1,resizable=1";
	window.open(theURL, 'printableWindow', windowprops);
}

function openapopupwindow(theURL,theName,theWidth,theHeight) {
	
	windowprops = "width=" + theWidth + ",height=" + theHeight;
	if (document.all||document.layers||document.getElementById)
	{
		var top = ((screen.height-50)-theHeight)/2;
		var left = ((screen.width-10)-theWidth)/2;
		windowprops += ",top=" + top + ",left=" + left;
	}
	windowprops += "toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1";
	window.open(theURL, theName, windowprops);
}


function trimstring(sInString) {
  sInString = sInString.replace( /^\s+/g, "" );// strip leading
  return sInString.replace( /\s+$/g, "" );// strip trailing
}

/* used by DHTML dropdown menus */
sfHover = function() {
	if (document.getElementById("nav") !== null) {
		var sfEls = document.getElementById("nav").getElementsByTagName("LI");
		for (var i=0; i<sfEls.length; i++) {
			sfEls[i].onmouseover=function() {
				this.className+=" sfhover";
			}
			sfEls[i].onmouseout=function() {
				this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
			}
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);



/* used by Facebook and other sharing/social networking links */
function openShareWindow(site){
	var pageURL = escape(window.location.href);
	var articleTitle = 'null';
	var articleLeadin = 'null';
	switch (site) {
			case "Digg":
			postPopUp('http://digg.com/remote-submit?phase=2&url=' + pageURL + '&title=' + articleTitle + '&bodytext=' + articleLeadin +'', 'digg', 'toolbar=0,status=0,height=450,width=650,scrollbars=yes,resizable=yes');
			break;	
			case "Delicious":
			postPopUp('http://del.icio.us/post?v=4&partner=nyt&noui&jump=close&url=' + pageURL + '&title='+ articleTitle+ '&bodytext='+ articleLeadin+'', 'delicous', 'toolbar=0,status=0,height=450,width=650,scrollbars=yes,resizable=yes');
			break;
			case "Reddit":
			postPopUp('http://reddit.com/submit/?url=' + pageURL + '&title='+ articleTitle+ '', 'reddit', 'toolbar=0,status=0,height=450,width=650,scrollbars=yes,resizable=yes');
			break;
			case "Facebook":
			postPopUp('http://www.facebook.com/sharer.php?u=' + pageURL + '&t=' + articleTitle, 'facebook', 'toolbar=0,status=0,height=436,width=646,scrollbars=yes,resizable=yes');
			break;
			case "Linkedin":
			postPopUp('http://www.linkedin.com/shareArticle?mini=true&url=' + pageURL, 'linkedin', 'toolbar=0,status=0,height=650,width=646,scrollbars=yes,resizable=yes');
			break;
			case "Newsvine":
			postPopUp('http://www.newsvine.com/_wine/save?ver=2&popoff=1&u=' + pageURL + '', 'Newsvine', 'toolbar=0,status=0,height=436,width=646,scrollbars=yes,resizable=yes');
			break;
			case "Twitter":
			postPopUp('http://twitter.com/home?status=' + pageURL + '', 'Twitter', 'toolbar=0,status=0,height=436,width=646,scrollbars=yes,resizable=yes');
			break;
	}
}
/* used by Facebook  so that title displays page name or blog entries name*/
function openShareWindowFacebook(pageName){
	var pageURL = escape(window.location.href);
	var articleTitle = (pageName);
	var articleLeadin = 'null';
	 {
			
			postPopUp('http://www.facebook.com/sharer.php?u=' + pageURL + '&t=' + articleTitle, 'facebook', 'toolbar=0,status=0,height=436,width=646,scrollbars=yes,resizable=yes');
			
	}
}
/* used by Facebook so that title displays page name or blog entries name and shares particular post not entire page*/
function openShareWindowFacebookBlog(pageName,entryURL){
	var pageURL = (entryURL);
	var articleTitle = (pageName);
	var articleLeadin = 'null';
	
	 {
			
			postPopUp('http://www.facebook.com/sharer.php?u=' + encodeURIComponent(pageURL) + '&t=' + articleTitle, 'facebook', 'toolbar=0,status=0,height=436,width=646,scrollbars=yes,resizable=yes');
			
	}
}
/* used by twitter so that title displays page name or blog entries name and shares particular post not entire page*/
function openShareWindowTwitterBlog(pageName,entryURL){
	var pageURL = (entryURL);
	var articleTitle = (pageName);
	var articleLeadin = 'null';
	
	 {
			
			postPopUp('http://twitter.com/share?url=' + encodeURIComponent(pageURL) + '&text=' + articleTitle + '', 'Twitter', 'toolbar=0,status=0,height=436,width=646,scrollbars=yes,resizable=yes');
			
	}
}
/* used by LinkedIn so that title displays page name or blog entries name and shares particular post not entire page*/
function openShareWindowLinkedInBlog(pageName,entryURL){
	var pageURL = (entryURL);
	var articleTitle = (pageName);
	var articleLeadin = 'null';
	
	 {
			
			postPopUp('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(pageURL), 'linkedin', 'toolbar=0,status=0,height=650,width=646,scrollbars=yes,resizable=yes');
		
	}
}
/* used by Digg so that title displays page name or blog entries name and shares particular post not entire page*/
function openShareWindowDiggBlog(pageName,entryURL){
	var pageURL = (entryURL);
	var articleTitle = (pageName);
	var articleLeadin = 'null';
	
	 {
			
			postPopUp('http://digg.com/remote-submit?phase=2&url=' + encodeURIComponent(pageURL) + '&title=' + articleTitle + '&bodytext=' + articleLeadin +'', 'digg', 'toolbar=0,status=0,height=450,width=650,scrollbars=yes,resizable=yes');
			
	}
}
function postPopUp(url, name, params) {
	var win = window.open(url, name,params);
}

/*
* QTObject embed
* http://blog.deconcept.com/2005/01/26/web-standards-compliant-javascript-quicktime-detect-and-embed/
*
* by Geoff Stearns (geoff@deconcept.com, http://www.deconcept.com/)
*
* v1.0.2 - 02-16-2005
* Embeds a quicktime movie to the page, includes plugin detection
* Usage:
*	myQTObject = new QTObject("path/to/mov.mov", "movid", "width", "height");
*	myQTObject.altTxt = "Upgrade your Quicktime Player!";    // optional
*  myQTObject.addParam("controller", "false");              // optional
*	myQTObject.write();
*/



QTObject = function(mov, id, w, h) {

	this.mov = mov;

	this.id = id;

	this.width = w;

	this.height = h;

	this.redirect = "";

	this.sq = document.location.search.split("?")[1] || "";

	this.altTxt = "This content requires the QuickTime Plugin. <a href='http://www.apple.com/quicktime/download/'>Download QuickTime Player</a>.";

	this.bypassTxt = "<p>Already have QuickTime Player? <a href='?detectqt=false&"+ this.sq +"'>Click here.</a></p>";

	this.params = new Object();

	this.doDetect = getQueryParamValue('detectqt');

}



QTObject.prototype.addParam = function(name, value) {

	this.params[name] = value;

}



QTObject.prototype.getParams = function() {

    return this.params;

}



QTObject.prototype.getParam = function(name) {

    return this.params[name];

}



QTObject.prototype.getParamTags = function() {

    var paramTags = "";

    for (var param in this.getParams()) {

        paramTags += '<param name="' + param + '" value="' + this.getParam(param) + '" />';

    }

    if (paramTags == "") {

        paramTags = null;

    }

    return paramTags;

}



QTObject.prototype.getHTML = function() {

    var qtHTML = "";

	if (navigator.plugins && navigator.plugins.length) { // not ie

        qtHTML += '<embed type="video/quicktime" src="' + this.mov + '" width="' + this.width + '" height="' + this.height + '" id="' + this.id + '"';

        for (var param in this.getParams()) {

            qtHTML += ' ' + param + '="' + this.getParam(param) + '"';

        }

        qtHTML += '></embed>';

    }

    else { // pc ie

        qtHTML += '<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" width="' + this.width + '" height="' + this.height + '" id="' + this.id + '">';

        this.addParam("src", this.mov);

        if (this.getParamTags() != null) {

            qtHTML += this.getParamTags();

        }

        qtHTML += '</object>';

    }

    return qtHTML;

}





QTObject.prototype.getVariablePairs = function() {

    var variablePairs = new Array();

    for (var name in this.getVariables()) {

        variablePairs.push(name + "=" + escape(this.getVariable(name)));

    }

    if (variablePairs.length > 0) {

        return variablePairs.join("&");

    }

    else {

        return null;

    }

}



QTObject.prototype.write = function(elementId) {

	if(isQTInstalled() || this.doDetect=='false') {

		if (elementId) {

			document.getElementById(elementId).innerHTML = this.getHTML();

		} else {

			document.write(this.getHTML());

		}

	} else {

		if (this.redirect != "") {

			document.location.replace(this.redirect);

		} else {

			if (elementId) {

				document.getElementById(elementId).innerHTML = this.altTxt +""+ this.bypassTxt;

			} else {

				document.write(this.altTxt +""+ this.bypassTxt);

			}

		}

	}		

}



function isQTInstalled() {

	var qtInstalled = false;

	qtObj = false;

	if (navigator.plugins && navigator.plugins.length) {

		for (var i=0; i < navigator.plugins.length; i++ ) {

         var plugin = navigator.plugins[i];

         if (plugin.name.indexOf("QuickTime") > -1) {

			qtInstalled = true;

         }

      }

	} else {

		execScript('on error resume next: qtObj = IsObject(CreateObject("QuickTimeCheckObject.QuickTimeCheck.1"))','VBScript');

		qtInstalled = qtObj;

	}

	return qtInstalled;

}



/* get value of querystring param */

function getQueryParamValue(param) {

	var q = document.location.search;

	var detectIndex = q.indexOf(param);

	var endIndex = (q.indexOf("&", detectIndex) != -1) ? q.indexOf("&", detectIndex) : q.length;

	if(q.length > 1 && detectIndex != -1) {

		return q.substring(q.indexOf("=", detectIndex)+1, endIndex);

	} else {

		return "";

	}

}

/* calendar functions */

function showCalendar()
{
	toggleBox("calendar", true);
}

function hideCalendar()
{
	toggleBox("calendar", false);
}


