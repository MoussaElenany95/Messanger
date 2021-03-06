<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,900" rel="stylesheet">
    <link rel="icon" href="../assets/images/favicon.png">

</head>
<body>
<div id="perview_photo_area"><img src="" alt="" class="preview-img">
    <button class="btn signup-btn" onclick="location.href='/change/photo'">Change Photo</button>
</div>
<nav id="nav">
    <nav id="nav">

        <span class="custom-bar-icon"><img src="../assets/images/menu-icon.png" class="menu-icon"></span>

    </nav>
</nav>
<div class="chat-container">
    <section id="chat-left-area">

        <div class="profile-info">
            <ul>
                <li>
                    <div class="change_photo">
                        <span id="change_photo_shadow">Preview</span>
                        <span class="profile-img-span">
                                        <img src="../uploads/<?php echo $_SESSION['img'] ?>" alt="Profile image"
                                             class="profile-img">
                        </span>
                    </div>

                </li>
                <li><?php echo $_SESSION['user_name']; ?></li>
            </ul>
        </div>
        <div class="profile-settings">
            <h1 id="show-settings">Settings</h1>
            <ul class="ul-settings">
                <li><a href="/change/name">Change Name<span class="back-hover"></span></a></li>
                <li><a href="/change/email">Change Email<span class="back-hover"></span></a></li>
                <li><a href="/change/password">Change Password<span class="back-hover"></span></a></li>
                <li><a href="/logout?logout=1">Logout</a></li>
            </ul>
        </div>
        <div class="chats">

        </div>
    </section>
    <section id="chat-right-area">
        <div class="change-form-area">
            <form method="post" action="/update" class="change-form" id="change_email_form">
                <div class="group">
                    <h1 class="form-heading">Change Email</h1>
                </div>
                <div class="group">
                    <h3 style="color: #d9534f">Hint : if you change your email you will be logged out to verify your
                        email address make sure to type it correctly</h3>
                </div>
                <div class="group">
                    <label for="name" id="name-label">Email</label>
                    <input type="text" name="email" id="email" class="control" value="<?php echo $_SESSION['email']; ?>"
                           placeholder="Enter New Email">
                    <span id="email_feedback" style="color:red;"></span>
                </div>
                <input type="hidden" name="change_email_submit" id="change_Email_submit" class="btn signup-btn control"
                       value="Save Changes">

                <div class="group">
                    <input type="submit" name="change_email_submit" id="change_Email_submit"
                           class="btn signup-btn control" value="Save Changes">
                </div>
            </form>
        </div>
    </section>


</div>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/index.js"></script>
</body>
</html>