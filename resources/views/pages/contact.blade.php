@extends('layouts/default')

{{-- Page title --}}
@section('title')
@parent
Jon Cable - Resume Contact
@stop

{{-- Meta description --}}
@section('meta-description')
Online Resume - Jon Cable - Contact
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
                        <p>contact</p>
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
                    <span class="icon-mail-send" style="margin-left: 85px"></span>
                </div>
            </div>
            <div class="col-sm-9">
                <h2 class="section-title mbottom20 mtop30">_About_Me ($_contact)</h2>
                <div class="separator mtop30 mbottom10"></div>
                <p class="mbottom40">
                    I am currently available for employment and consulting opportunities. I love working with excited professionals on projects with fun, creative and unique concepts. I look forward to hearing about your ideas and projects! If you have made it this far and still have questions let me know.
                </p>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-3">

            @include('partials/sidebars/contact')
            @include('partials/sidebars/me')
            @include('partials/tags/contact')

        </div>

        <div class="col-sm-9">

            @if(Session::has('message'))
            <h2 class="romanesco-title mtop30">
                {{Session::get('message')}}
            </h2>
            @elseif (count($errors) > 0)
                @foreach($errors->all() as $error)
                <h2 class="romanesco-title mtop30">
                    $message->error['{{ $error }}']
                </h2>
                @endforeach
            @endif

            <div id="map" class="mbottom30 mtop30">
            </div><!-- end map -->
            <div class="separator mbottom20"><a name="_email"></a></div>

            <div class="blog-reply">
            {!! Form::open(array('route' => 'send', 'class' => 'comments-form br-form')) !!}
                <h2 class="section-title mbottom50">Leave a message</h2>
                    <div class="form-row">
                        <div class="form-line half">
                            {!! Form::text('contact_name', null,
                            array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Full Name')) !!}
                        </div>
                        <div class="form-line half">
                            {!! Form::text('contact_email', null,
                            array('required',
                            'class'=>'form-control',
                            'placeholder'=>'E-mail address')) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-line full">
                            {!! Form::text('contact_subject', null,
                            array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Subject')) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-line full">
                            {!! Form::textarea('contact_message', null,
                            array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Message')) !!}
                        </div>
                    </div>
                    {!! Form::submit('Send Message', array('class' => 'btn btn-default mbottom50')) !!}
                {!! Form:: close() !!}
            </div>

        </div>

    </div>

</div><!-- end hello -->

@stop