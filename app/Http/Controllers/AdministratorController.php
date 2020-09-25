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
use Illuminate\Support\Facades\Validator;

class AdministratorController extends Controller{

    public function index(){
        $administrators = User::where(UserInterface::KEY_TYPE, UserInterface::TYPE_ADMIN)->get();
        return view('admin.administrators.index',[
            "administrators" => $administrators
        ]);
    }

    public function create(){
        $schools = School::get();
        return view('admin.administrators.create',[
            "schools" => $schools
        ]);
    }

    public function update(UserInterface $admin){
        $schools = School::get();
        return view('admin.administrators.update',[
            'administrator' => $admin,
            "schools" => $schools
        ]);
    }

    public function store(Request $request){
        $administrator_data = $request->input("administrator");

        $administrator_rules = [
            UserInterface::KEY_EMAIL => "required|email",
            UserInterface::KEY_NAME => "required|string",
            UserInterface::KEY_PASSWORD => "required|string",
        ];

        if($administrator_data[UserInterface::KEY_ID])
            $administrator_rules[] = [UserInterface::KEY_ID => "required|exists:users"];

        $error_messages = [
            UserInterface::KEY_EMAIL .'.'.'required' => 'E-pošta je obavezna',
            UserInterface::KEY_NAME .'.'.'required' => 'Ime je obavezno',
            UserInterface::KEY_PASSWORD .'.'.'required' => 'Lozinka je obavezna',
        ];

        $administratorValidator = Validator::make($administrator_data, $administrator_rules, $error_messages);

        if($administratorValidator->fails()){
            $errors = [];
            foreach ($administratorValidator->errors()->all() as $error) {
                $errors[] = $error;
            }
            $error_message = implode(' ', $errors);
            return redirect()->back()->with("error", $error_message);
        }

        dd($administrator_data);
    }

}
