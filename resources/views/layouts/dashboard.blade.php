<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/datepicker3.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/styles.css')}}" rel="stylesheet">

<!--Icons-->
<script src="{{URL::asset('assets/js/lumino.glyphs.js')}}"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</style>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				@include('includes.nav-bar')
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			@role('admin')
			<li class="active"><a href="{{url('/admin/user')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Quản lý giáo viên</a></li>
			<li class=""><a href="{{url('/admin/post')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Quản lý điểm</a></li>
			<li class=""><a href="{{url('/admin/user')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Cập nhật kỳ học</a></li>
			<li role="presentation" class="divider"></li>
			@endrole
			@role('teacher')
			@endrole
		</ul>

	</div><!--/.sidebar-->
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
		@yield('content')
	</div>
	
	</div>	<!--/.main-->

	<script src="{{URL::asset('assets/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/bootstrap-datepicker.js')}}"></script>
	<script>

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
