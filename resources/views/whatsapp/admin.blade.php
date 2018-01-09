@extends('layouts.app')


@section('contentheader_title')
Tukar whatapps invite ke link
@endsection

@section('content')


<div class="box-body ">
    @if(Session::has('flash_message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('flash_message') }}
        </div>
    @endif
</div>
<div class="table-responsive">
 

<table id="" class="table table-hover">
    <thead>
        <tr><th><i class="fa fa-home fa-fw" aria-hidden="true"></i></th>
            <th>ID</th>
           {{--  <th>WA ID</th>--}}
            <th>TEXT</th>
            <th>PHONE</th>
           {{--  <th>USERID</th>--}}
            <th> Salin dan Share</th><th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
       @foreach($models as $m)
        <tr>
            <td><i class="fa fa-book fa-fw" aria-hidden="true"></i></td>
            <td>{{$m->id}}</td>
           {{-- <td>$m->wa_id</td>--}}
            <td>{{$m->text}}</td>
            <td>{{$m->phone}}</td>
            {{-- <td>{{$m->user_id}}</td>--}}
            <td>{{ url('link/')}}/{{$m->wa_id}}</td>
            <td>
                <span class="pull-left">
                <a class="btn bg-primary btn-sm " style="color:white;" href="{{ url('link/')}}/{{$m->wa_id}}"><i class="fa fa-eye"></i>&nbsp;Terus ke Link</a>
                
                    <a class="btn bg-maroon btn-sm " href="{{ route('whatsapp.edit', $m) }}"><i class="fa fa-pencil"></i>&nbsp;Kemaskini</a>
                    {{--
                    {{ Form::open([ 'method'  => 'delete', 'route' => [ 'whatsapp.destroy', $m ], 'style'=>'display:inline-block' ]) }}
                        {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i> Hapus', array('type' => 'submit', 'class' => 'btn btn-danger btn-sm')) !!}
                    {{ Form::close() }}
                    --}}
                </span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table><a href="{{ url('whatsapp/')}}/create">
<i class="fa fa-plus-circle fa-4x" style="color:royalblue" aria-hidden="true"></i>
</a>
<div class="row ">


</div>

</div>
<script>

</script>
  @endsection
