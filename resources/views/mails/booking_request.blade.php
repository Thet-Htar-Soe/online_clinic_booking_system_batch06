<h3>Dear Dr. {{ $mailData['name'] }}</h3>
<p>You have new booking request. Please Check in your dashboard. Here is booking information,</p>
<h4>Patient Name:</h4>
<p>{{ $mailData['patientName'] }} </p>
<h4>First Priority DateTime:</h4>
<p>
    {{ date('d-m-Y', strtotime($mailData['first_date'])) }} : {{ date('H:i:s', strtotime($mailData['first_date'])) }}
</p>
<h4>Second Priority DateTime:</h4>
<p>
    {{ date('d-m-Y', strtotime($mailData['second_date'])) }} : {{ date('H:i:s', strtotime($mailData['second_date'])) }}
</p>
<h4>Third Priority DateTime:</h4>
<p>
    {{ date('d-m-Y', strtotime($mailData['third_date'])) }} : {{ date('H:i:s', strtotime($mailData['third_date'])) }}
</p>

<h5>Sincerely Yours,</h5>
<p>Hope Clinic</p>
