@extends('layout')

@section('content')

    <form method="post" action="{{ route('update', ['id'=>$memo->id]) }}">
        @csrf
        
        <textarea name="content" rows="4">{{ $memo->content }}</textarea>
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
        <button type="submit">更新</button>
        <a href="{{ route('index') }}">キャンセル</a>
    </form>
@endsection