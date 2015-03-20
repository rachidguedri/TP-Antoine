<ul class="nav nav-sidebar">

    <li {!! ($active == 'dashboard')? 'class="active"' : '' !!}  ><a href="{{url('dashboard')}}">Dashboard <span class="sr-only">(current)</span></a></li>
    <li {!! ($active == 'post')? 'class="active"' : '' !!} ><a href="{{url('post')}}"><span class="glyphicon glyphicon-book"></span> {{trans('blog.posts')}} <span class="badge">{{$countPost}}</span></a></li>
    <li {!! ($active == 'archive')? 'class="active"' : '' !!} ><a href="{{url('dashboard/archive')}}"><span class="glyphicon glyphicon-hdd"></span>  {{trans('blog.archive')}} <span class="badge">{{$countArchive}}</span></a></li>
    <li {!! ($active == 'comment')? 'class="active"' : '' !!}  ><a href="{{url('dashboard/comment')}}">{{trans('blog.comment')}} <span class="badge">{{$countComment}}</span></a></li>
    <li ><a href="{{trans('category')}}">{{trans('blog.category')}} <span class="badge">{{$countCategory}}</span></a></li>
    <li><a href="{{trans('contact')}}"><span class="glyphicon glyphicon-inbox"></span>  {{trans('blog.contact')}} <span class="badge">3</span></a></li>
</ul>
