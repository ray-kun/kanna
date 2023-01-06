<?php

namespace App\Http\Controllers\admin\management;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\ApproveEventRequest;
use App\Http\Requests\admin\StoreEventRequest;
use App\Models\admin\Article;
use App\Models\admin\Event;
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

        return view('eendenportaal.management.events.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('eendenportaal.management.events.create');
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

        return redirect()->route('eendenportaal.management.events.index')->with('status', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event): View
    {
        return view('eendenportaal.management.events.show', ['event' => $event]);
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

    public function overview(): View
    {
        $events = Event::where('status', '=', 1)->get();

        return view('eendenportaal.management.events.overview', ['events' => $events]);
    }

    public function approve(ApproveEventRequest $request, Event $event): RedirectResponse
    {
        $event->update($request->validated());

        if($request->input('status') > 2) {
            return redirect()->route('eendenportaal.events.management.overview')->with('status', 'event_approved');
        }

        return redirect()->route('eendenportaal.events.management.overview')->with('status', 'event_denied');
    }
}
