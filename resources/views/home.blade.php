@extends('layouts.app')

@section('content')

@section('scripts')
<script type="text/javascript">
        $(document).ready(function() {
                $('#datatables').DataTable({
                        
                });
            });
    </script>
@endsection

<br>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">News Data Publish</div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table-bordered table-hover table-responsive" id="datatables">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no =1; @endphp
                        @foreach($news as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{$data->author}}</td>
                                <td>{{$data->title}}</td>
                                <td><img src="{{$data->image}}" width="60px" height="60px"></td>
                                <td>{{$data->Category->category}}</td>
                                <td><a href="{{ route('news.view',$data->id) }}" class="btn btn-info">Show</a></td>
                            </tr>
                        @endforeach    
                        </tbody>
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

@endsection
