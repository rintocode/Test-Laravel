<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use DataTables;
use Illuminate\Support\Carbon;


class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query = Data::query();

            // Filter by Mesin_id
            if ($request->has('mesin_id') && !empty($request->get('mesin_id'))) {
                $query->where('mesin_id', $request->get('mesin_id'));
            }

            // Filter by month of submit_when
            if ($request->has('submit_when') && !empty($request->get('submit_when'))) {
                $query->where('submit_when', $request->get('submit_when'));
            }

            $data = $query->latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $editUrl = route('dashboard', $row->id);
                    $actionBtn = '<a href="'.$editUrl.'" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">Edit</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('dashboard');
    }
}
