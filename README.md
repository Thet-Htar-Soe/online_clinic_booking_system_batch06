<h5>Title</h5>
<p>Online_Clinic_Booking_System</p>
<h5>Description</h5>
<p>1.To make appointment through online without going in person to clinic.</p>
<p>2.Our intention for this project is to work done without consuming time.</p>
<p>3.The feature we hope to implement in the future for this project is not only making appointment through online but also selling medicines with door to door system.</p>
<h5>Contents</h5>
<a href="#admin">Admin</a>
<a href="#doctor">Doctor</a>
<a href="#patient">Patient</a>
<ol>
<li id="admin">Admin</li>
<ul><li>Admin Login=>Check in Browser:/admin_signup</li>
<li>Create Doctor Accounts=>Check in Browser:/doctor/create</li>
<li>Update Profile=>Check in Browser:/admin/{id}</li>
<li>Delete Profile=>By pressing the delete button</li></ul>
<li id="doctor">Doctor</li><ul><li>Doctor Login=>Check in Browser:/doctor_signup</li><li>Update Profile=>Check in Browser:/doctor/{id}</li><li>Search Bookings by patient name</li><li>Create invoices/{booking-id}</li>
<li>generate PDF for invoices</li>
<li>Choose available appointment date,Deny appointment date,Choose another available appointment date by sending mail=>Check in browser:/bookings</li></ul>
<li id="patient">Patient</li>
<ul><li>Create Account=>Check in browser:/patient/create</li>
<li>Patient Login=>Check in Browser:/patient_signup</li>
<li>View Doctor Lists,Search Doctor, Make appointment with doctor by sending mail</li></ul></ol>
<h5>How to install and run the project</h5>
<ul>
    <li>
        Clone your project
    </li>
    <li>
        Go to the folder application using cd command on your cmd or terminal
    </li>
    <li>
        Run composer install on your cmd or terminal
    </li>
    <li>
        Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
    </li>
    <li>
        Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
    </li>
    <li>
        Run php artisan key:generate
    </li>
    <li>
        Run php artisan migrate:fresh --seed
    </li>
    <li>
        Run php artisan serve
    </li>
    <li>
        Go to http://localhost:8000/
    </li>
    <li>To do patient login,doctor login,admin login, use the email in correspond to your database seeding and psw:batch06gp2</li>
</ul>
<h5>Used PHP Packages</h5>
<ul>
<li>Dompdf</li>
<li>Metawebsite Excel</li>
<li>Faker PHP</li>
<li>Laravel Excel</li>
<li>PHP Mailer</li>
</ul>
<h6>Other Libraries</h6>
<ul>
<li>Sweet Alert</li>
<li>Bootstrap</li>
<li>Fontawesome</li>
<li>Chart.js</li>
</ul>
