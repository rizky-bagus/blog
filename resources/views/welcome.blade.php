@extends('layouts.frontend')

@section('content')
<section class="">
    <div class="container">
        <div class="row">
        
            <div class="col-md-12 col-lg-8">
                <div class="ptb-0">
                    <a class="mt-10 color-ash" href="{{ url('/') }}"><i class="mr-5 ion-ios-home"></i><b>HOME</b></a>
                    <h1 class="mtb-20"><b>News</b></h1>
                    <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat tincidunt mauris semper lorem, 
                        in dignissim ex metus a lacus. 
                        Sed venenatis dolor vitae vehicula varius. Aliquam vitae donis lobortis diamet</p>
                </div>

                @foreach($news as $data)
                <div class="mb-30 sided-250x card-view">
                    <div class="s-left">
                        <img src="{{ $data->image }}" alt="">
                    </div><!-- left-area -->
                    <div class="s-right ptb-50 p-sm-20 pb-sm-5 plr-30 plr-xs-0">
                        <h4><a href="{{ route('detail', $data->id) }}">{{ $data->title }}</a></h4>
                        <ul class="mtb-10 list-li-mr-20 color-lite-black">
                            <li><i class="mr-5 font-12 ion-clock"></i>{{$data->created_at}}</li>
                            <li><i class="mr-5 font-12 ion-android-person"></i>{{ $data->author }}</li>
                            
                        </ul>
                    </div><!-- right-area -->
                </div><!-- sided-250x -->
                @endforeach
                
                <div class="row" align="center">
                    <div class="col-md-12">
                        <button class="mt-15 plr-20 btn-b-sm btn-fill-primary dplay-block">
                            <a href="{{ route('index') }}"><b>View More</b></a>
                        </button>
                    </div>
                </div>

            </div><!-- col-sm-8 -->

            <div class="col-md-12 col-lg-4">
                <div class="mb-30 p-30 card-view">
                    <h4 class="p-title"><b>SEARCH</b></h4>
                        <form class="mtb-10" action="{{ route('search') }}" method="GET" role="search">
                            <input type="text" placeholder="Search" name="search">
                            {{-- <button type="submit"><i class="ion-ios-search"></i></button> --}}
                        </form>
                </div><!-- card-view -->                                
            
                <div class="mb-30 p-30 card-view">
                    <h4 class="p-title"><b>RECENT POST</b></h4>
                    @foreach($recents as $data)
                        <div class="sided-80x mb-20">
                            <div class="s-left">
                                <img src="{{ $data->image }}" alt="">
                            </div><!-- s-left -->
                            
                            <div class="s-right">
                                <h5><a href="{{ route('detail', $data->id) }}">
                                    <b>{{ $data->title }}</b></a></h5>
                                <ul class="mtb-5 list-li-mr-20 color-lite-black">
                                    <li><i class="mr-5 font-12 ion-clock"></i>{{$data->created_at}}</li>
                                </ul>
                            </div><!-- s-left -->
                        </div><!-- sided-80x -->
                    @endforeach
                </div><!-- card-view -->                                
            </div><!-- col-sm-4 -->
        </div><!-- row -->
    </div><!-- container -->
</section>

@endsection