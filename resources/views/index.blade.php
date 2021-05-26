@extends('layouts.app')
@section('content')
    <main id="main-content">
        @include('slider.app')
        @include('ourservices.app')
        @include('skills.app')
        @include('experience.app')
        @include('portfolio.app')
        @include('testimonials.app')
        @include('weapons.app')
        @include('workProcess.app')
        @include('contact.app')
    </main>

@endsection
