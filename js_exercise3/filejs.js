//fils.js
var ITEMS=[];
function additem(){
 var add=$("#additem").val();
 
 ITEMS.push(add);
 
 console.log(ITEMS);
 
 var str="";
 for(i in ITEMS){
	str +="<option value='"+i+"'>"+ ITEMS[i] +"</options>";
 }
 
 $("#selitem").html(str);
}

function removeitem(){
 //get the value from the dropdown
 var itm=$("#selitem").val();
 
 //remove item for index itm
 ITEMS.splice(itm,1);
 
 var str="";
 for(i in ITEMS){
	str +="<option value='"+i+"'>"+ ITEMS[i] +"</options>";
 }
 //replace the options in the dropdown
 $("#selitem").html(str);
}
