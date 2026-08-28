@extends('layouts.portfolio')

@section('content')
    @include('sections.hero')
    @include('sections.about')
    @include('sections.skills')
    @include('sections.experience')
    @include('sections.education')
    @if (! empty(config('portfolio.projects')))
        @include('sections.projects')
    @endif
    @include('sections.contact')
@endsection
