@extends('layouts.app')

@section('content')
<br>        
 <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
 <div class="panel panel-container">
            <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6 no-padding">
                    <div class="panel panel-teal panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-edit color-blue"></em>
                            <div class="large"><?php echo $news;  ?></div>
                            <div><b>News Data</b></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6 no-padding">
                    <div class="panel panel-orange panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-book color-teal"></em>
                            <div class="large"><?php echo $category;  ?></div>
                            <div><b>Category Data</b></div>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </div>
@endsection
