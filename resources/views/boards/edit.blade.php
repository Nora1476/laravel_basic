@extends('layouts.app')

@section('content')
<div class="container board">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Board edit Page</h2>

            <a href="{{ route('boards.index')}}">목록</a>

            <form action="{{ route('boards.update', $board->id) }}" >
              <table>
                <tr>
                  <th>제목</th>
                  <td>
                    <input type="text" name="subject" value="{{ $board->subject }}">
                  </td>
                </tr>

                <tr>
                  <th>내용</th>
                  <td>
                    <textarea name="contents">{{ $board ->contents }}</textarea>
                  </td>
                </tr>

                <tr>
                  <td colspan="2">
                    <button type="submit"> 수정 </button>
                  </td>
                </tr>
              </table>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
