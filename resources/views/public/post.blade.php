@extends('layouts.public')
@section('title', $post->title)
@section('content')

<div class="border-4 px-4 py-20 mb-10 border-[#1b1b1b] bg-white rounded-md">
    <div class="text-center flex justify-center mb-12 flex-col">
        <h2 class="md:text-4xl text-xl font-bold text-center mb-4">{{ $post->title }}</h2>
        <span class="mb-4">Written by {{ $post->user->name }} </span>
        <p class="md:my-4 my-4 md:mx-8 mx-auto text-xs text-nowrap">
            <span class="bg-yellow-500 rounded-md font-semibold p-3 mr-4"> {{
                $post->created_at->format('d
                F Y') }} </span>
            <span class="bg-gray-500 rounded-md font-semibold p-3 "> {{
                $post->category->title }} </span>
        </p>
        <x-breadcrumbs :post="$post"></x-breadcrumbs>
    </div>

    <div class="bg-white p-4 rounded-2xl border-black border-2 shadow-custom-black md:w-[80%] w-full mx-auto">
        <img class="w-full object-cover md:h-[450px] h-[300px] rounded-md border-2 border-black -mt-9 mb-8"
            src="{{ asset('storage/'.$post->image) }}">
        {!! $post->body !!}
    </div>
    @endsection