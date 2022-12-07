<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSessionRequest;
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

        return view('account.login.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(StoreSessionRequest $request): RedirectResponse
    {
        if(Auth::attempt($request->validated()))
        {
            session()->regenerate();

            return redirect()->route('homepage');
        }

        return back()
            ->withInput()
            ->withErrors(['username' => 'E-mailadres is incorrect', 'password' => 'Wachtwoord is incorrect']);
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
