<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\staffs;

class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $perPage = 10;$search = $request->get('search');        
        if (!empty($search)) {
//กรณีมีข้อมูลที่ต้องการ search จะมีการใช้คำสั่ง where และ orWhere
            $Staffs = staffs::where('#', 'LIKE', "%$search%")
                ->orWhere('Name', 'LIKE', "%$search%")
                ->orWhere('Age', 'LIKE', "%$search%")
                ->orWhere('salary', 'LIKE', "%$search%")
                ->orWhere('Phone', 'LIKE', "%$search%")
                ->orderBy('active', 'desc')->paginate($perPage);
        } else {
//กรณีไม่มีข้อมูล search จะทำงานเหมือนเดิม
            $Staffs = staffs::orderBy('#', 'desc')->paginate($perPage);
        }  

      return view('Staff/index' , compact('Staff') );
    }
}