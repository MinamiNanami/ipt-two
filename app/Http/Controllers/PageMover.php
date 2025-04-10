<?php

namespace App\Http\Controllers;

use App\Models\Blotter;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Resident;
use App\Models\Document;

class PageMover extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    /*public function home()
    {
        return view('home');
    }*/

    public function adminHome()
    {
        return view('dashboards.admin');
    }

    public function userHome()
    {
        return view('dashboards.user');
    }

    public function reports()
    {
        $blotters = Blotter::all();
        return view('reports', compact('blotters'));
    }

    public function officials()
    {
        return view('officials');
    }

    public function documents()
    {
        $documents = Document::all(); // Fetch documents from the database
        return view('documents', compact('documents'));
    }

    public function visionmission()
    {
        return view('visionmission');
    }

    public function settings()
    {
        return view('settings');
    }

    public function residents()
    {
        $residents = Resident::all(); // Fetch all residents from database
        return view('residents', compact('residents'));
    }

    public function addBlotter()
    {
        return view('addBlotter');
    }

    public function storeBlotter(Request $request)
    {
        $request->validate([
            'case_number'    => 'required|string|max:255',  // Wrong name fixed case -> case_number
            'name'           => 'required|string|max:255',
            'incident'       => 'required|string|max:255',
            'date'           => 'required|date',
            'status'         => 'required',
        ]);

        $blotter = Blotter::create([
            'case_number'   => $request->case_number,
            'name'          => $request->name,
            'incident'      => $request->incident,
            'date'          => $request->date,
            'status'        => $request->status,
        ]);

        return redirect()->route('page.reports')->with('success', 'Blotter added successfully');
    }

    public function destroyBlotter(Blotter $blotter)
    {
        $blotter->delete();
        return redirect()->route('page.reports')->with('success', 'Blotter deleted successfully');
    }

    public function addResident()
    {
        return view('addResident');
    }

    public function storeResident(Request $request)
    {
        $request->validate([
            'resident_id'     => 'required|string|max:255',  // Wrong name fixed case -> case_number
            'name'            => 'required|string|max:255',
            'address'         => 'required|string|max:255',
            'contact'         => 'required|string|max:255',
            'gender'          => 'required',
        ]);

        $resident = Resident::create([
            'resident_id'     => $request->resident_id,
            'name'            => $request->name,
            'address'         => $request->address,
            'contact'         => $request->contact,
            'gender'          => $request->gender,
        ]);

        return redirect()->route('page.residents')->with('success', 'Resident added successfully');
    }

    public function destroyResident(Resident $resident)
    {
        $resident->delete();
        return redirect()->route('page.residents')->with('success', 'Resident deleted successfully');
    }


    public function addDocument()
    {
        return view('addDocument');
    }

    public function storeDocument(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'form' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $document = Document::create([
            'name' => $request->name,
            'form' => $request->form,
            'date' => $request->date,
        ]);

        return redirect()->route('page.documents')->with('success', 'Added successfully');
    }

    public function destroyDocument(Document $document)
    {
        $document->delete();
        return redirect()->route('page.documents')->with('success', 'Deleted successfully');
    }
}
