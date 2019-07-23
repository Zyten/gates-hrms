<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN = 1;
    const SUPERVISOR = 2;
    const STAFF = 3;
}
