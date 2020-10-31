$(function(){
	//Add Category
	$(".cat-form").on('submit', function(e){
		e.preventDefault();
		var name = $('#cat_name').val();
		var desc = $('#cat_desc').val();
		var img = $('#cat_img').val();
		var dataString = 'cat_name='+name+'&cat_desc='+desc+'&cat_img'+img;
		$.ajax({
			type: "POST",
			url: "addCategoryAjax.php",
			data: new FormData(this),
			datatype:'json',
			contentType:false,
			cache:false,
			processData:false,
			success:function(data){
				$('.result').html(data);
			}

		});
		return false;
	});
});