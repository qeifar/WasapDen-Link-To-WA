@extends('layouts.app')

@section('htmlheader_title')
Whatapps
@endsection

@section('contentheader_title')
@yield('htmlheader_title')
@endsection

@section('content')
<section class="content-header">
    <h1>
        @yield('contentheader_title', '')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Kemaskini Whatapps</a></li>

    </ol>
</section>
<br><br>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="box box-primary">
            <div class="box-body ">
                <br>
        <div class="col-md-8 well">
            {!! Form::model($models, ['route' => ['whatsapp.update', $models->id],'method'=>'PUT']) !!}
            
            @include('whatsapp._form')
            
           
            {!! Form::close() !!}
        </div>
       
            </div></div></div>
</div>


@endsection
