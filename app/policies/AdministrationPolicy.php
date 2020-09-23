<?php

namespace App\Policies;

use App\Models\Contracts\SchoolInterface;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdministrationPolicy{

    use HandlesAuthorization;

    const POLICY_NAMESPACE = 'user';

    const ACTION_DASHBOARD = 'dashboard';
    const ACTION_SKOLA = 'skola';
    const ACTION_SKOLE = 'skole';

    const METHOD_DASHBOARD = 'dashboard';
    const METHOD_SKOLA = 'skola';
    const METHOD_SKOLE = 'skole';


    public function dashboard(User $user){

        if($user->checkUserType("admin") || $user->checkUserType("superadmin")){
            return true;
        }

        return false;
    }
}
