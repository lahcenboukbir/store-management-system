<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = DB::table('suppliers')->get();

        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'supplier_name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:suppliers,email',
            'phone_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'notes' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('supplier_image')) {
            $validated['image'] = $request->file('supplier_image')->store('images', 'public');
        }

        Supplier::create($validated);

        return redirect()->route('suppliers.index')->with('success', 'Fournisseur créé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $supplier = DB::table('suppliers')->where('id', $id)->first();
        $supplier->created_at = Carbon::parse($supplier->created_at)->format('d F Y');

        return view('suppliers.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier = DB::table('suppliers')->where('id', $id)->first();

        return view('suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'supplier_name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:suppliers,email,' . $id,
            'phone_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'notes' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $supplier = Supplier::find($id);

        if ($request->hasFile('supplier_image')) {
            if ($supplier->image) {
                Storage::delete($supplier->image);
            }

            $validated['image'] = $request->file('supplier_image')->store('images', 'public');
        }

        $supplier->update($validated);

        return redirect()->route('suppliers.edit', $id)->with('success', 'Fournisseur mis à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier = Supplier::find($id);

        if ($supplier) {
            $supplier->delete();

            return redirect()->route('suppliers.index')->with('success', 'Fournisseur supprimé avec succès !');
        }
    }
}
