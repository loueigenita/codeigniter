<?php

$this->extend('layouts/main.php');
$this->section('content');

?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>UPDATE STUDENT</h4>
                    <a href="/students" class="btn btn-sm btn-primary">Back To List</a>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="/students/update/<?= $student['id'] ?>" method="POST" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name" value="<?= $student['first_name'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" value="<?= $student['last_name'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" class="form-control" name="age" value="<?= $student['age'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address" value="<?= $student['address'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="course" class="form-label">Course</label>
                                    <input type="text" class="form-control" name="course" value="<?= $student['course'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="adviser" class="form-label">Adviser</label>
                                    <input type="text" class="form-control" name="adviser" value="<?= $student['adviser'] ?>">
                                </div>

                                <div class="d-inline">
                                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>