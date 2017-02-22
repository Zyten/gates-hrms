<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffLeave extends Model
{
	protected $table = 'staff_leaves';
    protected $primaryKey = "id";

	protected $fillable = [
        'application_date', 'leave_from', 'leave_to',  'duration', 'is_approved', 'approval_date', 'leave_reason', 'user_id', 'leave_type',
    ];	
}