<?php
/**
 * Created by PhpStorm.
 * User: Dino
 * Date: 23.9.2020.
 * Time: 16:58
 */



namespace App\Policies;

use App\Models\Contracts\SchoolInterface;

use App\Models\Contracts\UserInterface;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy{

    use HandlesAuthorization;

    const POLICY_NAMESPACE = 'user';

    const ACTION_ADMIN = 'admin';
    const ACTION_PUPIL = 'pupil';
    const ACTION_ADMIN_UPDATE = "admin_update";


    const METHOD_ADMIN = 'admin';
    const METHOD_PUPIL = 'pupil';
    const METHOD_ADMIN_UPDATE = "adminUpdate";


    public function admin(UserInterface $user){
        if($user->checkUserType("superadmin")){
            return true;
        }

        return false;
    }

    public function pupil(UserInterface $user){
        if($user->checkUserType("admin")){
            return true;
        }

        return false;
    }

    public function adminUpdate(UserInterface  $user, UserInterface $admin){
        if($user->checkUserType("superadmin") || ($user->checkUserType("admin") && $user->getIdAttribute == $admin->getIdAttribute())){
            return true;
        }

        return false;
    }
}
