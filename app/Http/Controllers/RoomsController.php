<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Room;

use App\User;
class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $users =  User::all();






        
        


         return view('index', ['users' =>$users]);

        
    


    
    
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \Auth::User();
        if ($user) {
             $user->room_number;
        }


        $room = new Room;


        $data = [
            'user' => $user,
            'room' => $room,
            ];
        
        return view('create', 
             $data,);
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
        $this->validate($request,[ 'room_number' => 'required|max:191']);
        $room = new Room;
        $room->room_number =$request->room_number;
        $room->save();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)



    {
  
    }


    public function status($id) 






    {


    

        $user =  User::find($id);

        $status = $user->roomstatus()->get();

        $data = [
            'user' => $user,
            'status' => $status,
            ];
        


        

        

        return view('show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);


        $roomstatus = Room::find($id);


        $status = $user->roomstatus()->get('status');

        $data = [
            'user' => $user,
            'status' => $status,
            'roomstatus' => $roomstatus,
            ];


        return view('edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


$room = Room::find($id);
$room->status = $request->status;

$room->room_number = $request->room_number;

$room->save();
$user = User::find($id);
$user->room_number = $request->room_number;

$user->save();





return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
