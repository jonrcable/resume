@extends('layouts/default')

{{-- Page title --}}
@section('title')
@parent
Jon Cable - Resume Music
@stop

{{-- Meta description --}}
@section('meta-description')
Online Resume - Jon Cable - Music
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
                        <p>music</p>
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
<div id="shop-banners">
    <div class="container">
        <div id="hello">
            <div class="row">
                <div class="head-offset col-sm-3">
                    <div class="circular-bar">
                        <input type="text" class="dial" data-fgColor="#e74c3c" data-width="200" data-height="200" data-linecap="round" value="100">
                        <span class="icon-radio" style="margin-left: 85px"></span>
                    </div>
                </div>
                <div class="col-sm-9">
                    <h2 class="section-title mbottom20 mtop30">_Cultural_Overview ($_music)</h2>
                    <div class="separator mtop30 mbottom10"></div>
                    <p class="mbottom40">
                        Music has always been a passionate part of my life. If you ask the many musicians that surrond me they will have many testaments but will likely joke they have never actually heard me play an instrument. Somewhere immersed in music culture surrounded by talented musicians for most of my adult life I learned to move to the beat of a different drummer. My involvement in the following social music projects has been an amazing experience and stamps a lasting imprint on my web and management portfolio. It has been a journey full of amazing family, friends and fans with lessons that will have lasting roots in my life.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-3">

                @include('partials/sidebars/music')
                @include('partials/sidebars/me')
                @include('partials/tags/music')

            </div>

            <div class="page-content mtop30 col-sm-9">

                    @include('partials/music/substance')

                <div class="row mtop5 mright5 mleft5">
                <p>In 1999 two friends and I founded an underground music organization Everyday Junglist (EDJ) the idea was simply to share our passion for the genre Drum and Bass. Little did we know for the next 15 years we would nurture an organic community capable of sharing the ideas and sounds of its underground culture in Texas. When we moved to Austin in 04′ interest spiked and grew to almost 17 members/artists, as a collective we quickly started hosting/booking monthly, weekly and headliner performances. For the last decade EDJ has held one of the longest standing Drum and Bass monthlies in the United States, join us @ Plush at the corner of 7th and RedRiver every Tuesday night.
                    <br /><span class="blockquote-left center" style="margin-left: -30px;"><img src="images/resume/music/web_radiotest_sm.png" alt="" /> </span><br />EDJ grew to almost 1500 members who shared over 500GB of media about its culture. It represented the contributed effort of thousands of lines of custom PHP/Perl that has reached millions of artists/fans from across the globe. Its was a truly inspiring journey to lead EDJ’s progression and I feel truly blessed to have been surrounded by so many talented artists and friends from across the globe!
                    <br /><span class="blockquote-right center" style="margin-right: -30px;"><img src="images/resume/music/web_working_sm.png" alt="" />  </span><br />In 2014 we decided after 15 years running EDJ that we wanted to take a new approach and build on the music culture with a more diverse range of productions. SUBstanceTX was born as a way to continue to express our music influences in a thriving music culture without deconstructing such a stapled brand in DnB culture. As the electronic music industry evolves rapidly in today’s markets the opportunity diversify our production portfolio has never been better. SXSW 2015 was our launch of Bassdrive Sessions and was meet with a huge support from the Texas scene. Expect big things from SUBstanceTX as we continue to push the bass culture in Texas to new limits. </p>
                </div>
            </div>

        </div>

    </div><!-- end hello -->
</div>

@stop