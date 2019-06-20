@extends('layouts.app')
@section('scripts')
<script src="{{ asset('assets/backEnd/category.js') }}"></script>
@endsection
@section('content')
<br>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main category" id="indexCategory">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">Data Category</div>
    <br>&nbsp
    <button class="btn btn-primary" id="changeViewCategory"><i class="fa fa-plus">Tambah</i></button>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table-bordered table-hover table-responsive" id="TableCategory">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Category</th>
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
@include('category.create')
@include('category.edit')
@endsection