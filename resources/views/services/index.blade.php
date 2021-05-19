{{-- layout extend --}}
@extends('layouts.contentLayoutMaster')

{{-- Page title --}}
@section('title','Chat')

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-chat.css')}}">
@endsection

{{-- main page content --}}
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body" style="overflow: auto !important;">
        <h4 class="card-title">All Stock Entries</h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th></th>
              <th>Date</th>
              <th>Dealer</th>
              <th>Item </th>
              <th>Available Stock</th>
              <th>Quantity Sold</th>
              <th>Sale Price</th>
              <th>Quantity Received</th>
              <th>Received Stock Price</th>
              <th>Government Price</th>

            </tr>
          </thead>
          <tbody>

          

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