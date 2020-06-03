@extends('layouts.wedding_ring')

@section('title','文面表示')

@include('components.common.head')

@include('components.common.header')

@include('components.bodys.body_index',['item' => $item])

@section('pageJs')
<script type="text/javascript" src="js/add_jquery.js"></script>
<script type="text/javascript" src="js/caution_jquery.js"></script>
@endsection

@include('components.common.footer')
