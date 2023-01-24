<h4>Dear {{ $acceptMailData['patietnName'] }}</h4>
<p>
    Your booking was accepted, Doctor accept to come on {{ date('d-m-Y', strtotime($acceptMailData['acceptDate'])) }}.
</p>

<h5>Sincerely Yours,</h5>
<p>Hope Clinic</p>
