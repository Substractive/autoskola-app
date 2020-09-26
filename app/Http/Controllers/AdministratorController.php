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
use App\Repositories\Contracts\AdminRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdministratorController extends Controller{

    private $administratorRepository;

    public function __construct(AdminRepositoryInterface $administratorRepository){
        $this->administratorRepository = $administratorRepository;
    }

    public function index(){
        $administrators = $this->administratorRepository->getAdministrators();
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
        $school_data = $request->input("school");

        $administrator_rules = [
            UserInterface::KEY_EMAIL => "required|email",
            UserInterface::KEY_NAME => "required|string",
            UserInterface::KEY_PASSWORD => "required|string",
        ];

        if(isset($administrator_data[UserInterface::KEY_ID]))
            $administrator_rules[] = [UserInterface::KEY_ID => "required|exists:users"];

        $administrator_error_messages = [
            UserInterface::KEY_EMAIL .'.'.'required' => 'E-pošta je obavezna',
            UserInterface::KEY_NAME .'.'.'required' => 'Ime je obavezno',
            UserInterface::KEY_PASSWORD .'.'.'required' => 'Lozinka je obavezna',
        ];

        $administratorValidator = Validator::make($administrator_data, $administrator_rules, $administrator_error_messages);

        if($administratorValidator->fails()){
            $errors = [];
            foreach ($administratorValidator->errors()->all() as $error) {
                $errors[] = $error;
            }
            $error_message = implode(' ', $errors);
            return redirect()->back()->with("error", $error_message);
        }

        $school_error_messages = [
            School::KEY_ID .'.'.'required' => 'Škola je obavezna',
            School::KEY_ID .'.'."exists" => "Škola ne postoji"
        ];

        $school_rules = [
            School::KEY_ID => "required|exists:schools"
        ];

        $schoolValidator = Validator::make($school_data,$school_rules, $school_error_messages);

        if($schoolValidator->fails()){
            $errors = [];
            foreach ($schoolValidator->errors()->all() as $error) {
                $errors[] = $error;
            }
            $error_message = implode(' ', $errors);
            return redirect()->back()->with("error", $error_message);
        }

        $this->administratorRepository->saveAdministrator($administrator_data, School::find($school_data[SchoolInterface::KEY_ID]));

        return redirect()->back()->with("success", __("Spremljeno"));
    }

}
