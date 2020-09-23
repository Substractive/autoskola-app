<?php
/**
 * Created by PhpStorm.
 * User: Dino
 * Date: 23.9.2020.
 * Time: 16:58
 */



namespace App\Policies;

use App\Models\Contracts\SchoolInterface;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SchoolPolicy{

    use HandlesAuthorization;

    const POLICY_NAMESPACE = 'school';

    const ACTION_SKOLA = 'skola';
    const ACTION_SKOLE = 'skole';

    const METHOD_SKOLA = 'skola';
    const METHOD_SKOLE = 'skole';


    public function skole(User $user){
        if($user->checkUserType("superadmin")){
            return true;
        }

        return false;
    }

    public function skola(User $user, SchoolInterface $school){
        dd($school);
        if($user->checkUserType("admin")){
            return true;
        }
        return false;
    }
}
