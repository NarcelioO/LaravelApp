@extends('layouts.main')
@section('title', 'Products')
@section('content')
<h1>Products Page</h1>
<a href="/">back</a>
@if($search != '')
    <p>searching....</p>
@endif
@endsection