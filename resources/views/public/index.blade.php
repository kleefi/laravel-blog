@extends('layouts.public')
@section('title','Home')
@section('content')
<x-slider :postSliders="$postSliders"></x-slider>
<x-card-blue :digitalMarketing="$digitalMarketing" :digitalMarketingThumbs="$digitalMarketingThumbs"
    :digitalMarketingList="$digitalMarketingList"></x-card-blue>
<x-card-white :webDev="$webDev" :webList="$webList" :webThumbs="$webThumbs"></x-card-white>
<x-card-lime :uiuxThumbs="$uiuxThumbs" :uiuxList="$uiuxList"></x-card-lime>
<x-footer></x-footer>
@endsection