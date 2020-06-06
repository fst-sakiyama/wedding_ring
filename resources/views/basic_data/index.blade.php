@extends('layouts.wedding_ring')

@section('title','基本情報一覧')

@include('components.common.head')

@include('components.common.header')

@include('components.basic_data.basic_datum_index',['items' => $items])

@section('pageJs')
<script type="text/javascript" src="js/add_jquery.js"></script>
<script type="text/javascript" src="js/caution_jquery.js"></script>
@endsection

@include('components.common.footer')
