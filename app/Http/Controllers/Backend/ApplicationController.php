<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Validator;
use Input;
use Session;
use Redirect;
use Carbon;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use App\Models\StaffLeave;
use App\Models\LeaveType;
use App\Models\User;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffLeaves = \DB::table(\DB::raw("
            staff_leaves sl
            inner join users u on u.id = sl.user_id
            "))
        ->selectRaw("
            u.full_name,
            sl.id,
            sl.application_date,
            sl.leave_from,
            sl.leave_to,
            sl.leave_type,
            sl.duration,
            sl.is_approved,
            sl.leave_reason")
        ->get();

 
        return \View::make('backend.application.list', array('staffLeaves'=>$staffLeaves));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staffLeave = \DB::table(\DB::raw("
            staff_leaves sl
            inner join users u on u.id = sl.user_id
            "))
        ->selectRaw("
            u.full_name,
            sl.id,
            sl.application_date,
            sl.leave_from,
            sl.leave_to,
            sl.leave_type,
            sl.duration,
            sl.is_approved,
            sl.leave_reason")
        ->where('sl.id', $id)->first();

        // return view('backend.leave.view');
        return \View::make('backend.application.view', array('staffLeave'=>$staffLeave));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approve($id)
    {
        StaffLeave::where('id', $id)->update(['is_approved' => 1, 'status' => 'Approved', 'approved_by' => Auth::user()->full_name, 'approval_date' => Carbon::now()->format('Y/m/d')]);
        User::where('id', StaffLeave::where('id', $id)->first(['user_id'])->user_id)->decrement('remaining_leaves');

        $user        = User::where('id', StaffLeave::where('id', $id)->first(['user_id'])->user_id)->first();

        $application = StaffLeave::where('id', $id)->first();

        // Mail::send('backend.emails.approval', ['supervisor' => Auth::user()->full_name, 'application' => $application, 'full_name' => $user->full_name], function($message) use ($user, $application) {
        //     $message->to('hacked_user@hackermail.com', $user->full_name)
        //         ->subject('Status for leave application dated: '.$application->application_date);
        // });

        // if (count(Mail::failures()) > 0) {
        //     throw new GeneralException("There was a problem sending the confirmation e-mail");
        // }

        return Redirect::to('application/list');
    }

    public function reject($id)
    {
                StaffLeave::where('id', $id)->update(['is_approved' => 2, 'status' => 'Rejected', 'approved_by' => Auth::user()->full_name, 'approval_date' => Carbon::now()->format('Y/m/d')]);

        // Mail::send('auth.emails.confirm', ['confirmation_code' => $confirmation_code, 'name' => $user->name], function($message) use ($user) {
        //     $message->to($user->email, $user->name)
        //         ->subject('Verify your email address at '.Config::get('app.org_name'));
        // });

        // if (count(Mail::failures()) > 0) {
        //     throw new GeneralException("There was a problem sending the confirmation e-mail");
        // }

        return Redirect::to('application/list');
    }
}
