/******************************************************************************
 qForm Extension : for Many to Many Containers

 Clayton Partridge
******************************************************************************/

// Removes Selected items from a Select box.
function _removeOptions(field1, field2, sort, type, selectItems, reset){
	var sort = _param(arguments[2], true, "boolean");
	var type = _param(arguments[3].toLowerCase(), "selected");
	if( type != "all" && type != "selected" ) type = "selected";
	var selectItems = _param(arguments[4], true, "boolean");
	var reset = _param(arguments[5], false, "boolean");
	var doAll = (type == "all") ? true : false;

	if( field1.type.substring(0,6) != "select" ) return alert("This method is only available to select boxes. \nThe field \"" + field1.name + "\" is not a select box.");
	if( field2.type.substring(0,6) != "select" ) return alert("This method is only available to select boxes. \nThe field \"" + field2.name + "\" is not a select box.");

	// clear the select box
	if( reset ) field2.length = 0;

	for( var i=0; i < field1.length; i++ ){
		// if the current option is selected, move it
		if( doAll || field1.options[i].selected ){
			//field2.options[field2.length] = new Option(field1.options[i].text, field1.options[i].value, false, selectItems);
			field1.options[i] = null;
			i--; // since you just deleted a option, redo this array position next loop
		}
	}

	// if sorting the fields
	if( sort ) _sortOptions(field2);
	return true;
}

// define Field transferTo(); prototype
function _Field_RemoveFrom(field, sort, type, selectItems, reset){
	// if the current field is disabled or locked, then kill the method
	if( this.isLocked() || this.isDisabled() ) return false; 
	var sort = _param(arguments[1], true, "boolean");
	var type = _param(arguments[2], "selected");
	var selectItems = _param(arguments[3], true, "boolean");
	var reset = _param(arguments[4], false, "boolean");

	_removeOptions(this.obj, this.qForm[field].obj, sort, type, selectItems, reset);
	return true;
}

Field.prototype.RemoveFrom = _Field_RemoveFrom;


// Copy selected items from one select box to another

function _copyOptions(field1, field2, sort, type, selectItems, reset){
	var sort = _param(arguments[2], true, "boolean");
	var type = _param(arguments[3].toLowerCase(), "selected");
	if( type != "all" && type != "selected" ) type = "selected";
	var selectItems = _param(arguments[4], true, "boolean");
	var reset = _param(arguments[5], false, "boolean");
	var doAll = (type == "all") ? true : false;

	if( field1.type.substring(0,6) != "select" ) return alert("This method is only available to select boxes. \nThe field \"" + field1.name + "\" is not a select box.");
	if( field2.type.substring(0,6) != "select" ) return alert("This method is only available to select boxes. \nThe field \"" + field2.name + "\" is not a select box.");

	// clear the select box
	if( reset ) field2.length = 0;

	for( var i=0; i < field1.length; i++ ){
		// if the current option is selected, move it
		if( doAll || field1.options[i].selected ){
			field2.options[field2.length] = new Option(field1.options[i].text, field1.options[i].value, false, selectItems);
			//field1.options[i] = null;
			//i--; // since you just deleted a option, redo this array position next loop
		}
	}

	// if sorting the fields
	if( sort ) _sortOptions(field2);
	return true;
}

// define Field transferTo(); prototype
function _Field_CopyTo(field, sort, type, selectItems, reset){
	// if the current field is disabled or locked, then kill the method
	if( this.isLocked() || this.isDisabled() ) return false; 
	var sort = _param(arguments[1], true, "boolean");
	var type = _param(arguments[2], "selected");
	var selectItems = _param(arguments[3], true, "boolean");
	var reset = _param(arguments[4], false, "boolean");

	_copyOptions(this.obj, this.qForm[field].obj, sort, type, selectItems, reset);
	return true;
}

Field.prototype.CopyTo = _Field_CopyTo;


function __isPositiveInt(){
  // check to make sure the current value is greater than zero
  var FldValue = parseFloat(this.value);
  
  if(FldValue < 0 || isNaN(FldValue) || this.value != FldValue){
    // here's the error message to display
    this.error = "The " + this.description + " field must contain a proper number.";
  }
}

_addValidator("isPositiveInt", __isPositiveInt);

/******************************************************************************
 qForm Extension : for containers, move to a specific position

 Dave MacInnis
******************************************************************************/

function _copyOptionsToArray(obj){ 
	var optArray = new Array(1); 
	var idx = 0;  
	for(idx=0;idx<obj.length;idx++){  
		optArray[idx] = obj[idx]; 
	} 

	return optArray;
}

// define Field transferToOptionsPosition(); prototype
function _transferOptionsPosition(field1, field2, selectItems, prevObj){
	var selectItems = _param(arguments[2], true, "boolean");
	
	for( var i=0; i < field1.length; i++ ){
		// create a new option based on the item selected in list one
		if(field1.options[i].selected ){			
			field2.options.length = 0;
			field2.options[field2.length] = new Option(field1.options[i].text, field1.options[i].value, false, selectItems);
			field1.options[i] = null;
			i--; // since you just deleted a option, redo this array position next loop
		}
	}
	
	// repopulate the destination this with the new item first	
	//if(prevObj.length != 1){
		for(idx=0;idx<prevObj.length;idx++){ 
		//alert(prevObj[idx])
			if(prevObj[idx] != undefined){
				field2.options[field2.length] = new Option(prevObj[idx].text,prevObj[idx].value);
			}
		}	
	//}
	return true;
}

// define Field transferToPosition(); prototype
function _Field_transferToPosition(field,selectItems){
	// if the current field is disabled or locked, then kill the method
	if( this.isLocked() || this.isDisabled() ) return false; 
	var selectItems = _param(arguments[1], true, "boolean");	

	_transferOptionsPosition(this.obj, this.qForm[field].obj, selectItems,_copyOptionsToArray(this.qForm[field].obj),selectItems);
	
	return true;
}
Field.prototype.transferToPosition = _Field_transferToPosition;

