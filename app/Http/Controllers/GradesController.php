<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Grades;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GradesController extends Controller
{
    public function showGrades()
    {
        $members = Members::query()->paginate(15);
        foreach ($members as $member) {
            $member->fullname = $member->firstname . ' ' . $member->midinitial . ' ' . $member->lastname;
        }
        return view('grades-page', compact('members'));
    }
    public function showMemberGrades(Request $request)
    {
        $memberID = $request->memberID;
        $year = $request->input('year');
        $sem = $request->input('sem');

        $members = Members::find($memberID);

        $gradesShow = Grades::select(
            'grades.gradeID',
            'grades.memberID',
            'grades.yearlevel',
            'grades.semester',
            'grades.course',
            'grades.code',
            'grades.unit',
            'grades.grades'
        )
            ->join('members', 'members.memberID', '=', 'grades.memberID')
            ->where('members.memberID', $memberID);

        if ($year) {
            $gradesShow->where('grades.yearlevel', $year);
        }
        if ($sem) {
            $gradesShow->where('grades.semester', $sem);
        }

        $gradesShow = $gradesShow->orderByRaw("CASE
        WHEN grades.yearlevel = '1st Year' THEN 1
        WHEN grades.yearlevel = '2nd Year' THEN 2
        WHEN grades.yearlevel = '3rd Year' THEN 3
        WHEN grades.yearlevel = '4th Year' THEN 4
        END ASC")
            ->orderByRaw("CASE
        WHEN grades.semester = '1st Sem' THEN 1
        WHEN grades.semester = '2nd Sem' THEN 2
        END ASC")
            ->orderBy('grades.gradeID')
            ->get();

        return view('grades', compact('year', 'sem', 'members', 'gradesShow'));
    }


    public function addNewGrades(Request $request)
    {
        if (request()->has('submit')) {

            $gradesData = request()->validate([
                'yearlevel' => 'required',
                'semester' => 'required',
                'course' => 'required',
                'code' => 'required',
                'unit' => 'required',
                'grades' => 'required',
                'memberID' => 'required'

            ]);

            $gradesData['memberID'] = $request->query('memberID');
            Grades::create($gradesData);

            return Redirect::to('/grades?memberID=' . $gradesData['memberID']);
        }
        return view('grades-add');
    }

    public function editGrades(Request $request)
    {
        $memberID = $request->memberID;
        $gradeID = $request->gradeID;
        $members = Members::find($memberID);
        $grades = Grades::where('memberID', $memberID)
            ->where('gradeID', $gradeID)->get();

        if (request()->has('edit')) {
            $yearlevel = $request->input('yearlevel');
            $semester = $request->input('semester');
            $course = $request->input('course');
            $code = $request->input('code');
            $unit  = $request->input('unit');
            $grades = $request->input('grades');

            Grades::where('memberID', $memberID)
                ->where('gradeID', $gradeID)
                ->update([
                    'yearlevel' => $yearlevel,
                    'semester' => $semester,
                    'course' => $course,
                    'code' => $code,
                    'unit' => $unit,
                    'grades' => $grades,
                ]);


            return Redirect::to('/grades?memberID=' . $memberID);
        }
        return view('grades-edit', compact('members', 'grades'));
    }

    public function deleteGrades($memberID, $gradeID)
    {
        Grades::where('memberID', $memberID)
            ->where('gradeID', $gradeID)
            ->delete();

        return Redirect::to('/grades?memberID=' . $memberID);
    }
}
