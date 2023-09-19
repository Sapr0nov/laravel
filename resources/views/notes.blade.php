@extends('layouts.base')
@section('title', 'Главная')
@section('main')
@if (count($notes) > 0) 
<table class="table table-striped"> 
 <thead> 
 <tr> 
 <th>Название</th> 
 <th>Содержимое</th> 
 <th>&nbsp;</th> 
 </tr> 
 </thead> 
 <tbody> 
 @foreach ($notes as $note)
 <tr> 
    
        <td><a href="{{ route('detail', ['note_by_id' => $note->id]) }}">    {{ $note->name}} </a></td>
        <td>{{$note->content}}</td>
   
</tr> 
 @endforeach
 <tr> 
 <td><h3></h3></td> 
 <td></td> 
 <td> 
@if (count($notes) == 1)
 <a href=" {{ route('notes') }}">К списку</a>
@endif
</td> 
 </tr> 
 </tbody> 
 </table> 
@endif 
@endsection('main')
