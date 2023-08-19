
<section style="margin-top: 120px;">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card">
                    <div class="bg-dark text-light card-header">
                        <h3 class="text-center">Login Form</h3>
                    </div>
                    <div class="card-body px-4">
                        <p class="text-center text-danger"><?php echo isset($message) ? $message : '';?></p>
                        <form action="route.php?page=home" method="POST">
                            <div class="form-group mt-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group mt-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                            </div>
                            <div class="form-group mt-3 text-center">
                               <button type="submit" name="loginBtn" class="btn btn-dark w-100">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>