<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>


@extends('layouts.base') 
@section('title', 'Мои заметки') 
@section('main') 
<p class="text-right"> <a href="{{ route('note.add') }}">Добавить заметку</a></p> 
@if (count($notes) > 0) 
<table class="table table-striped"> 
 <thead> 
 <tr> 
 <th>Товар</th> 

 <th>Цена, руб.</th> 
 <th colspan="2">&nbsp;</th> 
 </tr> 
 </thead> 
 <tbody> 
 @foreach ($notes as $note) 
 <tr> 
 <td><h3>{{ $note->title }}</h3></td> 
 <td>{{ $note->price }}</td> 
 <td> 
 <a href="{{ route('note.edit', ['note' => $note->id]) }}">Изменить</a>
 </td> 
 <td> 
 <a href="{{ route('note.delete', ['note' => $note->id]) }}">Удалить</a>  
 </td> 
 </tr> 
 @endforeach 
 </tbody> 
</table> 
@endif 
@endsection 
</x-app-layout>
