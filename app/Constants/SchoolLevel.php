<?php

namespace App\Constants;

use App\Constants\Constants;

class SchoolLevel extends Constants
{
    const SD = 1;
    const SMP = 2;
    const SMK = 3;
    const SMA = 4;

    public static function labels(): array
    {
        return [
            self::SD => 'Sekolah Dasar',
            self::SMP => 'Sekolah Menengah Pertama',
            self::SMK => 'Sekolah Menengah Kejuruan',
            self::SMA => 'Sekolah Menengah Atas',
        ];
    }
}
