<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <ol class="breadcrumb">
            @if (!empty($breadcrumb) )
                @foreach ($breadcrumb as $b)
                    <li>{{$b}}</li>
                @endforeach
            @endif
        </ol>
    </div>
    <div class="navbar-collapse collapse navbar-right">
        @section('nav')
            <ul class="nav navbar-nav" id="menu-menu-principal">
                <li {!! (isset($active) && $active=='home')? 'class="active"' : '' !!} ><a href="{{url('/')}}">
                        <span class="glyphicon glyphicon-home">Accueil</span></a>
                </li>
                {!!(Auth::guest()? '' : '<li class="warning"><a href="'.url('dashboard').'">dashboard</a></li>')!!}

                @if(!empty($menus))
                    @foreach($menus as $category)
                        <li {!!(isset($active) && $active==$category->id)? 'class="active"' : ''!!} >
                            <a href="{{url('/')}}"><span class="glyphicon"> Acceuil</span></a>
                        </li>
                    @endforeach
                @endif
            </ul>
        @show
    </div>
</nav>