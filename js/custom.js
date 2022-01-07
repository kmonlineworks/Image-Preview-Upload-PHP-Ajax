$(document).ready(function(){

	// Image Upload
	$('#upload-form').on('submit', function(e){
		e.preventDefault();

		var formData = new FormData(this);

		$.ajax({
			url: "./image_upload_process.php",
			method: "POST",
			data: formData,
			contentType: false,
			processData: false,
			success: function(data){
				$('.message').html(data);
				$('#img-preview').attr('src', 'img/photo.png');

			}
		});
	});
	
	// Image Preview
	$('#image').change(function(){
		imgPreview(this);
	});

	function imgPreview(input){

		if (input.files && input.files[0]) {

			var fileReader = new FileReader();

			fileReader.readAsDataURL(input.files[0]); // Convert into Base64 string... 
			
			fileReader.onload = function(e){

				$('#img-preview').attr('src', e.target.result);
			}

		}
	}

	
});