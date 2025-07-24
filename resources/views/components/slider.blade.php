<div class="relative">
    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach($postSliders as $postSlider)
            <div class="swiper-slide border-4 py-20 border-[#1b1b1b] bg-pink-600 rounded-md p-4">
                <a href="{{ $postSlider->slug }}">
                    <div class="grid md:grid-cols-2 grid-cols-1 mt-10 items-center">
                        <div class="bg-white p-4 rounded-2xl border-black border-2 shadow-custom-black md:ml-16 ml-0">
                            <img class="w-full md:h-[500px] h-[300px] object-cover rounded-md border-2 border-black -mt-14 mb-4"
                                src="{{ asset('storage/' . $postSlider->image) }}">
                        </div>
                        <div class="my-8 md:-ml-16 md:mr-16 mx-0">
                            <h2
                                class="text-xl md:text-4xl font-bold text-white bg-gray-900 inline-block p-3 rounded-md">
                                {{ $postSlider->title }}
                            </h2>
                            <p class="md:mt-6 mt-4">
                                <span
                                    class="bg-yellow-500 rounded-md font-semibold p-3 text-lg md:text-2xl">{{$postSlider->created_at->format('d
                                    F Y')}}</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="flex justify-between items-center mt-6 px-4">
            <div
                class="w-[40px] h-[40px] swiper-button-prev custom-arrow bg-white/50 text-white p-3 rounded-full shadow-md hover:bg-white transition cursor-pointer">
                <span class="text-2xl">⬿</span>
            </div>
            <div class="swiper-button-next custom-arrow bg-white/50 text-white p-3 rounded-full shadow-md hover:bg-white
        transition cursor-pointer">
                <span class="text-2xl">⤳</span>
            </div>
        </div>
    </div>