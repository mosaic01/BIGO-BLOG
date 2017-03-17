<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BIGO技术博客</title>
	<style>
		.editor{
			margin: 0 auto;
		}
		.send-title{
			display: block;
			font-family: 微软雅黑;
			width: 200px;
			margin: 20px auto;
		}
		.submit-div{
			margin: 0 auto;
			width: 250px;
		}
		.form-show{
			width: 1080px;
			font-size: 12px;
			margin: 10px auto;
		}
		.form-control2{
			width: 200px;
			margin-right: 7px;
		}
	</style>
	<link rel="shortcut icon" href="{{ asset('images/logo.ico') }}">
	<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('layer/layer.js') }}"></script>

</head>
<body>
	<h2 class="send-title">发表博文</h2>
	<form action="{{ url('home/handle') }}" method="post">
		{{ csrf_field() }}
		<div class="form-show">
			博文标题：<input type="text" class="form-control2" value="{{ old('Blog')['title'] }}" name="Blog[title]" placeholder="字数限制：2到10位(必填)">
			博文主题：<input type="text" class="form-control2" value="{{ old('Blog')['subject'] }}"  name="Blog[subject]"  placeholder="字数限制：2到10位(必填)">
			博文作者：<input type="text" class="form-control2" value="{{ old('Blog')['author'] }}"  name="Blog[author]"  placeholder="字数限制：2到10位(必填)">
			博文标签：<select class="form-control2" value="{{ old('Blog')['label'] }}"  name="Blog[label]"  placeholder="字数限制：1到5位(必填)">
				<option value="博文标签：1">博文标签：1</option>
				<option value="博文标签：2">博文标签：2</option>
				<option value="博文标签：3">博文标签：3</option>
			</select><br>
		</div>
		@include('editor::head')
		<div class="editor">
	    <textarea id='myEditor' name="Blog[content]">基于Laravel的技术博客网站  基于Laravel的技术博客网站基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站  基于Laravel的技术博客网站     {{ old('Blog')['content'] }}</textarea>
		</div>
	    <div class="submit-div">
	    	<input class="btn btn-info" value="确认提交" type="submit">	
		    <a class="btn btn-default" href="{{ url('home/index') }}">返回首页</a>
	    </div>
	</form>
</div>
</body>
<script>
	{{--{{  var_dump($errors->first()) }}--}}
	@if( $errors->first() )
		layer.msg("{{ $errors->first() }}");
	@endif
</script>
</html>



