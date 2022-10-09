<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class RedirectController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function process(Request $request)
    {
        $domain = $request->server->get("HTTP_HOST");
        $path = $request->server->get("PATH_INFO")??"/";

        $select = DB::select("SELECT * FROM items WHERE `domain` = :domain AND `source` = :path", [
            "domain" => $domain,
            "path" => $path
        ]);
//        dd($select);

        if ($select == []) return false;

        $table = $select[0]->type . "s";
        $ressource = DB::select("SELECT * FROM $table WHERE id = :id", [
            "id" => $select[0]->id
        ]);
//        dd($ressource);

        switch ($select[0]->type) {
            case "redirection":
                return redirect($ressource[0]->destination);
                dd("Out of bounds");
                break;
        }
    }
}
