<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Player::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username'   => 'required|unique:players',
            'password'   => 'required|min:6',
            'email'      => 'required|unique:players|email'
        ]);
        if ($validator->fails()) {
            return [
                'success' => $validator->errors(),
            ];
        } else {
            return [
                'success' => "zzz"
            ];
        }

        // $request->validate([
        //     'username'   => 'required|unique:players',
        //     'password'   => 'required|min:6',
        //     'email'      => 'required|unique:players|email'
        // ]);

        // $player = new Player();

        // $player->username     = $request->username;
        // $player->password     = $request->password;
        // $player->email        = $request->email;
        // $player->type         = 1;
        // $player->totalQuantum = 24;

        // $player->save();

        // return [
        //     'success' => true
        // ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        //
    }
}
