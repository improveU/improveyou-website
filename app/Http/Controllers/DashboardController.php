<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Report;
use App\Models\ReportQuick;

class DashboardController extends Controller
{
    public function show()
    {
        if (auth()->check() && auth()->user()->subscription_id == 4) {
            $reports = Report::all();
            $reportsQuick = ReportQuick::all();

            $reportsQuickWithTitle = $reportsQuick->map(function ($quickReport) {
                $course = Course::find($quickReport->course_id);
                $quickReport->title = $course->title;
                return $quickReport;
            });

            return view('admin.dashboard', [
                'reports' => $reports,
                'reportsQuick' => $reportsQuickWithTitle,
            ]);
        }
        return redirect()->route('home')->with('status', 'Unauthorized access');
    }

    public function showReport($id)
    {
        if (auth()->check() && auth()->user()->subscription_id == 4) {
            $report = Report::findOrFail($id);

            return view('admin.report', [
                'report' => $report,
            ]);
        }
        return redirect()->route('home')->with('status', 'Unauthorized access');
    }


    public function send($courseId)
    {
        $user = auth()->user();

        $existingReport = ReportQuick::where('course_id', $courseId)
            ->where('reporter_id', $user->id)
            ->first();

        if ($existingReport) return redirect()->back()->with('status', 'You have already reported this course');

        $report = new ReportQuick();
        $report->course_id = $courseId;
        $report->reporter_id = $user->id;
        $report->save();

        return redirect()->back()->with('status', 'Course has been reported');
    }

    public function deleteReport($id)
    {
        $report = Report::findOrFail($id);
        $report->delete();

        return redirect()->back()->with('status', 'Report deleted');
    }

    public function deleteReportQuick($id)
    {
        $reportQuick = ReportQuick::findOrFail($id);
        $reportQuick->delete();

        return redirect()->back()->with('status', 'Report deleted');
    }

}
