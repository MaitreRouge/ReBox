<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {

    /**
     * Show the dashboard for a given user
     *
     * @param int $page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(int $page = 0)
    {
        return view('dashboard', [
            //TODO: owner_id
            //TODO: page_id
            "data" => DB::select("SELECT * FROM items")
        ]);
    }

}
