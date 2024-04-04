@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h2>Main Page</h2>

                <br />

                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <h3>로그인시 글쓰기 가능합니다.</h3>
                            <a href="{{ route('boards.index') }}"> 글쓰기 </a>
                        @else
                            <h3>비회원 입니다.</h3>
                        @endauth
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
