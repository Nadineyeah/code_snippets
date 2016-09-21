$(function(){
	//Using Jquery AJAX
	//activate by click event on button
	$("#btngenerate").on('click',function(){
		var num=$("#num").val();
		//call the PHP script
		$.post('action.php',{'num':num},function(data){
			var str="";
			var val = JSON.parse(data);//Parse JSON data from PHP
			//create table
			for(i in val){
				str +="<tr>";
				for(j in val[i]){
					str +="<td>" +	val[i][j] + "</td>";
					console.log(val[i][j]);
				}
				str+="</tr>";
			}
			
			$("#tblmultiply").html(str);
		});
		
	})
});
