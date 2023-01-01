<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSessionRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return RedirectResponse|View
     */
    public function create(): RedirectResponse | View
    {

        if(Auth::check()) {
            return redirect()->route('homepage');
        }

        return view('site.account.login.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(StoreSessionRequest $request): RedirectResponse
    {

        $user = User::where('username', $request->input('username'))->first();

        if(!is_null($user)) {
            if(Auth::attempt($request->validated()))
            {
                session()->regenerate();

                return redirect()->route('homepage')->with('status', 'login-success');
            }

            return redirect()->back()->with('status', 'credentials-false');
        }

        return redirect()->back()->with('status', 'user-exists-false');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(): RedirectResponse
    {
        auth()->logout();

        return redirect()->route('account.login');
    }
}
