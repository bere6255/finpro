@extends('layouts.app1')
@section('navber')
  @include('inc_in.das_nav')
@endsection
@section('loginmodel')
  @include('inc.log_reg')
@endsection
@section('sideber')
  @include('inc_in.das_sidber')
@endsection
@section('content')
  @include('inc.payment.pay')
@endsection
