<header>
    <div class="top-header">
        <div class="container"> 
            <div class="oflow-hidden font-9 text-sm-center ptb-sm-5">
            
                <ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10 list-a-ptb-xs-5">
                    <li><a class="pl-0 pl-sm-10" href="#">Time</a></li>
                    <li><a href="#">{{ $hari }}</a></li>
                    <li><a href="#">{{ $waktu }}</a></li>
                </ul>
                
            </div><!-- top-menu -->
        </div><!-- container -->
    </div><!-- top-header -->
    
    <div class="middle-header mtb-20 mt-xs-0">
        <div class="container"> 
            <div class="row">
            
                <div class="col-sm-4">
                    <a class="logo" href="#"><img src="{{ asset('assets/images/logo-black.png') }}" alt="Logo"></a>
                </div><!-- col-sm-4 -->
                
                
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- top-header -->
    
    <div class="bottom-menu">
        <div class="container">
            
            <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>


            
            <ul class="main-menu" id="main-menu">
                @foreach($category as $data)
                <li><a href="{{ route('filter', $data->id) }}">{{$data->category}}</a></li>
                @endforeach
                <li class="drop-down"><a href="">View All Category ></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div><!-- container -->
    </div><!-- bottom-menu -->
</header>