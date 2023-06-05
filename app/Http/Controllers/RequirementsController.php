<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Requirements_list;
use App\Models\Requirements;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class RequirementsController extends Controller
{
    public function showRequirements()
    {
        $members = Members::query()->paginate(15);
        foreach ($members as $member) {
            $member->fullname = $member->firstname . ' ' . $member->midinitial . ' ' . $member->lastname;
        }
        $requirements_list = Requirements_list::all();
        return view('reqs-page', compact('members', 'requirements_list'));
    }

    public function showMemberRequirements(Request $request)
    {
        $memberID = $request->memberID;
        $members = Members::where('memberID', $memberID)->get();
        $requirements_list = Requirements_list::all();
        $requirements = Requirements::where('memberID', $memberID)->get();

        return view('reqs', compact('members', 'requirements_list', 'requirements'));
    }

    public function addSubmitRequirements(Request $request)
    {
        $requirements_list = Requirements_list::all();
        if (request()->has('submit')) {
            $reqsData = request()->validate([
                'memberID' => 'required',
                'reqs_listID' => 'required',
                'date' => 'required'
            ]);

            Requirements::create($reqsData);
            return redirect('/reqs?memberID=' . $request->input('memberID'));
        }
        return view('reqs-add', compact('requirements_list'));
    }



    public function addRequirementsList()
    {
        if (request()->has('submit')) {

            $listData = request()->validate([
                'requirements' => 'required',
                'notes' => 'nullable',
            ]);
            Requirements_list::create($listData);
            return Redirect::to('/reqs-page');
        }
        return view('reqs_list-add');
    }

    public function editRequirementsList(Request $request)
    {
        $reqs_listID = $request->reqs_listID;
        $reqs_lists = Requirements_list::where('reqs_listID', $reqs_listID)->get();

        if (request()->has('edit')) {
            request()->validate([
                'requirements' => 'required',
                'notes' => 'nullable',
            ]);

            $requirements = $request->input('requirements');
            $notes = $request->input('notes');
            Requirements_list::where('reqs_listID', $reqs_listID)
                ->update([
                    'requirements' => $requirements,
                    'notes' => $notes,
                ]);
            return Redirect::to('/reqs-page');
        }
        return view('reqs_list-edit', compact('reqs_lists'));
    }
    public function deleteReqs($memberID, $reqsID)
    {
        Requirements::where('memberID', $memberID)
            ->where('reqsID', $reqsID)
            ->delete();
        return Redirect::to('/reqs?memberID=' . $memberID);
    }
    public function deleteReqsList($reqs_listID)
    {
        Requirements_list::where('reqs_listID', $reqs_listID)
            ->delete();
        return Redirect::to('/reqs-page');
    }
}
