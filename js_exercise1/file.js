
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