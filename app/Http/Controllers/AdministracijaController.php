<?php
/**
 * Created by PhpStorm.
 * User: Dino
 * Date: 22.9.2020.
 * Time: 12:43
 */
namespace App\Http\Controllers;

use App\Models\Contracts\SchoolInterface;
use Illuminate\Support\Facades\Request;

class AdministracijaController extends Controller{

    public function index(){
        return view('admin.dashboard');
    }

}
