@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
<table width="80%">
    
    
    <tr>
        <td width="25% ">{!! Form::label('name', 'Phone')!!}</td>
        <td> {!!  Form::number('phone',null,['class'=>'form-control']) !!}</td>
    </tr>
     <tr>
        <td width="25% ">&nbsp;</td>
        <td> &nbsp;</td>
    </tr>
    <tr>
        <td width="25% ">{!! Form::label('text', 'Catatan')!!}</td>
        <td> {!!  Form::textarea('text',null,['class'=>'form-control']) !!}</td>
   
        
    </tr>
    
    {!!  Form::hidden('user_id',Auth::user()->id,['class'=>'form-control']) !!}
</table>
{!! Form::button('<i class="fa fa-floppy-o"></i>&nbsp;Simpan',['class'=>'btn btn-primary','type'=>'submit']) !!}
{!! Form::button('<i class="fa fa-refresh"></i>&nbsp;Set Semula',['class'=>'btn btn-warning','type'=>'reset']) !!}
<a href="{{url('projek')}}" class="btn btn-danger"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>

