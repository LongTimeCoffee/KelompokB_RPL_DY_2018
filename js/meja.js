
$(document).ready(function(){
	$(".btn-meja").click(function(){
		var idMeja = $(this).attr("idMeja");
		var btn = this;
		//$(this).notify("Meja "+idMeja+" dipilih");
		$.ajax({
			url:"meja.php?No_meja="+idMeja,
			success:function(data){
				if(data!=0){
					$(btn).notify("Meja "+idMeja+" sudah dipakai!");
				}
			}
		});
	});
});
