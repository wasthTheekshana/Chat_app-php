<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
    <div class="field-input">
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
        <label> First Name</label>
        <input type="text" name="fname" placeholder="Name" required>
    </div>
        <div class="field-input">
            <label> First Name</label>
            <input type="text" name="fname" placeholder="Name" required>
        </div>
        <div class="field-input">
            <label> Last Name</label>
            <input type="text" name="fname" placeholder="Name" required>
        </div>
        <div class="field-input">
            <label> Email</label>
            <input type="text" name="fname" placeholder="Name" required>
        </div>
        <div class="field-input">
            <label> Password</label>
            <input type="text" name="fname" placeholder="Name" required>
        </div>
        <div class="field-image">
            <label>Selecte Image</label>
            <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field-button">
            <input type="submit" name="submit" value="Continue to chat">
        </div>
        </form>
    </div>
</body>

