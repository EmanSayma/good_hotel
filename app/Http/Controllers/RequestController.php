<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use App\Models\Request as DealRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function create(Deal $deal)
    {
       // dd($deal->id);
        return view('pages.request')->with(['dealId'=> $deal->id]);
    }

    public function store(Request $request)
    {
        $dealRequest = new DealRequest([
           'deal_id' => request('deal_id'),
           'start_date' => request('start_date'),
           'end_date' => request('end_date'),
           'amount' => \request('amount'),
           'room_number' => request('room_number')
        ]);

        $dealRequest->save();

        return view('pages.thank_you');
    }
}
