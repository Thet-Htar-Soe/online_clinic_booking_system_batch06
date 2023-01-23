<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class BookingStatus extends Enum
{
    const patientRequest =   0;
    const doctorConfirm =   1;
    const bookingSuccess = 2;
    const doctorDeny = 3;
    const doctorChooseOtherDate = 4;
    const bookingReject = 5;
}
