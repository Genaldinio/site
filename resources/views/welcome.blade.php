@extends('layouts.app')

@section('title-block')
Home
@endsection

@section('content')
<h1>Главная страница</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic labore, soluta vitae maxime maiores placeat? Omnis harum animi vel voluptates deserunt? Libero, similique sapiente! Eos doloribus voluptate optio voluptatibus pariatur.</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection

