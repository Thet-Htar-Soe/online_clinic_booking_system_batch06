<h4>Dear {{ $otherDateMailData['patietnName'] }}</h4>
<p>
    Your booking dates are not available. Here is available date
    {{ date('d-m-Y', strtotime($otherDateMailData['confirmDate'])) }}.
    You can come on that date.
</p>

<h5>Sincerely Yours,</h5>
<p>Hope Clinic</p>
