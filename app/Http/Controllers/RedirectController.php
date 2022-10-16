<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Log;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RedirectController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function process(Request $request)
    {
        $domain = $request->server->get("HTTP_HOST");
        $path = $request->server->get("PATH_INFO")??"/";

//        $select = DB::select("SELECT * FROM items WHERE `domain` = :domain AND `source` = :path", [
//            "domain" => $domain,
//            "path" => $path
//        ]);

        $select = Item::where("domain", $domain)
            ->where("source", $path)
            ->get();

//        dd($select[0]);
        if (!isset($select[0])) return view("errors.404");

        $table = $select[0]->type . "s";
        $ressource = DB::select("SELECT * FROM $table WHERE id = :id", [
            "id" => $select[0]->id
        ]);

//        dd($select[0]->protection->limit);
        if($select[0]->protection){
            if ($select[0]->protection->limit <= count($select[0]->logs)) {
                return view("errors.limit");
            }
        }

        if($select[0]->status === "offline"){
            return view("errors.404");
        }

//        dd($select);
        Log::create([
            "item_id" => $select[0]->id,
            "IP" => $request->server->get("REMOTE_ADDR")
        ]);

        switch ($select[0]->type) {
            case "redirection":
                return redirect($ressource[0]->destination);
                dd("Out of bounds");
                break;
            default:
                return view("errors.404");
                break;
        }
    }
}
