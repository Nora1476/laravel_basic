@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h2>Main Page</h2>

                <br />

                <a href="{{ route('boards.index') }}"> 글쓰기 </a>

                <br /> <br />


                <h3>Data Tables</h3>

                <div align="right">
                    <button type="button" name="create-record" id="reate_record" class="btn btn-success">
                        <i class="bi bi-plus-square"></i>글쓰기
                    </button>
                    <br><br>
                    <table class="table table-stripted table-bordered board_datatable">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>제목</th>
                                <th>내용</th>
                                <th>등록일자</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(function() {
        var table = $('.board_datatable').DataTable({
            paging: true,
            pageLength: 4,
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('home') }}",
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'subject',
                    name: 'subjects'
                },
                {
                    data: 'contents',
                    name: 'contents'
                },
                {
                    data: 'created_at_formatted',
                    name: 'created_at_formatted'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                },
            ]
        });
        table.on('draw', function() {

            console.log(table.data());
        })
    });
</script>
