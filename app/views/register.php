<?php include './app/views/layouts/header.php'; ?>


<div class="container">
    <div class="row">
        <form action="index.php?c=user&a=register" class="form-signin col-md-4 offset-md-4 text-center mt-5">
            <img class="mb-4" src="/public/images/logo-icon.png" alt="" width="72">
            <!-- <label for="inputEmail" class="sr-only">Email address</label> -->
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <!-- <label for="inputPassword" class="sr-only mt-1">Password</label> -->
            <input type="password" id="inputPassword" class="form-control mt-1" placeholder="Password" required="">
            <input type="password" id="inputPassword" class="form-control mt-1" placeholder="Repeat Password" required="">

            <button class="btn btn-lg btn-dark btn-block" type="submit">Sign Up</button>
            <p class="mt-5 mb-3 text-muted">© 2020</p>
        </form>
    </div>
</div>


<?php include './app/views/layouts/footer.php'; ?>