@component('components.header')
    @slot('title')
    教育課題2(blade基礎)
    @endslot
@endcomponent
@extends('layouts.body')
@section('content')
    <div class="content">
        <p>文字を入力してください。</p>
        <form method="POST" action="/output">
            {{-- laravelではPOST送信にトークンの設定が必要 --}}
            {{ csrf_field() }}
            <input type="text" name="text">
            <input type="submit" value="実行">
        </form>
    </div>
@endsection