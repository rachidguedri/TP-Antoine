<table class="table table-hover table-bordered">
    <thead>
    <tr>
        <th>{!!Form::checkbox('selected')!!}</th>
        <th>{{trans('blog.post_type')}}</th>
        <th>{{trans('blog.status')}}</th>
        <th>{{trans('blog.see')}}</th>
        <th>title</th>
        <th>création</th>
        <th>publication</th>
        <th>author</th>
        <th>catégories</th>
        <th>tags</th>
        <th>comments</th>
    </tr>
    </thead>
   <tbody id="table">
        @foreach($posts as $post)
            <tr class="{{($post->status=='publish')? 'success' : 'info'}}">
                <td>{!!Form::checkbox('posts[]', $post->id, false, ['class'=>'action'])!!}</td>
                <td>
                    <button disabled="disabled"
                            class="btn btn-{{($post->isPublish())? 'success' : 'warning'}}">{{$post->status}}
                    </button>
                </td>
                <td>
                    <button disabled="disabled"
                            class="btn btn-warning">{{$post->post_type}}
                    </button>
                </td>
                <td><a href="{{url('post/'.$post->id)}}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                <td><span class="glyphicon glyphicon-edit"></span> <a
                            href="{{url('post/'.$post->id.'/edit')}}">{{$post->title}}</a></td>
                <td>{{$post->created_at->format('d-m-Y h:i:s')}} </td>
                <td>{{$post->getDate()}}</td>
                <td>{{ $post->user->username or 'anonymous' }}</td>
                <td>
                    @foreach($post->taxonomies()->term('category')->get() as $category)
                        <a href="{{url('category/'.$category->id)}}">{{$category->title}}</a>
                    @endforeach
                </td>
                <td>
                    @foreach($post->taxonomies()->term('tag')->get() as $tag)
                        <a href="{{url('tag/'.$tag->id)}}">{{$tag->title}}</a>
                    @endforeach
                </td>
                <td>
                    {{$post->comments_count}}
                </td>
            </tr>
        @endforeach
   </tbody>
    {!! Form::close() !!}
</table>
<div class="row">
    <div class="col-lg-4 col-lg-offset-4">
        <div class="pagination">
            {!!$posts->render()!!}
        </div>
    </div>
</div>