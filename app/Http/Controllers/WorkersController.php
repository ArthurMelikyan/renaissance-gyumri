<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
class WorkersController extends Controller
{
    public function index(){
        $workers = Worker::get(['name', 'name_ru','name_eng',
                                'bio','bio_ru','bio_eng','image'])->all();

        
    if (\LaravelLocalization::getCurrentLocale() == 'hy') {
        $_title = 'Աշխատակազմ';
    } elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
        $_title = 'Наши сотрудники';
    } elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
        $_title = 'Staff';
    }

        return view('site.workers')->with([
            'workers'=>$workers,
            '_title' => $_title
            ]);
    }
}
