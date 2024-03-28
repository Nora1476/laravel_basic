@extends('layouts.app')

@section('content')
<div class="container board">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Board show Page</h2>

            <a href="{{ route('boards.index')}}">목록</a>

            <table>
              <tr>
                <th>제목</th>
                <td>{{$board -> subject}}</td>
              </tr>

              <tr>
                <th>내용</th>
                <td>{{$board -> contents}}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
