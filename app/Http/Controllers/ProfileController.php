<?php

namespace App\Http\Controllers;

use App\Models\Members;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function showProfile(Request $request)
    {
        $memberID = $request->memberID;
        $members = Members::where('memberID', $memberID)->get()->map(function ($member) {
            $member->fullname = $member->firstname . ' ' . $member->midinitial . ' ' . $member->lastname;
            return $member;
        });;
        return view('profile', compact('members'));
    }

    public function editProfile(Request $request)
    {
        $memberID = $request->memberID;

        $members = Members::where('memberID', $memberID)->get();
        if (request()->has('submit')) {

            $firstname = $request->input('firstname');
            $midinitial = $request->input('midinitial');
            $lastname = $request->input('lastname');
            $age = $request->input('age');
            $sex = $request->input('sex');
            $birthdate = $request->input('birthdate');
            $civilstatus = $request->input('civilstatus');
            $religion = $request->input('religion');
            $mobile = $request->input('mobile');
            $email = $request->input('email');
            $address = $request->input('address');
            $batchnum = $request->input('batchnum');
            $school = $request->input('school');
            $college = $request->input('college');
            $yearlevel = $request->input('yearlevel');
            $program = $request->input('program');
            $major = $request->input('major');
            $acceptdate = $request->input('acceptdate');


            Members::where('memberID', $memberID)->update([
                'firstname' => $firstname,
                'midinitial' => $midinitial,
                'lastname' => $lastname,
                'age' => $age,
                'sex' => $sex,
                'birthdate' => $birthdate,
                'civilstatus' => $civilstatus,
                'religion' => $religion,
                'mobile' => $mobile,
                'email' => $email,
                'address' => $address,
                'batchnum' => $batchnum,
                'school' => $school,
                'college' =>  $college,
                'yearlevel' => $yearlevel,
                'program' => $program,
                'major' => $major,
                'acceptdate' => $acceptdate,
            ]);

            return Redirect::to('/profile?memberID=' . $memberID);
        }

        return view('profile-edit', compact('members'));
    }

    public function deleteMember($memberID)
    {
        Members::where('memberID', $memberID)
            ->delete();
        return Redirect::to('/members');
    }
}
