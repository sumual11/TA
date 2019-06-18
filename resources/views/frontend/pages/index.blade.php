@extends('frontend.layouts.app')

@section('header')

  @include('frontend.items.header')

@endsection

@section('content')
  
  <!-- About Section -->
  @include('frontend.items.about')
  <!-- Services Section -->
  @include('frontend.items.service')
  <!-- Portfolio Section -->
  @include('frontend.items.portofolio')
  <!-- Download Section -->
  @include('frontend.items.download')
@endsection
