<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>

	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
{{-- 	<link href="css/datepicker3.css" rel="stylesheet"> --}}
	<link href="{{asset('css/styles.css')}}" rel="stylesheet">
{{-- 	<script src="js/lumino.glyphs.js"></script>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script> --}}
	<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Admin</a>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="{{ asset('/product') }}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Sản phẩm</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->

	<!-- main -->
	@yield('main')
	<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/myscript.js')}}"></script>
	{{-- <script>
		$('#calendar').datepicker({
		});
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
	</script> --}}	
</body>

</html>