<?php

namespace App\Http\Controllers;

use App\TicketCategory;
use Illuminate\Http\Request;

class TicketCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketCategories = TicketCategory::latest()->paginate(5);
        return view('front.ticket_categories.index',compact('ticketCategories'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.ticket_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TicketCategory::create($request->all());
        return redirect()->route('ticketscategory.index')
            ->with('success','Categoriacriada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TicketCategory  $ticketCategory
     * @return \Illuminate\Http\Response
     */
    public function show(TicketCategory $ticketscategory)
    {
        return view('front.ticket_categories.show',compact('ticketscategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TicketCategory  $ticketCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketCategory $ticketscategory)
    {
        return view('front.ticket_categories.edit',compact('ticketscategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TicketCategory  $ticketCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TicketCategory $ticketscategory)
    {
        $ticketscategory->update($request->all());
        return redirect()->route('ticketscategory.index')
            ->with('success','Categoria atualizada com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TicketCategory  $ticketCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketCategory $ticketscategory)
    {
        $ticketscategory->delete();

        return redirect()->route('ticketscategory.index')
            ->with('success','Categoria deletada com sucesso');
    }
}
