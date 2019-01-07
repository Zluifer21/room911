@extends('home.layout')
@section('content')
<div class="container">
  <div class="title">Filters</div>
  <div class="row">
    <div class="card">
    <div class="card-content filters">
    <div class="input-field col s12 l3">
      {!! Form::select('departament_id', $departaments, old('afectaciones'), array()) !!}
      <label for="icon_prefix">Departament</label>
    </div>

    <div class="input-field col s12 l3">
      {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
     <label for="icon_prefix" class="active">First Name </label>
    </div>

  <div class="input-field col s12 l3">
     {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
     <label for="icon_prefix" class="active">Lastname</label>
   </div>

   <div class="input-field col s12 l3">
     {!! Form::text('employed_id', null, ['class' => 'form-control']) !!}
    <label for="icon_prefix" class="active">id</label>
  </div>

    <button class="btn waves-effect waves-light" id="filter">Apply</button>

  </div>
  </div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="card">
      <div class="card-content ">
        <div class="col l3">
          <a class="btn modal-trigger"  data-source="employees/create"  href="#modal1">New employed</a>
        </div>
        <table class="highlight responsive-table" id="data_table">
        </table>
      </div>
    </div>

  </div>
</div>
<div class="container">
  <div class="roww">
    <div class="col l6 offset-l6" id="loading">
      <div class="preloader-wrapper active">
      <div class="spinner-layer spinner-green-only">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection
