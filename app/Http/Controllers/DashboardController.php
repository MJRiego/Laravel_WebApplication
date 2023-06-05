<?php

namespace App\Http\Controllers;

use App\Models\Members;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $members = Members::all()->map(function ($member) {
            $member->fullname = $member->firstname . ' ' . $member->midinitial . ' ' . $member->lastname;
            return $member;
        });

        $members1 = Members::select('yearlevel', Members::raw('COUNT(memberID) as total'))
            ->groupBy('yearlevel')
            ->get();

        $batchnumber = Members::select('batchnum', Members::raw('COUNT(memberID) as total_members'))
            ->groupBy('batchnum')
            ->orderBy('batchnum', 'ASC')
            ->get();

        $labels = [];
        $data = [];
        foreach ($batchnumber as $batchnum) {
            $labels[] = $batchnum['batchnum'];
            $data[] = $batchnum['total_members'];
        }
        $batchnum = json_encode($labels);
        $totalmembers = json_encode($data);

        $acceptdate = Members::selectRaw("YEAR(acceptdate) AS accept_year, COUNT(memberID) AS accept_total")
            ->groupBy(Members::raw("YEAR(acceptdate)"))
            ->orderBy(Members::raw("YEAR(acceptdate)"), 'ASC')
            ->get();

        $line_chart_labels = [];
        $line_chart_data = [];
        foreach ($acceptdate as $accdate) {
            $accept[] = $accdate['accept_year'];
            $accepttot[] = $accdate['accept_total'];
        }
        $acceptyear = json_encode($accept);
        $totalaccept = json_encode($accepttot);
        return view('dashboard', compact('members', 'members1', 'batchnum', 'totalmembers', 'acceptyear', 'totalaccept'));
    }
}
