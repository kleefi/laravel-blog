<div class="border-4 px-4 py-20 mb-10 border-[#1b1b1b] bg-lime-100 rounded-md">
    <div class="flex items-center gap-0 mb-14">
        <h2 class="md:text-4xl text-xl font-semibold">UI/UX Design</h2>
        <div class="title_decor">
            <span></span>
        </div>
    </div>
    <div class="grid md:grid-cols-2 gap-8 justify-items-center">
        @foreach($uiuxThumbs as $post)
        <a href="{{ $post->slug }}">
            <div class="bg-white p-4 rounded-2xl border-black border-2 shadow-custom-black w-[80%] mx-8">
                <img class="w-full object-cover md:h-[650px] h-[300px] rounded-md border-2 border-black -mt-9 mb-1"
                    src="{{ asset('storage/'.$post->image) }}">
                <div class="-mt-36">
                    <h2
                        class="md:text-2xl text-xl -mt-12 mx-8 font-bold text-white bg-gray-900 inline-block p-3 rounded-md">
                        {{ $post->title }}
                    </h2>
                    <p class="md:mt-4 mt-4 mx-8">
                        <span class="bg-yellow-500 rounded-md font-semibold p-3 text-lg "> {{
                            $post->created_at->format('d
                            F Y') }} </span>
                    </p>
                </div>
            </div>
        </a>
        @endforeach
        <div class="grid md:grid-cols-2 md:w-full md:mr-16 mr-0 w-[80%] mt-16 md:mt-8 md:gap-0 gap-8">
            @foreach($uiuxList as $post)
            <a href="{{ $post->slug }}">
                <div>
                    <img class="rounded-full mx-auto border-black border-2 bg-white object-cover h-[180px] w-[180px] p-1.5"
                        src="{{ asset('storage/'.$post->image) }}">
                </div>
                <div class="text-center">
                    <h2 class="text-xl  ml-0 font-extrabold text-gray-900 ">
                        {{ $post->title }}
                    </h2>
                    <p class="font-semibold">
                        {{ $post->created_at->format('d F Y') }}
                    </p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>