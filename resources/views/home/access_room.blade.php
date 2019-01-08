@extends('home.layout')
@section('content')
<div class="container" id="access">
  <div class="row">
    <div class="">
      {!! Form::open(['url' => 'access_room','id'=>'frm_access']) !!}
      <div class="input-field col s12 l4">
        {!! Form::text('employed_id', null, ['class' => 'form-control']) !!}
       <label for="icon_prefix" class="active">id</label>
       <div class="input-field">
         <button class="btn waves-effect waves-light" >Access</button>
       </div>
     </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
