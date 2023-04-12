<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class CrudController extends Controller
{
    public function index()
    {
        //return Member::all();
        $data = Member::paginate(5);
        return view('dashbord', ['members' => $data]);
    }

    public function insert(Request $req)
    {
        $member = new Member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        if ($req->hasFile('image')) {
            $randomize = rand(111111, 999999);
            $extension = $req->file('image')->getClientOriginalExtension();
            $filename = $randomize . '.' . $extension;
            $image = $req->file('image')->move('images', $filename);
        }
        $member->image = $image;
        $member->dep = json_encode($req->dep);
        $member->status = $req->status;
        $member->save();
        return redirect('');
    }

    public function edit($id)
    {
        // return Member::find($id);
        $data = Member::find($id);
        return view('updatedata', ['data' => $data]);

    }

    public function update(Request $req)
    {

        $data = Member::find($req->id);

        $data->name = $req->name;
        $data->email = $req->email;
        $data->address = $req->address;
        if ($req->hasFile('image')) {
            $randomize = rand(111111, 999999);
            $extension = $req->file('image')->getClientOriginalExtension();
            $filename = $randomize . '.' . $extension;
            $image = $req->file('image')->move('images', $filename);
        }
        $data->image = $image;
        $data->status = $req->status;
        $data->save();
        return redirect('');

    }

    public function delete($id)
    {

        $data = Member::find($id);
        $data->delete();
        return redirect('');
    }


}