<?php

namespace App\Http\Controllers;

use App\Models\Members;

class MembersController extends Controller
{
    public function showMembers()
    {
        $members = Members::query()->paginate(15);
        foreach ($members as $member) {
            $member->fullname = $member->firstname . ' ' . $member->midinitial . ' ' . $member->lastname;
        }
        return view('members', compact('members'));
    }
    public function addNewMembers()
    {
        if (request()->has('submit')) {

            $membersData = request()->validate([
                'firstname' => 'required',
                'midinitial' => 'nullable',
                'lastname' => 'required',
                'age' => 'required',
                'sex' => 'required',
                'birthdate' => 'required',
                'civilstatus' => 'required',
                'religion' => 'required',
                'mobile' => 'required',
                'email' => 'nullable|email',
                'address' => 'required',
                'batchnum' => 'required',
                'school' => 'required',
                'college' => 'required',
                'yearlevel' => 'required',
                'program' => 'required',
                'major' => 'nullable',
                'acceptdate' => 'required',
            ]);

            $membersData['Fullname'] = $membersData['firstname'] . ' ' . $membersData['midinitial'] . ' ' . $membersData['lastname'];

            Members::create($membersData);
            session()->flash('success', 'Member has been added.');
            return view('members-add');
        }
        return view('members-add');
    }
}
