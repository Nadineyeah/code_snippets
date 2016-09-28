$(function(){
	$("#btnsubmit").on('click',function(){
		
		var formdata = $("#frmuser").serialize();
		console.log(formdata);
		
		$.post("action.php",formdata,function(data){
		console.log(data);
			var val=JSON.parse(data);
			console.log(val);
			$("#showname").html(
			"Welcome :" + val["student"]["fname"] + " " + 
			val["student"]["lname"] + " to subject " + 
			val["student"]['subj'] + " with instructor " +  
			val["instructor"]["fname"] + " " + 
			val["instructor"]["lname"]);
			
		});
		
		return false;
	});
});
