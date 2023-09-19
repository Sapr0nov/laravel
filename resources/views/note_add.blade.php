@extends('layouts.base') 
@section('title', 'Добавление Заметки - Мои Заметки') 
@section('main') 
<form action="{{ route('note.store') }}" method="POST"> 
 @csrf 
 <div class="form-group"> 
 <label for="txtTitle">Заголовок</label> 
 <input name="title" id="txtTitle" class="form-control"> 
 </div> 
 <div class="form-group"> 
 <label for="txtContent">Содержимое</label> 
 <textarea name="content" id="txtContent" class="form-control" row="3"></textarea> 
 </div> 

 <input type="submit" class="btn btn-primary" value="Добавить"> 
</form> 
@endsection 