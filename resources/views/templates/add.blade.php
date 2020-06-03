@extends('layouts.wedding_ring')

@section('title','テンプレートの新規登録')

@include('components.common.head')

@include('components.common.header')

@include('components.templates.template_add',['items'=>$items])

@section('pageJs')
<script type="text/javascript" src="js/add_jquery.js"></script>
<script type="text/javascript" src="js/caution_jquery.js"></script>
@endsection

@include('components.common.footer')
