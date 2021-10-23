<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
        <section class="form signup">
        <form action="#"  method="POST">
        <div class="field input">
            <label> First Name</label>
            <input type="text" name="fname" placeholder="Name">
        </div>
        <div class="field input">
            <label> Last Name</label>
            <input type="text" name="lname" placeholder="Name">
        </div>
        <div class="field input">
            <label> Email</label>
            <input type="text" name="email" placeholder="Name">
        </div>
        <div class="field input">
            <label> Password</label>
            <input type="text" name="password" placeholder="Name" >
        </div>
        <div class="field image">
            <label>Selecte Image</label>
            <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" >
        </div>
        <div class="field button">
            <input type="submit" name="submit" value="Continue to chat">
        </div>
        </form>
        </section>
    </div>


<script src="js/signup.js"></script>
</body>

