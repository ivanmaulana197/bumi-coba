<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
use Carbon\Carbon;
use Redirect;

class AdminHomeController extends Controller
{
    public function index(){
        $deadlineApproaching = $this->deadline_approaching();
        $event_today = $this->event_update_today();
        return view('admin.admin', compact('deadlineApproaching', 'event_today'));
    }
    public function deadline_approaching(){
        $dt = Carbon::now();
        $content = Event::where('status', 'Published')
            ->whereBetween('end_date', [Carbon::now(), $dt->addDays(10)])->orderBy('end_date', 'asc')->get();
        return $content;
    }

    public function event_update_today(){
        $dt = Carbon::now()->format('Y-m-d');
        $event = Event::where('status', 'Published')
        ->where('created_at', 'like', $dt.'%')->get();
        return $event;
    }


}
