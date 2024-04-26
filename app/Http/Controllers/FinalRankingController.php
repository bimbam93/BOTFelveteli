<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentLoginRequest;
use App\Models\Student;
use App\Models\StudentLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinalRankingController extends Controller
{
    //
    public function index()
    {
        return view('50_final_ranking.index', [
            //'updated_at' => ' - 2024.04.26. - '
        ]);
    }

    public function login(StudentLoginRequest $request)
    {
        return redirect()->route('student.index');
        /*
        $sign = null;
        if ($request->input('sign') != NULL) {
            $sign = strtoupper($request->input('sign'));
        }

        $student = Student::where('edu_id', $request->input('eduid'))
            ->where('born_date', $request->input('born'))
            ->where('sign', $sign)
            ->first();

        if ($student == NULL) {
            return redirect()->route('index')->withErrors(['msg' => 'Adott paraméterekkel nem található tanuló!']);
        }

        Auth::guard('student')->loginUsingId($student->id);
        //$request->session()->regenerate();

        StudentLog::create([
            'edu_id' => $student->edu_id,
            'ip' => $request->ip(),
            'note' => $request->userAgent(),
        ]);

        return redirect()->route('student.dashboard');
        */
    }

    public function dashboard()
    {
        //If(!(Auth::guard('student')->check())) return redirect()->route('result');

        $student = Student::find(Auth::guard('student')->id());

        return view('40_ranking.dashboard', [
            'student' => $student,
        ]);
    }
}
