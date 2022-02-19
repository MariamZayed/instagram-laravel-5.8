@extends('layouts.app')

@section('content')
<div class="container">
    {{-- I did all this coming in first 30 mon video --}}
    <div class="row">


        <div class="col-3 p-5">
            <img class="rounded-circle" src="data:image/jpeg;base64,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">
        </div>
        <div class="col-9">

            <div><h1>{{ auth::user()->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>443 </strong>posts</div>
                <div class="pr-5"><strong>91k </strong>followers</div>
                <div class="pr-5"><strong>342   </strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together.
            LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/</div>
            <div><a href="#">www.freecodecamp.org</a></div>

        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="http://placehold.it/600">
        </div>
        <div class="col-4">
            <img class="w-100" src="http://placehold.it/600">
        </div>
        <div class="col-4">
            <img class="w-100" src="http://placehold.it/600">
        </div>
    </div>
    
</div>
@endsection
