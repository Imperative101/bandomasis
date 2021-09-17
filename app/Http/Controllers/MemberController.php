<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Reservoir;
use Illuminate\Http\Request;
use Validator;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $members = Member::orderBy('surname')->orderBy('name')->get();
        $waters = Reservoir::all();
        return view('member.index', ['members' => $members, 'waters' =>$waters]); //?
    }
    public function indexSpecifics(Request $request) 
    {
       
        $members = Member::all();
        if ($request->order) {
            $members = $members->sortBy($request->order);
        }
        if($request->filter) {
            $members = $members->where('reservoir_id','=', $request->$filter);
        }
        $waters=Reservoir::all();
        return view('member.index', ['members' => $members, 'waters' => $waters]);

    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     // return view('member.create');

     

       $members = Member::all();
       return view('member.create', ['members' => $members]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'member_name' => ['required', 'min:3', 'max:64'],
                'member_surname' => ['required', 'min:3', 'max:64'],
            ],
            [
            'member_surname.min' => 'mano zinute'
            ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }
 


        $member = new Member;
        $member->name = $request->member_name;
        $member->surname = $request->member_surname;
        $member->live = $request->member_live;
        $member->experience = $request->member_experience;
        $member->registered = $request->member_registered;
        $member->reservoir_id = $request->member_reservoir_id;
        $member->save();

        return redirect()->route('member.index');



return redirect()->route('member.index')->with('success_message', 'Sekmingai įrašytas.');
return redirect()->route('member.index')->with('success_message', 'Sėkmingai pakeistas.');
return redirect()->route('member.index')->with('success_message', 'Sekmingai ištrintas.');


    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('member.show',['member'=>$member]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('member.edit', ['member' => $member]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $member->name = $request->member_name;
        $member->surname = $request->member_surname;
        $member->live = $request->member_live;
        $member->experience = $request->member_experience;
        $member->registered = $request->member_registered;
        $member->reservoir_id = $request->member_reservoir_id;
        $member->save();
        return redirect()->route('member.index');



return redirect()->route('member.index')->with('success_message', 'Sekmingai įrašytas.');
return redirect()->route('member.index')->with('success_message', 'Sėkmingai pakeistas.');
return redirect()->route('member.index')->with('success_message', 'Sekmingai ištrintas.');






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        if($member->memberReservoirs->count()){
            return 'Trinti negalima, nes turi reservarų';
        }
 

        $member->delete();
       return redirect()->route('member.index');

       return redirect()->route('member.index')->with('success_message', 'Sekmingai įrašytas.');
       return redirect()->route('member.index')->with('success_message', 'Sėkmingai pakeistas.');
       return redirect()->route('member.index')->with('success_message', 'Sekmingai ištrintas.');



    }
}
