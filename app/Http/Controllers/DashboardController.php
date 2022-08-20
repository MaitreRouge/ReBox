<?php

namespace App\Http\Controllers;

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
            "page" => $page
        ]);
    }

}
