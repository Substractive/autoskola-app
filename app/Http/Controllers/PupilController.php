<?php
/**
 * Created by PhpStorm.
 * User: Dino
 * Date: 23.9.2020.
 * Time: 17:02
 */


namespace App\Http\Controllers;

use App\Models\Contracts\SchoolInterface;
use App\Models\Contracts\UserInterface;
use App\Models\School;
use Illuminate\Support\Facades\Request;

class PupilController extends Controller{

    public function index(){
        return "pupil index";
    }

    public function create(){
        return view('admin.school.create');
    }

    public function update(UserInterface $pupil){
        dd($pupil);
    }

}
