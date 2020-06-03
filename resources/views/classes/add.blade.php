@extends('layouts.wedding_ring')

@section('title','分類の新規作成')

@include('components.common.head')

@include('components.common.header')

@include('components.classes.class_add',['item'=>$item])

@include('components.common.footer')
