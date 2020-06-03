@extends('layouts.wedding_ring')

@section('title','分類の修正')

@include('components.common.head')

@include('components.common.header')

@include('components.classes.class_edit',['item'=>$item])

@include('components.common.footer')
