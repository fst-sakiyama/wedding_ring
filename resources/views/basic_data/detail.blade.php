@extends('layouts.wedding_ring')

@section('title','基本情報詳細')

@include('components.common.head')

@include('components.common.header')

@include('components.basic_data.basic_datum_detail',['item' => $item])

@section('pageJs')
<script type="text/javascript" src="../js/click_func.js"></script>
@endsection

@include('components.common.footer')
