@extends('layouts.public')
@section('title','Home')
@section('content')
<x-slider :postSliders="$postSliders"></x-slider>
<x-card-blue :postSidebar="$postSidebar"></x-card-blue>
<x-card-white :postSliders="$postSliders"></x-card-white>
<x-card-lime :postSliders="$postSliders"></x-card-lime>
<x-footer></x-footer>
@endsection