{{-- layout extend --}}
@extends('layouts.contentLayoutMaster')

{{-- Page title --}}
@section('title','Chat')

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-chat.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

{{-- main page content --}}
@section('content')

@if (count($errors)>0)

<div class="alert alert-danger">

  <ul>
  @foreach ($errors->all() as $error)
  

  <li>
    {{$error}}
  </li>

  @endforeach
  </ul>
</div>
  
@endif

<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Add New Service</h4>

  

        {!! Form::model($services,['method'=>'Patch', 'action'=>['App\Http\Controllers\ServicesController@update',$services->id] ,'class'=>'forms-sample row', ]) !!}


       
        {{-- <input type="hidden" name="_method" value="PUT"> --}}

        <div class="form-group col-md-6">

          {!! Form::label('name','Item Name') !!}
          {!! Form::text('name', null,['class'=>'form-control', 'placeholder' => 'e.g. Rice, Mango', 'required' => 'required'] ) !!}

        
        </div>


        <div class="form-group col-md-6">

          
          {!! Form::label('status','status') !!}
          {!! Form::select('status',['Live' => 'Live', 'Offline' => 'Offline'], null, [ 'placeholder' => 'Please Select','required' => 'required']) !!}
         
          </div>
          <div class="form-group col-md-6">

            {!! Form::label('created_from','Created From') !!}
            {!! Form::select('created_from',['Mobile' => 'Mobile', 'Web' => 'Web'], null, [ 'placeholder' => 'Please Select','required' => 'required']) !!}


            </div>


            <div class="form-group col-md-6">


            {!! Form::label('description','Description') !!}
            {!! Form::text('description', null,['class'=>'form-control', 'placeholder' => 'Write Desccription', 'required' => 'required'] ) !!}

            </div>
            <div class="form-group col-md-6">

          {!! Form::label('price','Price') !!}
          {!! Form::number('price', null, ['class' => 'form-control','min'=>1,'max'=>999999999, 'placeholder' => 'Price', 'step' => '1']) !!}
        
        </div>


        <div class="form-group col-md-6">

          
          {!! Form::label('currency','Currency') !!}
          {!! Form::number('currency', null, ['class' => 'form-control','min'=>1,'max'=>999999999, 'placeholder' => 'currency', 'step' => '1']) !!}
        
   
          </div>
          <div class="form-group col-md-6">
          {!! Form::label('purchase','Purchase') !!}
          {!! Form::number('purchase', null, ['class' => 'form-control','min'=>1,'max'=>999999999, 'placeholder' => 'purchase', 'step' => '1']) !!}
        

            </div>


            <div class="form-group col-md-6">
          {!! Form::label('edited_purchase','Edited Purchase') !!}
          {!! Form::number('edited_purchase', null, ['class' => 'form-control','min'=>1,'max'=>999999999, 'placeholder' => 'Edited purchase', 'step' => '1']) !!}
        

            </div>
            <div class="form-group col-md-6">

          {!! Form::label('creatted_by','Created By') !!}
          {!! Form::number('creatted_by', null, ['class' => 'form-control','min'=>1,'max'=>999999999, 'placeholder' => 'Created By', 'step' => '1']) !!}
        
        
        </div>

          <div class="form-group col-md-6">

            {!! Form::label('Offered_by','Offered By') !!}
            {!! Form::text('Offered_by', null,['class'=>'form-control', 'placeholder' => 'Offered By', 'required' => 'required'] ) !!}


            </div>


            <div class="form-group col-md-6">


            {!! Form::label('date','Date') !!}
            {!! Form::date('date', new DateTime(), ['class'=>'form-control', 'required' => 'required']) !!}
            </div> 


        <div class="form-group col-md-12">

          {!! Form::submit('Change', ['class'=>'btn btn-success mr-2']) !!}
          
        </div>

      {!! Form::close() !!}
      </form>
        {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\ServicesController@destroy',$services->id] ]) !!}

        

        {!! Form::submit('Delete', ['class'=>'btn btn-danger mr-2']) !!}

        {!! Form::close() !!}

   
    </div>
  </div>

   




@endsection


{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/app-chat.js')}}"></script>
@endsection