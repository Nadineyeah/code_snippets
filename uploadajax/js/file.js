$("#btnsubmit").on('click',function(e){
e.preventDefault();
	var file = $('#profilepic')[0].files[0];
	var formData = new FormData();                 
	formData.append('file',file);
	
	$.ajax({
		url: 'file_action.php', // point to server-side PHP script 
		dataType: 'text',  // what to expect back from the PHP script, if anything
		cache: false,
		contentType: false,
		processData: false,
		data: formData,                         
		type: 'post',
		success: function(data){
			$("#imgprev").attr("src",data); // display response from the PHP script, if any
		}
    });
	
	return false;
})
