@component('components.header')
    @slot('title')
    教育課題4(MVC基礎)
    @endslot
@endcomponent

@extends('layouts.app')
@section('content')
    <div class="content">
        <h2 class="title_002">社員コードとパスワードを入力してください。</h2>
        <form method="POST" action="/top">
            {{ csrf_field() }}
            <div class="textBox">
                <label>社員コード</label>
                <input type="text" name="employeeCode" placeholder="employee code">
                @error('code')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="textBox">
                <label>パスワード</label>
                <input type="password" name="password" placeholder="password">
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <p>
                <input type="submit" value="ログイン">
            </p>
        </form>
    </div>
@endsection
