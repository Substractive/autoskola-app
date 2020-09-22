<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdministrationPolicy{

    use HandlesAuthorization;

    const POLICY_NAMESPACE = 'user';

    const ACTION_DASHBOARD = 'dashboard';

    const METHOD_DASHBOARD = 'dashboard';


    public function dashboard(User $user){

        if($user->checkUserType("admin") || $user->checkUserType("superadmin")){
            return true;
        }

        return false;
    }
}
