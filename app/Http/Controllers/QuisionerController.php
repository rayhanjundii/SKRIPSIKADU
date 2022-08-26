<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quisioner;
use App\Models\Master\Staff;

class QuisionerController extends Controller
{
  public function index()
  {  
    $quisioner = Quisioner::all();  
    return view ('quisioner.index',[
        'quisioner' =>$quisioner
    ]);
  }

  public function create()
  { $data['title'] = "QUISIONER";
    $staff = Staff::all();
    return view ('quisioner.create',$data,[
        'staff'=>$staff,
        
    ]);
  }

  public function store(Request $request)
  { 
    $quisioner = Quisioner::create([
        'guru_id'=>$request->guru_id,
        'point1'=>$request->point1,
        'point2'=>$request->point2,
        'point3'=>$request->point3,
        'point4'=>$request->point4,
        'point5'=>$request->point5,
    ]);
    dd();
    return redirect()->route('quisioner')->with($message);

  }
}
