@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
        
      <h2>Main Page</h2>
        
      <br/>

      <a href="{{ route('boards.index') }}"> 글쓰기 </a>


    </div>
  </div>
</div>
@endsection
