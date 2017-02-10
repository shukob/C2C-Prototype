<?php

namespace App\Http\Controllers;

use App\Item;
use App\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function MongoDB\BSON\toJSON;

class PurchasesController extends Controller
{
    protected $purchase;

    function __construct(Purchase $purchase)
    {
        $this->purchase = $purchase;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $item_id = $request->input('item_id');
        $item = Item::where('id', $item_id)->first();
        if ($item) {
            return Purchase::where('item_id', $item_id)->all()->toJson();
        } else {
            return [];
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purchase = $this->purchase->fill($request->input());
        $purchase->user = Auth::user();
        if (!$purchase->save()) {
            return response()->json($purchase->getErrors(), 422);
        }
        return response()->json($purchase, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Purchase $purchase)
    {
        //
        return response()->json($purchase);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Purchase $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
        if (!$purchase->update($request->input())) {
            return response()->json($purchase->getErrors(), 422);
        }
        return $purchase;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        $purchase->delete();
        return reponse()->json([], 300);
    }
}
