@extends('layouts/default')

{{-- Page title --}}
@section('title')
@parent
Jon Cable - Resume Education
@stop

{{-- Meta description --}}
@section('meta-description')
Online Resume - Jon Cable - Education
@stop

{{-- Page Header --}}
@section('header')

@stop

{{-- Page content --}}
@section('page')

{{-- Page Breadcrumbs --}}
@section('crumbs')
<div class="header-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mtop10">
                <h1 class="section-title fleft">Jon_Cable [Austin/Texas]</h1>

                <ul class="reset-list">
                    <li>
                        <p>#!/my/resume</p>
                    </li>
                    <li>/</li>
                    <li>
                        <p>education</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- end header-breadcrumb -->
@stop

{{-- Page Tagline --}}
@section('tagline')

    @include('partials/tag')

@stop

<div class="container">

        <div id="hello">
            <div class="row">
                <div class="head-offset col-sm-3">
                    <div class="circular-bar">
                        <input type="text" class="dial" data-fgColor="#e74c3c" data-width="200" data-height="200" data-linecap="round" value="100">
                        <span class="icon-books" style="margin-left: 85px"></span>
                    </div>
                </div>
                <div class="col-sm-9">
                    <h2 class="section-title mbottom20 mtop30">_Background_Overview ($_education)</h2>
                    <div class="separator mtop30 mbottom10"></div>
                    <p class="mbottom40">
                        Being a student with an early itch for web development over a decade ago was a challenge. The entire industry was a wild-west of learning: little structure, no formal education and constantly evolving. The concepts were in place but the world had no idea what was on the horizon: information, communications, banking, publishing, social networking all greatly impacted beyond our imagination. I’ve spent my career watching these trends developing both rich experience, interest and education in understanding the evolving technologies of the world wide web.
                    </p>
                </div>
            </div>
        </div>

    <div class="row">

        <div class="col-sm-3">

            @include('partials/sidebars/education')
            @include('partials/sidebars/me')
            @include('partials/tags/education')

        </div>

        <div class="col-sm-9">

            @include('partials/education/bs')
            @include('partials/education/aas')
            @include('partials/education/ccna')

        </div>

    </div>

</div><!-- end hello -->

@stop
