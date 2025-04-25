<?php
// Start session safely
include 'sesstion.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'header.php';
include 'sidebar.php';

// Safely fetch session variables
$admin_id = isset($_SESSION['admin_id']) ? $_SESSION['admin_id'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$mobile = isset($_SESSION['mobile']) ? $_SESSION['mobile'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<form id="loginform" method="post"></form>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Admin Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="nav-item dropdown header-profile">
                            <img class="nav-link" src="images/profile/avatar.png" width="80" height="80" alt="">
                            <div class="media-body">
                                <h4 class="mb-0"><?php echo htmlspecialchars($admin_id); ?></h4>
                                <p class="mb-0 text-muted">Administrator</p>
                            </div>
                        </div>
                        <div class="mb-3">
                                <label><strong>Email</strong></label>
                                <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($row['name']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label><strong>name</strong></label>
                                <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($row['email']); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label><strong>Name</strong></label>
                                <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($row['name']); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label><strong>Contact</strong></label>
                                <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($row['mobile']); ?>" required>
                            </div>


                        <a href="editprofile.php" class="btn btn-primary mt-4">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="vendor/global/global.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script>

</body>
</html>
