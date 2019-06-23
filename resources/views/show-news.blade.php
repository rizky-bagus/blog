@extends('layouts.app')
@section('scripts')
<script type="text/javascript" src="{{ asset('backend/js/ckeditor/ckeditor.js')}}"></script>
<script>
            CKEDITOR.replace( 'content' );
    </script>

<script>
            CKEDITOR.replace( 'desc' );
    </script>    
@endsection
@section('content')

<br>
<div class="wrapper">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">Show Data News
</div>
<br>                                                            
<div class="panel-body">
	<div class="container">
		<div class="col-md-8">
				<form id="input" class="form-horizontal row-fluid" enctype="multipart/form-data" method="POST">
				
					@csrf

						<div class="form-group">
							<label>Author</label>
							<input name="title" class="form-control" type="text" value="{{ $news->title }}" readonly>
						</div>

								<!--Username-->
						<div class="form-group">
							<label>Title</label>
							<input name="title" class="form-control" placeholder="Title" type="text" value="{{ $news->title }}" readonly>
						</div>
								<!-- Foto -->
						<div class="form-group">
							<label>Image</label>
							<br>
							<img src="{{$news->image}}" width="150p
							x" width="150px">
						</div>

						<!--Content-->
						<div class="form-group">
							<label>Description</label>
							<textarea id="desc" class="form-control" readonly>{!! $news->description !!} </textarea>
						</div>

						<!--Content-->
						<div class="form-group">
							<label>Content</label>
							<textarea id="content" class="form-control" readonly>{!! $news->content !!} </textarea>
						</div>

						<!--Kategori-->
						<div class="form-group">
							<label>Category</label>
							<input class="form-control" type="text" name="id_kategori" value="{{$news->Category->category}}" readonly>
						</div>
								

								
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

@endsection