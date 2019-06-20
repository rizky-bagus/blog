<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="profile-sidebar">
		<div class="profile-userpic">

			<img src="{{ asset('backend/admin.png ') }}" class="img-responsive" alt="">	
		</div>
		<div class="profile-usertitle">
			<div class="profile-usertitle-name"><b>Admin</b></div>
			<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
		</div>
		<div class="clear"></div>
	</div>
	<ul class="nav menu">

		<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
			<em class="fa fa-dashboard">&nbsp;</em>Frontend Guest<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
			</a>
			<ul class="children collapse" id="sub-item-1">
				<li><a class="" href="/category">
					<span class="fa fa-book text-info">&nbsp;</span> Data Kategori
				</a></li>

				<li><a class="" href="/news">
					<span class="fa fa-book text-info">&nbsp;</span> Data News
				</a></li>

			</ul>
		</li>

</div><!--/.sidebar-->

