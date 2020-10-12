<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Jupiter;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Link;

class GanttController extends Controller
{
    public function get()
    {
        $tasks = new Task();
        $links = new Link();
 
        return response()->json([
            "data" => $tasks->all(),
            "links" => $links->all()
        ]);
    }
}
