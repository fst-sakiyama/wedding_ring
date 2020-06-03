@extends('layouts.wedding_ring')

@section('title','分類一覧')

@include('components.common.head')

@include('components.common.header')

@include('components.classes.class_index',['items' => $items])

@include('components.common.footer')
