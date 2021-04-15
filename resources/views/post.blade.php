@extends('layout')

@section('content')
    <h1>Primeiro Post</h1>

    @if ($nome == "lisa")
        <h2>{{ $nome }}</h2>
    @endif

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et qui dignissimos eveniet illo doloremque similique optio pariatur? Repellat, optio est quidem quis ad, id asperiores vero totam dolorum in harum.</p>
@endsection

