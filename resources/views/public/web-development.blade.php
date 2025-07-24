@extends('layouts.public')
@section('title','Web Development')
@section('content')
<div class="border-4 px-4 py-20 mb-10 border-[#1b1b1b] bg-blue-100 rounded-md">
    <div class="grid md:grid-cols-[60%_40%] gap-8 justify-items-center">
        <div>
            <div class="flex items-center gap-0 mb-14">
                <h2 class="md:text-4xl text-xl font-semibold">Web Development</h2>
                <div class="title_decor">
                    <span></span>
                </div>
            </div>
            <div class="grid md:grid-cols-2 grid-cols-1 my-4 md:gap-8 gap-16">
                @foreach($webDev as $post)
                <a href="/{{ $post->slug }}">
                    <div>
                        <div class="bg-white p-4 rounded-2xl border-black border-2 shadow-custom-black">
                            <img src="{{ asset('storage/'.$post->image) }}"
                                class="w-full object-cover max-h-[200px] rounded-md border-2 border-black -mt-9 mb-1">
                        </div>
                        <h2
                            class="md:text-2xl text-xl -mt-12 mx-8 font-bold text-white bg-gray-900 inline-block p-3 rounded-md">
                            {{ $post->title }}
                        </h2>
                        <p class="md:mt-4 mt-4 mx-8">
                            <span class="bg-yellow-500 rounded-md font-semibold p-3 text-lg "> {{
                                $post->created_at->format('d F Y') }} </span>
                        </p>
                    </div>
                </a>
                @endforeach

            </div>
            {{ $webDev->links() }}
        </div>

        <div class="md:w-2/3 w-full bg-lime-100 p-4 rounded-2xl border-black border-2 shadow-custom-black">
            <h3 class="font-semibold p-3 text-lg flex -mt-12 mb-4 mx-auto justify-center"><span
                    class="bg-yellow-500 rounded-md p-2 w-2/3 text-xl text-center">Top Posts</span></h3>
            @foreach($topWebDev as $post)
            <a href="{{ $post->slug }}">
                <div class="grid grid-cols-[30%_70%] gap-0 items-center">
                    <img class="rounded-full border-black border-2 object-cover h-[80px] w-[80px] p-1.5"
                        src="{{ asset('storage/'.$post->image) }}">
                    <div>
                        <h2 class="text-xl  ml-0 font-extrabold text-gray-900 ">
                            {{ $post->title }}
                        </h2>
                        <p class="font-semibold">
                            {{ $post->created_at->format('d F Y') }}
                        </p>
                    </div>
                </div>
            </a>
            <div class="my-4">
                <hr class="border-2 border-black">
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection