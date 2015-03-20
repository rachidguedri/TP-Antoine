@extends('layouts.master')

@section('content')
    @if(isset($student))
    <h2><a href="{{url('single/'.$student->id)}}">{{$student->nom}}</a></h2>
        
        <p>{{$student->prenom}}</p>
        <p>{{$student->formation}}</p>

     @endif   
        

       
    
@stop
@section('footer')
    
    mentions légales
@stop