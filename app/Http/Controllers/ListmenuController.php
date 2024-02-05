<?php

namespace App\Http\Controllers;

use App\Models\Listmenu;
use App\Models\IconMenu;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ListmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $listmenu = Listmenu::latest()->paginate(5);
        $icon_menus= IconMenu::all();
      
        return view('listmenu.index',compact('listmenu'), compact('icon_menus'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $icon_menus = IconMenu::all();
        // return view('listmenu.create');
        return view('listmenu.create', compact('icon_menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => '',
            'name' => 'required',
            'icon_name' => 'required',
            'hargabeli' => 'required',
            'hargajual' => 'required',
            'stok' => 'required',
        ]);
      
        Listmenu::create($request->all());
       
        return redirect()->route('listmenu.index')
                        ->with('success','Listmenu created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listmenu $product): View
    {
        return view('listmenushow',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listmenu $product): View
    {
        $icon_menus = IconMenu::all();
        return view('listmenu.edit',compact('product'),compact('icon_menus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listmenu $product): RedirectResponse
    {
        $request->validate([
            'image' => '',
            'name' => 'required',
            'icon_name' => 'required',
            'hargabeli' => 'required',
            'hargajual' => 'required',
            'stok' => 'required',
        ]);
      
        $product->update($request->all());
      
        return redirect()->route('listmenu.index')
                        ->with('success','Listmenu updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listmenu $product): RedirectResponse
    {
        $product->delete();
       
        return redirect()->route('listmenu.index')
                        ->with('success','Listmenu deleted successfully');
    }
}
