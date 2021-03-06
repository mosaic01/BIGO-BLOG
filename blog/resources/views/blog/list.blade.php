@extends('layouts.blog')
@section('content')
	<section class="container">
		<div class="content-wrap">
			<div class="content">
				<div class="title">
					<h3 style="line-height: 1.3">BIGO技术博客</h3>
				</div>
				@foreach($blog_info as $v)
					<article class="excerpt excerpt-1"><a class="focus" href="#" title="用DTcms做一个独立博客网站（响应式模板）" target="_blank" ><img class="thumb" data-original="images/201610181739277776.jpg" src="{{ asset('images/201610181739277776.jpg') }}" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: inline;"></a>
						<header><a class="cat" href="{{ url('home/show',['id'=>$v['id']])  }}" title="{{ $v['label'] }}" >{{ $v['label'] }}<i></i></a>
							<h2><a href="{{ url('home/show',['id'=>$v['id']])  }}" title="{{ $v['title'] }}" target="_blank" >{{ $v['title'] }}</a></h2>
						</header>
						<p class="meta">
							<time class="time"><i class="glyphicon glyphicon-time"></i> {{ date('Y-m-d',$v['updated_at']) }}</time>
							<span class="views"><i class="glyphicon glyphicon-eye-open"></i> {{ $v['browse'] }}</span> <a class="comment" href="##comment" title="评论" target="_blank" ><i class="glyphicon glyphicon-comment"></i> {{ $v['comment'] }}</a></p>
						<p class="note">{{ $v['subject'] }}</p>
					</article>
				@endforeach
				<nav class="pagination" style="display: none;">
					<ul>
						<li class="prev-page"></li>
						<li class="active"><span>1</span></li>
						<li><a href="?page=2">2</a></li>
						<li class="next-page"><a href="?page=2">下一页</a></li>
						<li><span>共 2 页</span></li>
					</ul>
				</nav>
			</div>
		</div>
		<aside class="sidebar">
			<div class="fixed">
				<div class="widget widget_search">
					<form class="navbar-form" action="/Search" method="post">
						<div class="input-group">
							<input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
		<span class="input-group-btn">
		<button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
		</span> </div>
					</form>
				</div>
				<div class="widget widget_sentence">
					<h3>标签云</h3>
					<div class="widget-sentence-content">
						<ul class="plinks ptags">
							<li><a href="#list/67/" title="移动统计" draggable="false">移动统计 <span class="badge">1</span></a></li>
							<li><a href="#list/256/" title="404" draggable="false">404 <span class="badge">1</span></a></li>
							<li><a href="#list/252/" title="VS2010" draggable="false">VS2010 <span class="badge">1</span></a></li>
							<li><a href="#list/162/" title="杀毒软件" draggable="false">杀毒软件 <span class="badge">1</span></a></li>
							<li><a href="#list/133/" title="html标签" draggable="false">html标签 <span class="badge">1</span></a></li>
							<li><a href="#list/49/" title="循环" draggable="false">循环 <span class="badge">2</span></a></li>
							<li><a href="#list/22/" title="百度统计" draggable="false">百度统计 <span class="badge">2</span></a></li>
							<li><a href="#list/132/" title="sql" draggable="false">sql <span class="badge">6</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="widget widget_hot">
				<h3>最新评论文章</h3>
				<ul>
					@foreach($blog_info as $v)
						<li><a title="{{ $v['title'] }}" href="#" ><span class="thumbnail">
<img class="thumb" data-original="images/201610181739277776.jpg" src="{{ asset('images/201610181739277776.jpg') }}" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
</span><span class="text">{{ $v['subject'] }}</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
									{{ $v['updated_at'] }}
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>{{ $v['browse'] }}</span></a></li>
					@endforeach
				</ul>
			</div>
			<div class="widget widget_sentence">

				<a href="#" target="_blank" rel="nofollow" title="MZ-NetBlog主题" >
					<img style="width: 100%" src="{{ asset('images/ad.jpg') }}" alt="MZ-NetBlog主题" ></a>

			</div>
			<div class="widget widget_sentence">

				<a href="#" target="_blank" rel="nofollow" title="专业网站建设" >
					<img style="width: 100%" src="{{ asset('images/201610241224221511.jpg') }}" alt="专业网站建设" ></a>

			</div>
		</aside>
	</section>
@endsection