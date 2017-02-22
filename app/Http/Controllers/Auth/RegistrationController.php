<!-- <?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function store()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ];

        $input = Input::only(
            'name',
            'email',
            'password',
            'password_confirmation'
        );

        $validator = Validator::make($input, $rules);

        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $confirmation_code = str_random(30);

        $user = $this->user->create($request->all());

        Mail::send('email.verify', ['confirmation_code' => $confirmation_code, 'name' => $user->name], function($message) {
            $message->to($user->email, $user->name)
                ->subject('Verify your email address at '.Config::get('app.org_name'));
        });


        Flash::message('Thanks for signing up! Please check your email.');

        return Redirect::home();
    }
}
 -->