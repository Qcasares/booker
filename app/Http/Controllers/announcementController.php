<?php

namespace BBS\Http\Controllers;

use BBS\Models\Announcement;


class announcementController extends Controller
{


    /**
     * @return mixed
     */
    public function index()
    {
        $announcementData = Announcement::all();
        return view('announcements', compact('announcementData'));
    }
}
