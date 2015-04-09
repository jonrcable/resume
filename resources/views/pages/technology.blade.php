@extends('layouts/default')

{{-- Page title --}}
@section('title')
@parent
Jon Cable - Resume Technology
@stop

{{-- Meta description --}}
@section('meta-description')
Online Resume - Jon Cable - Technology
@stop

{{-- Page Header --}}
@section('header')

@stop

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
                        <p>technology</p>
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

{{-- Page content --}}
@section('page')
<div id="shop-banners">
    <div class="container">
        <div id="hello">
            <div class="row">
                <div class="head-offset col-sm-3">
                    <div class="circular-bar">
                        <input type="text" class="dial" data-fgColor="#e74c3c" data-width="200" data-height="200" data-linecap="round" value="100">
                        <span class="icon-code" style="margin-left: 85px"></span>
                    </div>
                </div>
                <div class="col-sm-9">
                    <h2 class="section-title mbottom20 mtop30">_Skills_Overview ($_technology)</h2>
                    <div class="separator mtop30 mbottom10"></div>
                    <p class="mbottom40">
                        This is an overview of my favorite technologies and represents a history of working in Open Source for nearly 15 years. All of these technologies have played vital roles in my professional growth as a web developer and director. This is NOT a comprehensive list, rather a overview of the technologies that have had the most impact on my projects.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-3">

                @include('partials/sidebars/technology')
                @include('partials/sidebars/me')
                @include('partials/tags/technology')

            </div>

            <div class="col-sm-9">

                @include('partials/technology/languages')
                @include('partials/technology/systems')
                @include('partials/technology/os')
                @include('partials/technology/productivity')
                @include('partials/technology/apps')
                @include('partials/technology/media')

            </div>

        </div>

    </div><!-- end hello -->
</div>
@stop
