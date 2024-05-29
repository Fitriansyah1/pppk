<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">My Profile</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Profile Card -->
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profile Information</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="<?= base_url('assets/backend/img/profile/') . $user['image']; ?>" class="img-fluid rounded-circle" style="max-width: 150px;" alt="Profile Picture">
                    </div>
                    <div class="text-center mt-3">
                        <h2 class="h4 mb-0"><?= $user['name']; ?></h2>
                        <p class="text-muted"><?= $user['email']; ?></p>
                    </div>
                    <hr>
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>