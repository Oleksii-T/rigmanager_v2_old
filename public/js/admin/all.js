$(document).ready(function () {
	
    //init Select2 selects
    $('.select2').select2();

    //hide notif after 5 sec passes
    setTimeout(function() { 
        $('.custom-alert').remove();
    }, 5000);

    // hide notif by click
    $('.custom-alert').click(function(){
        $(this).remove();
    })

    //dispaly image preview when uploading image
    $('.custom-file input').change(function(e){
        let reader = new FileReader();
        let container = $(this).closest('.form-group');
    
        reader.onload = (e) => {
            container.find('.custom-file-preview img').attr('src', e.target.result);
        };
    
        reader.readAsDataURL(e.target.files[0]);
        container.find('.custom-file-label').text(e.target.files[0].name);
    })

    //delete resource from datatable
    $(document).on('click', '.delete-resource', function (e) {
        let _this = $(this);
        swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: _this.data('link'),
                    type: 'delete',
                    data: {
                        _token: $("[name='csrf-token']").attr("content")
                    },
                    success: (response)=>{
                        if (response.success) {
                            swal.fire("Deleted!", response.message, 'success');
                            _this.closest('table').DataTable().draw();
                        } else {
                            swal.fire("Error!", response.message, 'error');
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        swal.fire("Server error!", '', 'error');
                    }
                });
            }
        });
    })

	// clear uploaded image from form input
	$('.remove-saved-image').click(function(){
		$(this).closest('div').addClass('d-none');
		let container = $(this).closest('.form-group');
		container.find('input[type=file]').val('');
		container.find('label.custom-file-label').text('');
		container.find('.input-group-append').addClass('d-none');
		container.find('.custom-file-preview').empty();
		container.find('.custom-file-preview').append('<img src="">');
		container.find('input[name=image_deleted]').val('1');
	})

    // show remove btn when image selected
    $('.custom-file input[type=file]').change(function(){
		let container = $(this).closest('.form-group');
		container.find('.input-group-append').removeClass('d-none');
    })
})