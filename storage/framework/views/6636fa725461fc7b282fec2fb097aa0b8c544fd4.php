<?php $__env->startSection('container'); ?>
    <link href="signin.css" rel="stylesheet">

    <div class="home container">
        <main class="form-signin w-100 mb-5">
            <div class="row justify-content-center">
                <div class="col-10 col-lg-6">

                    <?php if(session('success')): ?>
                        <div class="alert mb-5 m-auto alert-success alert-dismissible fade show" role="alert">
                            <strong><?php echo e(session('success')); ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if(session('loginError')): ?>
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Login Gagal!',
                            })
                        </script>
                    <?php endif; ?>

                    <div class="card p-5 m-5" style="outline: none !important; background-color: rgba(255, 255, 255, .7);">
                        <form action="/bukan-login" method="POST" class="mb-5" autocomplete="off">
                            <?php echo csrf_field(); ?>
                            <div class="row justify-content-center">
                                <img class="mb-4 w-25" src="../img/logo.png" alt="">
                                <h1 class="h3 mb-3 fs-1 fw-normal text-center" style="transform: scale(1.99)">
                                    <strong>Login</strong>
                                </h1>
                            </div>
                            <div class="form-floating mt-5 mb-3">
                                <input type="text" style="background-color: rgba(255, 255, 255, .8); outline: none !important" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(old('username')); ?>" id="username" name="username" placeholder="Dimas Kasep"
                                    autofocus required>
                                <label for="username" class="fs-5">Username</label>
                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger ms-3"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="password" style="background-color: rgba(255, 255, 255, .8); outline: none !important" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                                <label for="password" class="fs-5">Password</label>
                            </div>
                            <button class="w-100 btn btn-lg" type="submit">Login</button>
                        </form>
                    </div>

                </div>
            </div>
        </main>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\03.Laravel\rsialivasya\resources\views/login/index.blade.php ENDPATH**/ ?>