@extends('layouts.wedding_ring')

@section('title','回答集の修正')

@include('components.common.head')

@include('components.common.header')

@include('components.answers.answer_edit',['item' => $item])

@section('pageJs')
<script type="text/javascript" src="../js/add_jquery.js"></script>
<script type="text/javascript" src="../js/click_func.js"></script>
@endsection

@include('components.common.footer')
