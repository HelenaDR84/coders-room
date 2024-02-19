@extends('layouts.htmlStructure')

@section('title', 'Home')

@section('content')
   <div class="flex flex-col"> 
      <h1 class="text-orange-500 text-4xl text-center font-bold my-6">FEMCODERS</h1>
    <img src="{{ asset('images/coders_room_background.jpg') }}" alt="Coders_Girls" class="w-[100%] mr-2 inline rounded-md">
   </div>
@endsection