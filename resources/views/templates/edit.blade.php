@extends('layouts.wedding_ring')

@section('title','テンプレートの修正')

@include('components.common.head')

@include('components.common.header')

@include('components.templates.template_edit',['item'=>$item,'classes'=>$classes])

@section('pageJs')
<script type="text/javascript" src="js/add_jquery.js"></script>
<script type="text/javascript" src="js/caution_jquery.js"></script>
@endsection

@include('components.common.footer')
