<?php include './app/views/layouts/header.php'; ?>


<div class="container">
    <div class="row">
        <h1>Login</h1>
        <form action="index.php?c=user&a=login" method="post" class="form-signin col-md-4 offset-md-4 text-center mt-5">
            <img class="mb-4" src="/public/images/logo-icon.png" alt="" width="72">
            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <input name="password" type="password" id="inputPassword" class="form-control mt-1" placeholder="Password" required="">
            <div class="checkbox mb-2 text-left">
                <label>
                    <input type="checkbox" value="remember-me"> Remember
                </label>
            </div>
            <button class="btn btn-lg btn-dark btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">© 2020</p>
        </form>
    </div>
</div>


<?php include './app/views/layouts/footer.php'; ?>
