<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Validator;
use Input;
use Session;
use Redirect;
use Carbon;
use JasperPHP;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\StaffLeave;
use App\Models\LeaveType;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffLeaves = StaffLeave::all();
        return \View::make('backend.leave.list', array('staffLeaves'=>$staffLeaves));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $leaveTypes = LeaveType::all();
        return \View::make('backend.leave.apply', array('leaveTypes'=>$leaveTypes));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return Auth::user()->id;
        $rules = array(
            'applicationDate'    => 'required',
            'employeeName'    => 'required',
            'position'    => 'required',
            'department'    => 'required',
            'leaveFromDate'    => 'required',
            'leaveToDate'    => 'required',
            'duration'    => 'required',
            'leaveReason'    => 'required',
            );

        $validator = Validator::make(Input::all(), $rules);

        $staffLeave             = StaffLeave::create([
            'application_date'  => Carbon::parse(Input::get('applicationDate'))->format('Y/m/d'),
            'user_id'           => Auth::user()->id,
            'position'          => Input::get('position'),
            'department'        => Input::get('department'),
            'leave_type'        => Input::get('leaveType'),
            'leave_from'        => Carbon::parse(Input::get('leaveFromDate'))->format('Y/m/d'),
            'leave_to'          => Carbon::parse(Input::get('leaveToDate'))->format('Y/m/d'),
            'duration'          => Input::get('duration'),
            'leave_reason'      => Input::get('leaveReason'),
            'is_aprroved'       => 0
        ]);

        $leave_id = $staffLeave->id;

        Session::flash('flash_message', 'Leave application successful!');
        Session::flash('flash_type', 'success');

    return Redirect::to('leave/'.$leave_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staffLeave = StaffLeave::where('id', $id)->first();
        // return view('backend.leave.view');
        return \View::make('backend.leave.view', array('staffLeave'=>$staffLeave));
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

    /**
     * Print the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function generate($id)
    {
        $database = \Config::get('database.connections.generic');
        $jasper = new JasperPHP();
        $filename = "mdec_assmmnt";
        $reportPath = "/views/backend/jasper";

        $resource_path = $reportPath . "/" . "$filename.jasper";
        $public_path = "generated/$filename";
        $pdf = "generated/$filename.pdf";

        \JasperPHP::process(
            resource_path(). $resource_path,
            public_path()."/". $public_path,
            array("pdf"),
            array('id' => $id),
            $database
            )->execute();

        return \View::make('report_index',
            array('report_title'=> 'Leave Application', 'pdf' => $pdf,'flag' => 'pdf'));
    }
}
