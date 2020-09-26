<?php

namespace App\Repositories;


use App\Models\Contracts\SchoolInterface;
use App\Models\Contracts\UserInterface;
use App\Models\User;
use App\Repositories\Contracts\AdminRepositoryInterface;

class AdministratorRepository implements AdminRepositoryInterface {

    public function getAdministrators()
    {
        return User::where(User::KEY_TYPE,User::TYPE_ADMIN)->get();
    }

    public function saveAdministrator($admin_data, SchoolInterface $school)
    {
        try{
            $user = new User();
            $user->setEmailAttribute($admin_data[UserInterface::KEY_EMAIL]);
            $user->setNameAttribute($admin_data[UserInterface::KEY_NAME]);
            $user->setPaswordAttribute($admin_data[UserInterface::KEY_PASSWORD]);
            $user->setTypeAttribute(UserInterface::TYPE_ADMIN);
            $user->save();

            $school->setAdministratorAttribute($user);
            $school->save();
        }catch (\Exception $exception){
            dd($exception->getMessage());
        }

    }
}
