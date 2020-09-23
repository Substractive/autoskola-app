<?php

use App\Policies\AdministrationPolicy;
use App\Policies\SchoolPolicy;
?>

skola
<li class="nav-item">
    <a class="nav-link collapsed" href="{{route('skola',1)}}">
        <i class="fas fa-fw fa-school"></i>
        <span>{{__("Škola")}}</span>
    </a>
</li>
