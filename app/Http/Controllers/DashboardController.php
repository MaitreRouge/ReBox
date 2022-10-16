<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {

    /**
     * Show the dashboard for a given user
     *
     * @param int $page
     */
    public function show(int $page = 0)
    {

        $items = Item::where("owner_id", Auth::id())
            ->get();

//        dd($items);

        return view('dashboard', [
            //TODO: owner_id
            //TODO: page_id
            "data" => $items
        ]);
    }

}
