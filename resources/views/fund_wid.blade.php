@extends('layouts.app1')
@section('navber')
  @include('inc_in.das_nav')
@endsection
@section('loginmodel')
  @include('inc.log_reg')
@endsection
@section('sideber')
  @include('inc_in.profile_sid')
@endsection
@section('content')
  @include('inc_in.pro_tran')
@endsection