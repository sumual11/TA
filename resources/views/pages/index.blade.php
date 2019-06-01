@extends('layouts.app')

@section('header')

  @include('items.header')

@endsection

@section('content')
  
    <!-- About Section -->
  @include('items.about')
    <!-- Services Section -->
  @include('items.service')
  <!-- Portfolio Section -->
  @include('items.portofolio')
@endsection
