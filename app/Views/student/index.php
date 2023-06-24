<?php

$this->extend('layouts/main.php');
$this->section('content');

?>

<div class="container mt-5">
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>STUDENT DATA</h4>

                    <a href="/students/create" class="btn btn-sm btn-primary">Add Student</a>

                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped shadow table-bordered text-center">
                        <thead class="bg-primary text-light ">
                            <tr>
                                <th>ID</th>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>AGE</th>
                                <th>ADDRESS</th>
                                <th>COURSE</th>
                                <th>ADVISER</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($students as $student) : ?>
                                <tr>
                                    <td><?= $student['id'] ?></td>
                                    <td><?= $student['first_name'] ?></td>
                                    <td><?= $student['last_name'] ?></td>
                                    <td><?= $student['age'] ?></td>
                                    <td><?= $student['address'] ?></td>
                                    <td><?= $student['course'] ?></td>
                                    <td><?= $student['adviser'] ?></td>
                                    <td>
                                        <a href="/students/edit/<?= $student['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="/students/delete/<?= $student['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>