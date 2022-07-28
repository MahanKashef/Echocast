<?php

namespace App\Http\Controllers;

use App\Developer;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\LogoutRequest;
use App\Http\Requests\redirectBackRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\RegistrationRequest as RequestsRegistrationRequest;
use Error;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Size;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Translation\LoggingTranslator;

class UserController extends Controller
{
        /**************** Index ****************/

        public function index()
        {
            $users = DB::table('users')->get()->all();
            return view('Together.admin.users.index',compact('users',$users));
        }

        /**************** Register ****************/

        public function SignUp()
        {   
            return view('Together.SignUp');
        }

        /**************** store ****************/

        public function store(Request $request)
        {

            $rand = random_int(11111,99999);

            $user = User::query()->create(
                [
                    'username'      => $request->get('username'),
                    'email'         => $request->get('email'),
                    'password'      => bcrypt($request->get('password')),
                    'rand'          => $rand,
                ]);

                auth::login($user);

                return redirect('/send-mail/'.$user->id);
        }

        /**************** login ****************/

        public function login()
        {
            return view('Together.admin.users.login');
        }

        /**************** check ****************/

        public function check(LoginRequest $request)
        {
            $user = User::query()
                -> where('email',$request->get('email'))
                -> first();


            $dev = Developer::query()
                -> where('gmail',$request->get('email'))
                ->first();


            if(!Hash::check($request['password'],$user->password))
             //این میاد چک میکنه که آیا استرینگ اول رو میشه به روشی هش کرد که بشه آرگومان دومی
                {
                    $alert = "پسورد یا ایمیل اشتباه است";
                    return back()->with(['message'=>$alert, 'alert' => 'alert-success']);

                    
                    
                    // return back()->withErrors('ایمیل یا پسورد اشتباه است');
                }

                Auth::login($user);
                if($dev)
                    return redirect('/admin');    
                return redirect('/');
               
        }

        /**************** Logout ****************/

        public function logout(LogoutRequest $request)
        {
            $redirectback = $request->getRequestUri();
            $redirectback = explode('/',$redirectback);
            array_pop($redirectback);
            $redirectback = implode('/',$redirectback);
            Auth::logout();
            return redirect($redirectback);
        }

        /**************** Edit ****************/
    
        public function edit($id)
        {
            $user = DB::table('users')->where('id',$id)->get();
            return view('Together.admin.users.edit',compact('user',$user));
        }
    
        /**************** Update ****************/
    
        public function update($id,Request $request)
        {
            $user = DB::table('users')->where('id',$id)->get();
            foreach($user as $item);
            $item = (array) $item;
    
                $info = DB::query()->where('id',$id)->update([
                    'username'           => $request->get('username'),
                    'email'              => $request->get('email'),
                    'password'           => $request->get('password'),
                    'password_confrimed' => $request->get('password_confrimed'),
                    'permission'         => $request->get('permission'),
                ]);
    
                return redirect('/admin/user');
        }

        public function permission($id)
        {
            $user = DB::table('users')->where('id',$id)->get();
            foreach($user as $item);
            if($item->permission=='admin')
            {
                DB::table('users')->where('id',$id)->update(['permission'=>'user']);
                return redirect('/admin/user');
            }
            else 
            {
                DB::table('users')->where('id',$id)->update(['permission'=>'admin']);
                return redirect('/admin/user');
            }
        }
    
        /**************** Delete ****************/
    
        public function delete($id)
        {
            DB::table('users')->where('id',$id)->delete();
            return redirect('/admin/user');
        }
}
