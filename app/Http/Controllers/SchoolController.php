<?php
/**
 * Created by PhpStorm.
 * User: Dino
 * Date: 23.9.2020.
 * Time: 17:02
 */


namespace App\Http\Controllers;

use App\Models\Contracts\SchoolInterface;
use App\Models\School;
use Illuminate\Support\Facades\Request;

class SchoolController extends Controller{


    public function index(){
        $schools = School::where(School::KEY_ACTIVE,School::STATUS_ACTIVE)->get();
        return view('admin.school.index',[
            'schools' => $schools
        ]);
    }

    public function skola(SchoolInterface $school){
        dd($school);
    }

}
