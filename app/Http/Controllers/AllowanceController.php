<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

use App\Models\Members;
use App\Models\Allowances;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;


class AllowanceController extends Controller 
{
    public function showAllowance()
    {
        $members = Members::query()->paginate(15);
        foreach ($members as $member) {
            $member->fullname = $member->firstname . ' ' . $member->midinitial . ' ' . $member->lastname;
        }
        return view('allowance-page', compact('members'));
    }

    public function showMemberAllowances(Request $request)
    {
        $memberID = $request->memberID;
        $members = Members::find($memberID);
        $year = $request->input('year');
        $sem = $request->input('sem');

        $allowancesShow = Allowances::select(
            'allowances.allowanceID',
            'allowances.memberID',
            'allowances.yearlevel',
            'allowances.semester',
            'allowances.month',
            'allowances.date_received'
        )
            ->join('members', 'members.memberID', '=', 'allowances.memberID')
            ->where('members.memberID', $memberID);

        if ($year) {
            $allowancesShow->where('allowances.yearlevel', $year);
        }
        if ($sem) {
            $allowancesShow->where('allowances.semester', $sem);
        }

        $allowancesShow = $allowancesShow->orderByRaw("CASE
    WHEN allowances.yearlevel = '1st Year' THEN 1
    WHEN allowances.yearlevel = '2nd Year' THEN 2
    WHEN allowances.yearlevel = '3rd Year' THEN 3
    WHEN allowances.yearlevel = '4th Year' THEN 4
    END ASC")
            ->orderByRaw("CASE
    WHEN allowances.semester = '1st Sem' THEN 1
    WHEN allowances.semester = '2nd Sem' THEN 2
    END ASC")
            ->orderByRaw("CASE
    WHEN allowances.month = '1st Month' THEN 1
    WHEN allowances.month = '2nd Month' THEN 2
    WHEN allowances.month = '3rd Month' THEN 3
    WHEN allowances.month = '4th Month' THEN 4
    WHEN allowances.month = '5th Month' THEN 5
    END ASC")
            ->orderBy('allowances.allowanceID')
            ->get();

        return view('allowance', compact('members', 'allowancesShow', 'year', 'sem'));
    }


    public function addNewAllowance(Request $request)
    {
        $memberID = $request->memberID;
        $members = Members::find($memberID);
        if (request()->has('submit')) {

            $allowancesData = request()->validate([
                'memberID' => 'required',
                'yearlevel' => 'required',
                'semester' => 'required',
                'month' => 'required',
                'date_received' => 'required',

            ]);

            $allowancesData['memberID'] = $request->query('memberID');
            Allowances::create($allowancesData);

            return Redirect::to('/allowance?memberID=' . $allowancesData['memberID']);
        }

        return view('allowance-add', compact('members'));
    }

    public function EditAllowance(Request $request)
    {
        $memberID = $request->memberID;
        $allowanceID = $request->allowanceID;
        $members = Members::find($memberID);
        $allowances =  Allowances::where('memberID', $memberID)
            ->where('allowanceID', $allowanceID)->get();

        if (request()->has('edit')) {

            $allowanceID = $request->input('allowanceID');
            $memberID = $request->input('memberID');
            $yearlevel = $request->input('yearlevel');
            $semester = $request->input('semester');
            $month = $request->input('month');
            $date_received  = $request->input('date_received');

            Allowances::where('memberID', $memberID)
                ->where('allowanceID', $allowanceID)
                ->update([
                    'allowanceID' => $allowanceID,
                    'memberID' => $memberID,
                    'yearlevel' => $yearlevel,
                    'semester' => $semester,
                    'month' => $month,
                    'date_received' => $date_received
                ]);

            return Redirect::to('/allowance?memberID=' . $memberID);
        }
        return view('allowance-edit', compact('members', 'allowances'));
    }
    public function deleteAllowance($memberID, $allowanceID)
    {
        Allowances::where('memberID', $memberID)
            ->where('allowanceID', $allowanceID)
            ->delete();
        return Redirect::to('/allowance?memberID=' . $memberID);
    }
}
