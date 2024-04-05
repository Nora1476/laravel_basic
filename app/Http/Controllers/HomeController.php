<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 * @return \Illuminate\Http\JsonResponse
	 */


	public function index(Request $request)
	{
		// return '라우터 통신 성공';
		// ajax 요청이 있을 경우에만 데이터 제공
		if ($request->ajax()) {
			//데이터베이스에서 'Board' 모델의 모든 레코드를 검색하여 그 결과를 $data 변수에 할당
			$data = Board::select('*');

			return DataTables::of($data)
				->addIndexColumn()
				->addColumn('created_at_formatted', function ($document) {
					// Format the created_at column using MySQL date_format
					return $document->created_at->format('Y-m-d');
					// Change the format as needed
				})
				->addColumn('action', function ($row) {
					$actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
					return $actionBtn;
				})
				->rawColumns(['action'])
				->make(true);
		}
		return view('home');
	}
}
