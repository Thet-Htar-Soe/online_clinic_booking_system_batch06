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
<h5>Preview</h5>
<h6>Admin Preview</h6>
<img src="public/img_preview/admin/img_admin_login.jpg" alt="Admin Preview"/>
<img src="public/img_preview/admin/img_admin_home.jpg" alt="Admin Preview"/>
<img src="public/img_preview/admin/img_admin_profile.jpg" alt="Admin Preview"/>
<img src="public/img_preview/admin/img_create_doctor.jpg" alt="Admin Preview"/>
<img src="public/img_preview/admin/img_income_barchart.jpg" alt="Admin Preview"/>
<h6>Doctor Preview</h6>
<img src="public/img_preview/doctor/img_doctor_login.jpg" alt="Preview"/>
<img src="public/img_preview/doctor/img_doctor_profile.jpg" alt="Preview"/>
<img src="public/img_preview/doctor/img_booking_confirm.jpg" alt="Preview"/>
<img src="public/img_preview/doctor/img_booking_deny.jpg" alt="Preview"/>
<img src="public/img_preview/doctor/img_booking_con.jpg" alt="Preview"/>
<img src="public/img_preview/doctor/img_search_booking_by_patient.jpg" alt="Preview"/>
<img src="public/img_preview/doctor/img_checkout.jpg" alt="Preview"/>
<img src="public/img_preview/doctor/img_invoice.jpg" alt="Preview"/>
<h6>Patient Preview</h6>
<img src="public/img_preview/patient/img_register.jpg" alt="Preview"/>
<img src="public/img_preview/patient/img_patient_login.jpg" alt="Preview"/>
<img src="public/img_preview/patient/img_doctor_list.jpg" alt="Preview"/>
<img src="public/img_preview/patient/img_doctor_search.jpg" alt="Preview"/>
<img src="public/img_preview/patient/img_doctor_detail.jpg" alt="Preview"/>
<img src="public/img_preview/patient/img_booking_create.jpg" alt="Preview"/>
<img src="public/img_preview/patient/img_booking_status.jpg" alt="Preview"/>
<img src="public/img_preview/patient/img_booking_confirm.jpg" alt="Preview"/>
<img src="public/img_preview/patient/img_request_mail.jpg" alt="Preview"/>
<img src="public/img_preview/patient/img_confirm_mail.jpg" alt="Preview"/>
<img src="public/img_preview/patient/img_deny_mail.jpeg" alt="Preview"/>
<img src="public/img_preview/patient/img_accept_mail.jpg" alt="Preview"/>

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
        Copy .env.local file to .env on the root folder. You can type copy .env.local .env if using command prompt Windows or cp .env.local .env if using terminal, Ubuntu
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
