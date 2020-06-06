@extends('layout')

@section('content')

    <form method="post" action="{{ route('store') }}">
        @csrf
        
        <textarea name="content" rows="4"></textarea>

        @if($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
        <button type="submit">作成</button>
        <a href="{{ route('index') }}">キャンセル</a>
    </form>
@endsection