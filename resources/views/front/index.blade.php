@extends('layouts.master')
@section('content')
<table class="table table-hover table-bordered">
    <thead>
        <tr>

            <th>Nom</th>
            <th>Prenom</th>
            <th>Formation</th>

        </tr>
    </thead>

    <tbody id="table">


        @if(isset($student))

        @foreach($student as $stud)
        <tr>
            <td class="clearfix">
                <h2><a href="{{url('single/'.$stud->id)}}">{{$stud->nom}}</a></h2>                        
            </td>
            <td class="clearfix">
                <h2>{{$stud->prenom}}</h2>                        
            </td>
            <td class="clearfix">
                <h2>{{$stud->formation}}</h2>                        
            </td>

            @endforeach
            @endif
        </tr>
        @stop



    </tbody>

</table>





<div class="row">
    <div class="col-lg-4 col-lg-offset-4">
        <div class="pagination">

        </div>
    </div>
</div>

@section('footer')

mentions légales
@stop