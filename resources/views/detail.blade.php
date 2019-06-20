@extends('layouts.frontend')

@section('content')
<section class="ptb-30">
	<div class="container">
		<div class="row">
		
			<div class="col-md-12 col-lg-8">
				
				<div class="ptb-0">
					<a class="mt-10" href="{{ url('/') }}"><i class="mr-5 ion-ios-home"></i><b>HOME</b></a>
					<a class="mt-10" href="{{ route('index') }}"><i class="mlr-10 ion-chevron-right"></i><b>NEWS</b></a>
					<a class="mt-10 mb-30 color-ash" href=""><i class="mlr-10 ion-chevron-right"></i>
						<b>{{ $news->title }}</b></a>
				</div>
				
				<div class="p-30 mb-30 card-view">
					<img src="{{ $news->image }}" alt="">
					<h3 class="mt-30 mb-5"><a href="#"><b>{{ $news->title }}</b></a></h3>
					<ul class="list-li-mr-10 color-lite-black">
						<li><i class="mr-5 font-12 ion-clock"></i>{{$news->created_at}}</li>
						<li><i class="mr-5 font-12 ion-android-person"></i>{{ $news->author }}</li>
						
					</ul>
					
					{!! $news->content !!}
					
					<div class="sided-half">
						<ul class="s-left ptb-5 list-btn-semiwhite sided-sm-center">
							<li><a href="#">{{ $news->Category->category }}</a></li>
						</ul>
						
						</ul>
					</div><!-- sided-half -->
				</div><!-- card-view -->
			</div><!-- col-sm-8 -->
			
			<div class="col-md-12 col-lg-4">
				<div class="mb-30 p-30 card-view">
                    <h4 class="p-title"><b>SEARCH</b></h4>
                        <form class="mtb-10" action="{{ route('search') }}" method="GET" role="search">
                            <input type="text" placeholder="Search" name="search">
                            {{-- <button type="submit"><i class="ion-ios-search"></i></button> --}}
                        </form>
                </div><!-- card-view -->      

				<!-- START OF SIDEBAR RECENT POST -->
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
									
			</div><!-- col-sm-4 -->
		</div><!-- row -->
	</div><!-- container -->
</section>
@endsection