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
use App\Models\User;
use Illuminate\Http\Request;

class AdministratorController extends Controller{

    public function index(){
        $administrators = User::where(UserInterface::KEY_TYPE, UserInterface::TYPE_ADMIN)->get();
        return view('admin.administrators.index',[
            "administrators" => $administrators
        ]);
    }

    public function create(){
        return view('admin.administrators.create');
    }

    public function update(UserInterface $admin){
        return view('admin.administrators.update');
    }

    public function store(Request $request){
        $administrator_data = $request->input("administrator");
        dd($administrator_data);
    }

}
