@extends('layouts')

@section('title', 'Page Title')

@section('siderbar')
    @parent
    <p>This is append to the layouts siderbar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
