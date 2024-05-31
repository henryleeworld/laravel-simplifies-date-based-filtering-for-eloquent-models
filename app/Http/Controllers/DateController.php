<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use OmarElnaghy\LaraDateFilters\Enums\DateRange;

class DateController extends Controller
{
    public function manipulate() 
    {
        $startDate = Carbon::parse(today());
        $range = DateRange::INCLUSIVE;
        $direction = 'after';
        $sql = User::filterByDateRange(2, 'day', $startDate, $direction, $range)->toRawSql();
        echo '從使用者中選擇所有建立時間介於今天到後天的 SQL 語法：' . $sql . PHP_EOL;
    }
}
