<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\Redirect;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

//      /**
//      * Show the email verification notice.
//      *
//      */
//     public function show()
//     {
//         //
//     }

//     /**
//      * Mark the authenticated user's email address as verified.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function verify(Request $request)
//     {
//         // ->route('id') gets route user id and getKey() gets current user id() 
//         // do not forget that you must send Authorization header to get the user from the request
//         if ($request->route('id') == $request->user()->getKey() &&
//             $request->user()->markEmailAsVerified()) {
//             event(new Verified($request->user()));
//         }

//         return response()->json('Email verified!');
// //        return redirect($this->redirectPath());
//     }

//     /**
//      * Resend the email verification notification.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function resend(Request $request)
//     {
//         if ($request->user()->hasVerifiedEmail()) {
//             return response()->json('User already have verified email!', 422);
// //            return redirect($this->redirectPath());
//         }

//         $request->user()->sendEmailVerificationNotification();

//         return response()->json('The notification has been resubmitted');
// //        return back()->with('resent', true);
//     }
    
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = 'http://127.0.0.1:8080/login';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
