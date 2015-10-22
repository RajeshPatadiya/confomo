<?php

namespace App\Http\Controllers;

use App\Conference;
use App\Friend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ConferenceOnlineFriendsController extends Controller
{
    public function store(Conference $conference)
    {
        $conference->planToMeetOnlineFriend(request('username'));
    }

    public function index(Conference $conference)
    {
        return $conference->onlineFriends;
    }

    public function update(Conference $conference, Friend $friend)
    {
        foreach (Input::all() as $key => $value) {
            $friend->$key = $value;
        }

        $friend->save();
    }

    public function show(Conference $conference, Friend $friend)
    {
        return $friend;
    }
}
