<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\StoreEventRequest;
use App\Models\admin\Event;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $events = Event::latest()->get();

        return view(get_admin_name().'.events.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view(get_admin_name().'.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request): RedirectResponse
    {
        $event = Event::make($request->validated());

        $event->user_id = Auth::id();

        $event->updated_by = Auth::id();

        $event->status = 1;

        $event->save();

        return redirect()->route(get_admin_name().'.events.index')->with('status', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
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

    public function schedule()
    {

        $start = strtotime('00:00');
        $end   = strtotime('23:00');

        while ($start <= $end) {

            // Increment Start date

            // Set dates to display
            $date1 = $start;
            $date2 = $start + (60*60);

            echo date('H:i',$date1) . " - " . date('H:i',$date2) . '<br>';
            $start += (60*60);
            
        }


        return view(get_admin_name().'.events.schedule');
    }

}
