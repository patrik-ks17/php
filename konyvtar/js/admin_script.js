$(document).ready(function()  {

	$('a.delete_record').click(function(event) {
		let result = confirm('Biztos hogy törlöd ezt az elemet?');
		
		if(result) {
			let table = $(this).attr("table");
			let id = $(this).attr("record_id");

			location.href = "../php/delete.php?t="+table+"&id="+id;
		}

	});
});