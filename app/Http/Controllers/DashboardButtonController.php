<?php

namespace App\Http\Controllers;

use App\Models\DashboardButton;
use Illuminate\Http\Request;

class DashboardButtonController extends Controller{
    public function index()
    {
        $buttons = DashboardButton::all();
        return view('home', compact('buttons'));
    }

    public function configureButton($id)
    {
        $button = DashboardButton::findOrFail($id); 
        return view('configure', compact('button')); 
    }

    public function updateButton(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'color' => 'required|string',
            'link' => 'required|string'
        ]);

        $button = DashboardButton::findOrFail($id);
        $button->update($request->all());

        return redirect()->route('home')->with('success', 'Button configuration updated.'); // Redirecting to the home route with a success message
    }

    public function deleteButton($id)
    {
        $button = DashboardButton::findOrFail($id);
        $button->delete();

        return redirect()->route('home')->with('success', 'Button deleted.'); // Redirecting to the home route with a success message
    }
}
