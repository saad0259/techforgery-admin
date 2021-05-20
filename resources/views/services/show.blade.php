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
<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Service Information</h4>
     
        <div class="row">
            
          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Date:  </div>
          <div class="col-sm-4 my-2">{{$services->date}}</div>
          <div class="col-sm-4"></div>

          <div class="col-sm-4 mb-n1 font-weight-semibold my-2"> Name:  </div>
          <a class="col-sm-4 my-2" >{{$services->name}}</a>
          <div class="col-sm-4"> </div>

          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Status:   </div>
          <a class="col-sm-4 my-2" >{{$services->status}}</a>
          <div class="col-sm-4"> </div>

          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Created From:  </div>
          <div class="col-sm-4 my-2">{{$services->created_from}}</div>
          <div class="col-sm-4"></div>


          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Desccription:  </div>
          <div class="col-sm-4 my-2">{{$services->description}}</div>
          <div class="col-sm-4"></div>

          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Price:  </div>
          <div class="col-sm-4 my-2">{{$services->price}}</div>
          <div class="col-sm-4"></div>


          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Currency:  </div>
          <div class="col-sm-4 my-2">{{$services->currency}}</div>
          <div class="col-sm-4"></div>


          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Purchase:  </div>
          <div class="col-sm-4 my-2">{{$services->purchase}}</div>
          <div class="col-sm-4"></div>

          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Edited Purchase:  </div>
          <div class="col-sm-4 my-2">{{$services->edited_purchase}}</div>
          <div class="col-sm-4"></div>

          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Created By:  </div>
          <div class="col-sm-4 my-2">{{$services->creatted_by}}</div>
          <div class="col-sm-4"></div>

          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Offered By:  </div>
          <div class="col-sm-4 my-2">{{$services->Offered_by}}</div>
          <div class="col-sm-4"></div>

          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Date:  </div>
          <div class="col-sm-4 my-2">{{$services->date}}</div>
          <div class="col-sm-4"></div>



          <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">
              
          <a href="{{route('services.edit', $services->id)}}" class="btn btn-success mr-2">Edit Information</a>

        </div>




        </div>

        
     
    </div>
  </div>





@endsection


{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/app-chat.js')}}"></script>
@endsection