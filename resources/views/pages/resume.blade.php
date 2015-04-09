@extends('layouts/default')

{{-- Page title --}}
@section('title')
@parent
Jon Cable - Home
@stop

{{-- Meta description --}}
@section('meta-description')
Online Resume - Jon Cable - Home
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
                </ul>
            </div>
        </div>
    </div>
</div><!-- end header-breadcrumb -->
@stop

{{-- Page Tagline --}}
@section('tagline')

@include('partials/tag')

<div class="container">

    <div class="row mbottom20">

        <div class="col-sm-3">
            <div class="services-box">
                <h3>Seasoned open source architect with a passion for creativity</h3>
                <img src="images/main_aboutme.jpg" alt="" class="img-responsive center-block mtop20" />

                <p>The purpose of this site is to give people an opportunity to learn more about my interests, projects and goals. The focus is primarily on highlighting my professional technical skills however much of my personal life experience has been impacted from managing and organizing entertainment collectives. This site hopes to encompass over a decade of experience in web and music production. Happy browsing, <a href="/contact">contact me</a> if you have question or comments. </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="services-box">
                <h3>Teaching Raspberry Pi Summer Bootcamps For Young Adults</h3>
                <img src="images/roundrock_library_raspberrypi.jpg" alt="Round Rock Library" class="img-responsive center-block mtop20" />

                <p>During the summers I teach at risks teens about the wonders of Pi. Thanks to a grant from the State of Texas I helped the Round Rock library purchase Raspberry Pi’s and develop a program to not only introduce the Pi to students but also allow them to check out entire builds including a monitor, keyboard and mouse for those who may not have access to a computer at home. The program runs 8 weeks and teaches the basics of hardware, systems and programming. </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="services-box">
                <h3>Fun exploring the world of ARM and Micro-controllers</h3>
                <img src="images/main_piprojects.jpg" alt="Raspberry Pi Projects" class="img-responsive center-block mtop20" />

                <p>I have been working with both the Raspberry Pi and Arduino Controllers mostly as fun projects to play with up and coming technologies. I built two fairly interesting projects with ARM based controllers. The first was a Pi based projector using a small pico laser projector and HDMI to Analog converter to produce the 1024x768 RGB projections. The last project I built used a small 4in touch screen to interact with jQTouch in a headless version of the linux Chromium browser. </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="services-box">
                <h3>More then a decade showcasing local and international artists</h3>
                <img src="images/sxsw2015_bassdrivesessions_substancetx.jpg" alt="SubstanceTX Presents" class="img-responsive center-block mtop20" />

                <p>Music is the other passion that has heavily influenced my professional career. As one of the founders of the Everyday Junglist collective and most recently co-owner of SubstanceTX entertainment, I have been organizing events for over a decade. I have worked with thousands of musicians from all over the world, worked with hundreds of business owners and been able to directly contributed to Austin’s diverse musical landscape. Best part, I’m not a musician. </p>
            </div>
        </div>

    </div>


</div><!-- end hello -->

@stop