<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticketbooking;
use Illuminate\Http\Request;

class TicketbookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticketbooking::all();
        return view('admin.ticket-booking.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ticket-booking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'city' => 'required',
            'tickets_count' => 'required',
        ]);
        Ticketbooking::create($request->all());
        return redirect()->route('admin.ticket-booking.index')->with('success', 'Ticket booked successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticketbooking = Ticketbooking::find($id);
        return view('admin.ticket-booking.edit', compact('ticketbooking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticketbooking = Ticketbooking::find($id);
        return view('admin.ticket-booking.edit', compact('ticketbooking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'city' => 'required',
            'tickets_count' => 'required',
        ]);
        $ticketbooking = Ticketbooking::find($id);
        $ticketbooking->update($request->all());
        return redirect()->route('admin.ticket-booking.index')->with('success', 'Ticket booking updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticketbooking = Ticketbooking::find($id);
        $ticketbooking->delete();
        return redirect()->route('admin.ticket-booking.index')->with('success', 'Ticket booking deleted successfully!');
    }
}
