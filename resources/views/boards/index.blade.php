@extends('layouts.app')

@section('content')
<div class="container board">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Board Page</h2>

            <form class="board_frm" method="POST" action="{{ route('boards.store') }}">
              @csrf
              <table class="board_tb">
                <tr>
                  <th>제목</th>
                  <td>
                    <input type="text" name="subject" value=""/>
                  </td>
                </tr>
                <tr>
                  <th>내용</th>
                  <td>
                    <textarea name="contents" rows="5"></textarea>
                  </td>
                </tr>
                <tr class="btn">
                  <td colspan="2">
                    <button type="submit">저장</button>
                  </td>
                </tr>
              </table>
            </form>
            
            <br>

            <table >
              <tr>
                <th>No</th>
                <th>제목</th>
                <th>내용</th>
                <th>관리</th>
              </tr>

              @foreach ($lists as $list) 
              <tr>
                <td>{{ $list -> id }}</td>
                <td>{{ $list -> subject }}</td>
                <td>{{ $list -> contents }}</td>
                <td>
                  <a href="{{ route('boards.show', $list->id) }}"> 보기 </a>
                  <a href="{{ route('boards.edit', $list->id) }}"> 수정 </a>
                  <form action="{{ route('boards.destroy', $list->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"> 삭제 </button>
                  </form>
                </td>
              </tr>
              @endforeach

            </table>
            


          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
