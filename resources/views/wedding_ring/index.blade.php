@extends('layouts.wedding_ring')

@section('title','トップページ')

@include('components.common.head')

@include('components.common.header')

@include('components.wedding_ring.wedding_ring_index',['className'=>$className,'ringClass'=>$ringClass])

@section('pageJs')
<script type="text/javascript" src="js/add_jquery.js"></script>
<script type="text/javascript" src="js/caution_jquery.js"></script>
<script type="text/javascript" src="js/click_func.js"></script>
@endsection

@include('components.common.footer')
