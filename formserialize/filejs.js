$(function(){
	$("#btnsubmit").on('click',function(){
		
		var formdata = $("#frmuser").serialize();
		console.log(formdata);
		
		$.post("action.php",formdata,function(data){
			var val=JSON.parse(data);
			$("#showname").html("Welcome :" + val['fname'] + " " + val['lname']);
			console.log(val);
		});
		
		return false;
	});
});