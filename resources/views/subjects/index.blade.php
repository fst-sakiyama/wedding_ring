@extends('layouts.wedding_ring')

@section('title','件名一覧')

@include('components.common.head')

@include('components.common.header')

@include('components.subjects.subject_index',['items' => $items,'deleted'=>$deleted,'className'=>$className,'ringClass'=>$ringClass])

@section('pageJs')
<script type="text/javascript" src="js/add_jquery.js"></script>
<script type="text/javascript" src="js/click_func.js"></script>

@endsection

@include('components.common.footer')
