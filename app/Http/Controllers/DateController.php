<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Carbon;
use OmarElnaghy\LaraDateFilters\Enums\DateRange;

class DateController extends Controller
{
    public function manipulate() 
    {
        $startDate = Carbon::parse(today());
        $range = DateRange::INCLUSIVE;
        $direction = 'after';
        $sql = User::filterByDateRange(2, 'day', $startDate, $direction, $range)->toRawSql();
        echo __('SQL query to select all users created between today and the day after tomorrow: ') . $sql . PHP_EOL;
    }
}
