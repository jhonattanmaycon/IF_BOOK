@extends('layouts.ifbook')

@section('tinymce')
<script src="{{asset('/js/tinymce/tinymce.min.js')}}"></script>
<script type="text/javascript">
	tinymce.init ({
		selector: 'textarea',
		language: 'pt_BR',
		plugins: [
			'advlist autolink lists link image charmap print preview anchor',
			'searchreplace visualblocks code fullscreen',
			'insertdatetime media table paste imagetools wordcount'
		],
		toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		
		content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px; padding: 10px}' + 'img { padding: 4px 2px 4px 4px }',
		
		image_advtab: true,
		automatic_uploads: true,
        file_picker_types: 'image',
        file_picker_callback: function (cb, value, meta) {
            
            var input = document.createElement ('input');
            input.setAttribute ('type', 'file');
            input.setAttribute ('accept', 'image/*');
            input.onchange = function () {
                var file = this.files[0];
                var reader = new FileReader ();
                reader.onload = function () {
                    var id = 'dado' + (new Date()).getTime ();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    /* call the callback and populate the Title field with the file name */
                    cb(blobInfo.blobUri(), { title: file.name });
                };
                reader.readAsDataURL(file);
            };
            input.click();
        },
	});
</script>
@endsection

@section('main-content')
<div class="container">
	
	<form action="" method="POST">
		@csrf
	
		<div class="form-group">
			<label>Texto</label>
			
			<textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" >{{old('content')}}</textarea>

			@error('content')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror
			
		</div>

		<hr>
		<div class="form-row justify-content-end">
			<div class="form-group">
				<button type="submit" class="btn btn-primary" name="close_bt" value="close_bt">
						Encerrar
						<span class="fas fa-check-square"></span>
				</button>		
			</div>
		</div>
	</form>
</div>
@endsection
