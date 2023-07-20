<?php

namespace Ejaz\Converter\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConverterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view('converter::index');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getResults(Request $request)
    {
        $fromCurrency = $request->input('from_currency');
        $toCurrency = $request->input('to_currency');
        $amount = $request->input('amount');

        $req_url = "https://api.exchangerate.host/convert?from=$fromCurrency&to=$toCurrency";
        $response_json = @file_get_contents($req_url);

        if ($response_json !== false) {
            try {
                $response = json_decode($response_json);
                if ($response->success === true) {
                    // Get the converted amount from the API response
                    $convertedAmount = $response->result * $amount;
                    echo "Converted Amount: $convertedAmount";
                }
            } catch (Exception $e) {
                // Handle JSON parse error...
            }
        } else {
            // Handle HTTP request error...
        }
        // return $request->all();  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
