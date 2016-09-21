$(function(){
	//Using Jquery AJAX
	//activate by click event on button
	$("#btngenerate").on('click',function(){
		var num=$("#num").val();
		//call the PHP script
		$.post('action.php',{'num':num},function(data){
			$("#tblmultiply").html(data);
			
		});
		
	})


	function generatetable(){
		var num=$("#num").val();
		var str="";
		
		for(i=1;i<=num;i++){
			str +="<tr>";
			for(j=1;j<=num;j++){
				str +="<td>" +	j*i + "</td>";
			}
			
			str+="</tr>";
		}
		
		$("#tblmultiply").html(str);
	}	
});