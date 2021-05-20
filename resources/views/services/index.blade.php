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

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body" style="overflow: auto !important;">
        <h4 class="card-title">All service Entries</h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th></th>
              <th>Date</th>
              <th>Name</th>
              <th>Status </th>
              <th>Created From</th>
              <th>Description</th>
              <th>Price</th>
              <th>Currency</th>
              <th>Purchase</th>
              <th>Editted By</th>
              <th>Creatted By</th>
              <th>Offereed By</th>

            </tr>
          </thead>
          <tbody>
          @foreach ($services as $service)
            
            <tr>
              <td><a href="{{route('services.show', $service->id)}}" class="btn btn-primary">View</a></td>
              <td>{{$service->date}}</td>  
              <td>   {{$service->name}} <a> </td>
                <td>  {{$service->status}} <a></td>
                <td>{{$service->created_from}} </td>
                <td>{{$service->description}} </td>
                <td>{{$service->price}}</td>
                <td>{{$service->currency}} </td>
                <td>{{$service->purchase}}</td>
                <td>{{$service->edited_purchase}}</td>
                <td>{{$service->creatted_by}}</td>
                <td>{{$service->Offered_by}}</td>
              
                
                
              </tr>
           

                
            @endforeach
          

          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/app-chat.js')}}"></script>
@endsection