@extends('layouts.base')
@section('content')
<div class="container">
    <span>Doctor/Doctor Update</span>
    <div class="row justify-content-center min-vh-100">
        <div class="col-lg-12 col-md-12 col-sl-12">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row my-3">
                    <div class="col-12">
                        <div class="card shadow text-blue">
                            <div class="card-body">
                                <h4 class="text-blue">
                                    <i class="fa-solid fa-user-doctor"></i>
                                    Doctor Update
                                    <a class="float-end text-decoration-none text-blue" href="doctor_list.php">
                                        <i class="fa-solid fa-list"></i>
                                        View List
                                    </a>
                                </h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="picture" class="form-label">Picture</label>
                                        <input class="form-control" type="file" name="picture">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="degree" class="form-label">Degree</label>
                                        <input type="text" class="form-control" name="degree">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="department" class="form-label">Department</label>
                                        <select name="department" class="form-select">
                                            <option value="" selected disabled>Choose...</option>
                                            <option value="1">department name</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="specialist" class="form-label">Specialist</label>
                                        <select name="specialist" class="form-select">
                                            <option selected disabled value="">Choose...</option>
                                            <option value="OG">Obstetrician Gynecologist</option>
                                            <option value="Phy">Physician</option>
                                            <option value="Dental">Dental</option>
                                            <option value="Eye">Ophthalmologist</option>
                                            <option value="Surg">Surgeron</option>
                                            <option value="Ortho">Ortho</option>
                                            <option value="CH">Pediatrician</option>
                                            <option value="Ent">Ent</option>
                                            <option value="Uro">Uro</option>
                                            <option value="Derm">Derm</option>
                                            <option value="Cardio">Cardio</option>
                                            <option value="Lab">laboratory</option>
                                            <option value="Ultrasound">Ultrasound</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="experience" class="form-label">Experience</label>
                                        <input type="text" class="form-control" name="experience">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" name="dob">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="number" class="form-control" name="phone">
                                    </div>
                                    <div class="col-md-3 text-secondary">
                                        <label for="specialist" class="form-label">Gender</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="inlineRadio1" type="radio" name="gender" name="male" value="0">
                                            <label class="form-check-label" for="inlineRadio1">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="inlineRadio2" type="radio" name="gender" name="female" value="1">
                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sl-12 col-xs-12">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea name="address" class="form-control" name="address" cols="30" rows="3"></textarea>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sl-12 col-xs-12">
                                        <label for="about_me" class="form-label">About Me</label>
                                        <textarea name="about_me" class="form-control" name="address" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-6">
                                        <button class="form-control btn btn-blue text-light" name="btn-add" type="submit">Update</button>
                                    </div>
                                    <div class="col-6">
                                        <a class="form-control btn btn-secondary" data-toggle="modal" data-target="#changePasswordModel">Change Password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="changePasswordModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-blue" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="editForm" class="form-horizontal text-blue">
                    <div class="form-group">
                        <label for="old-password" class="col-12 control-label">Old Password</label>
                        <div class="col-12">
                            <input type="password" name="old-password" id="old-password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new-password" class="col-12 control-label">New Password</label>
                        <div class="col-12">
                            <input type="password" name="new-password" id="new-password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password" class="col-12 control-label">Confirm Password</label>
                        <div class="col-12">
                            <input type="password" name="confirm-password" id="confirm-password" class="form-control">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-blue text-light">Change</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--/#changePasswordModel -->
@endsection
