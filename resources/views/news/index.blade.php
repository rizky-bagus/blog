@extends('layouts.app')
@section('scripts')
<script src="{{ asset('assets/backEnd/news.js') }}"></script>
{{-- <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script> --}}
@endsection
@section('content')
<br>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main news" id="indexNews">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">Data News</div>
    <br>&nbsp
    <button class="btn btn-primary" id="changeViewNews"><i class="fa fa-plus">Tambah</i></button>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table-bordered table-hover table-responsive" id="TableNews">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@include('news.create')
@include('news.edit')
@include('news.publish')
@endsection