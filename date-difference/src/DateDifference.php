<?php

namespace saifuldev\DateDifference;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DateDifference
{
    public function getDateDifference(Request $request)
    {
        $now = Carbon::now();
        $then = Carbon::parse($request->date);
        $diffInSeconds = $now->diffInSeconds($then);
        $diffInMinutes = $now->diffInMinutes($then);
        $diffInHours = $now->diffInHours($then);
        $diffInDays = $now->diffInDays($then);
        $diffInWeeks = $now->diffInWeeks($then);
        $diffInMonths = $now->diffInMonths($then);
        $diffInYears = $now->diffInYears($then);

        if ($diffInSeconds < 60) {
            return $diffInSeconds . ' sec';
        } elseif ($diffInMinutes < 60) {
            return $diffInMinutes . ' min';
        } elseif ($diffInHours < 24) {
            return $diffInHours . ' hr';
        } elseif ($diffInDays < 7) {
            return $diffInDays . ' day';
        } elseif ($diffInWeeks < 4) {
            return $diffInWeeks . ' wk';
        } elseif ($diffInMonths < 12) {
            return $diffInMonths . ' month';
        } else {
            return $diffInYears . ' year';
        }
    }
}
