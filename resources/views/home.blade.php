@extends('layouts.app1')
@section('navber')
  @include('inc.nav')
@endsection
@section('loginmodel')
  @include('inc.log_reg')
@endsection
@section('slogan')
  @include('inc.slogan')
@endsection
@section('content')
  @include('inc.home_cat')
@endsection
@section('divider')
  @include('inc.homediv')
@endsection
<?php $name =1; if ($name==1): ?>
  @section('product')
    @include('inc.cat')
  @endsection
<?php else: echo "just checking thingss out"; ?>

<?php endif; ?>
@section('footer')
  @include('inc.footer')
@endsection
