<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        $deadlineApproaching = $this->deadline_approaching();
        $category = Category::all();
        return view('home.home', compact('deadlineApproaching', 'category'));
    }

    public function deadline_approaching(){
        $dt = Carbon::now();
        $content = Event::where('status', 'Published')
            ->whereBetween('end_date', [Carbon::now(), $dt->addDays(10)])->orderBy('end_date', 'asc')->get();
        return $content;
    }

    public function category(){
        $event = Event::all();
        $category = Category::all();
        return view('home.category.category', compact('event', 'category'));
    }

    public function login(){
        return view('login');
    }
}
