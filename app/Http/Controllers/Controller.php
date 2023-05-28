<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    private function createHistory($status_id = 1, $history_name = 'Новый', $is_show = 1){
        return History::create([
            'status_id' => $status_id,
            'history_name' => $history_name,
            'is_show' => $is_show,
        ]);
    }
}
