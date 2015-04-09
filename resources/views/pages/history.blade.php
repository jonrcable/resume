@extends('layouts/default')

{{-- Page title --}}
@section('title')
@parent
Jon Cable - Resume History
@stop

{{-- Meta description --}}
@section('meta-description')
Online Resume - Jon Cable - History
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
                        <p>history</p>
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

<div class="container">
    <div id="hello">
        <div class="row">
            <div class="head-offset col-sm-3">
                <div class="circular-bar">
                    <input type="text" class="dial" data-fgColor="#e74c3c" data-width="200" data-height="200" data-linecap="round" value="100">
                    <span class="icon-vector" style="margin-left: 85px"></span>
                </div>
            </div>
            <div class="col-sm-9">
                <h2 class="section-title mbottom20 mtop30">_Professional_Overview ($_history)</h2>
                <div class="separator mtop30 mbottom10"></div>
                <p class="mbottom40">For over a decade I have been involved in the direction of web and business technologies covering a wide range of unique interests. I immediately found a passion for technology after discovering my first 286 machine in 1992 and logging-on on to BBS systems and the classic AOL interfaces at a blazing 2400bps. As a web professional it has been an amazing journey to watch the internet evolve right before my eyes and I have developed a great interest in watching online technology trends and its effect on end-users, business and society.</p>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-3">

            @include('partials/sidebars/history')
            @include('partials/sidebars/me')
            @include('partials/tags/history')

        </div>

        <div class="col-sm-9">

            @include('partials/history/spcdirect')
            @include('partials/history/saleamp')
            @include('partials/history/photonfactory')
            @include('partials/history/publications')
            @include('partials/history/siasolutions')
            @include('partials/history/ableammo')

        </div>

    </div>

</div><!-- end hello -->

@stop
