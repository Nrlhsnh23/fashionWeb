<?= $this->extend('base/baseRegis') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">

            <div class="p-5">
                <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>

            <form class="user" action="/register" method="post">

                <div class="form-group">
                    <label for="example-email">Name</label>
                    <input type="text" class="form-control form-control-user" id="example-email" aria-describedby="emailHelp" 
                        placeholder="Enter name" required name="name">
                </div>

                <div class="form-group">
                    <label for="example-email">Email</label>
                    <input type="text" class="form-control form-control-user" id="example-email" aria-describedby="emailHelp" 
                        placeholder="Enter email" required name="email">
                </div>

                <div class="form-group">
                    <label for="example-password">Password</label>
                    <input type="password" class="form-control form-control-user" id="example-password" aria-describedby="emailHelp" 
                        placeholder="Enter password" required name="password">
                </div>

                <div class="form-group">
                    <label for="example-password-confirmation">Password Confirmation</label>
                    <input type="password" class="form-control form-control-user" id="example-password-confirmation" aria-describedby="emailHelp" 
                        placeholder="Enter password" required name="password_confirmation">
                </div>
                
                <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
            
                <hr>
                <div class="text-center">
                <a class="small" href="/login">Already have an account? Login!</a>
                </div>

            </form>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>