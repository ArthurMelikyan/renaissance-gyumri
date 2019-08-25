<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timetable;
class TimetableController extends Controller
{
    public function index(){
        $timetable = Timetable::latest()->first();
        

        if (\LaravelLocalization::getCurrentLocale() == 'hy') {
            $_title = 'Ժամանակացույց';
        } elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
            $_title = 'Расписание';
        } elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
            $_title = 'Timetable';
        }

        return view('site.timetable')->with([
            'timetable'=>$timetable,
            '_title' => $_title
            ]);
    }
}
