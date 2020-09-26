<?php

namespace App\Repositories\Contracts;


use App\Models\Contracts\SchoolInterface;

interface AdminRepositoryInterface{

    public function getAdministrators();
    public function saveAdministrator($admin_data, SchoolInterface $school);

}
