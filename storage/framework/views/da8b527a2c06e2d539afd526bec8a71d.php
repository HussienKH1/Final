<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo e(asset('style.css')); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <title>K Fitness</title>
    <style>
        body{background-image:url(<?php echo e(asset ('Images/young-healthy-man-athlete-doing-exercise-with-ropes-gym-single-male-model-practicing-hard-training-his-upper-body-concept-healthy-lifestyle-sport-fitness-bodybuilding-wellbeing.jpg')); ?>);}
        body{background-size: cover;
        background-repeat: no-repeat;}
    </style>
</head>

<body>
    <header class="header">
        <a href="/index" class="logo">
            <img src="<?php echo e(asset ('Images/WhatsApp Image 2023-04-30 at 10.12.24 PM.png')); ?>" width="15%" height="15%" alt=""></a>
        <nav>
            <div class="navbar">
                <a href="/index">Home</a>
                <a href="/index#classes">Classes</a>
                <a href="/index#trainers">Trainers</a>
                <a href="/index#nutrition">Nutrition</a>
                <a href="<?php echo e(route ('plan')); ?>">Plan</a> 
                <span>|</span>
                <a href="<?php echo e(route ('auth.login')); ?>"><i class="icon"><ion-icon name="person-outline"></ion-icon></i></a>
            </div>
        </nav>
        </header>
    <style>
        .header{background-color: transparent;}
    </style>

    <div class="lform">
        <div class="login-form">
            <h2>Login</h2>
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="input-box">
                                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                                <input type="email" name="email" id="email" required>
                                <label>Email</label>
                            </div>
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                
                                    <div class="input-box">
                                        <span class="icon"><ion-icon name="key"></ion-icon></span>
                                        <input type="password" name="password" id="password" required>
                                        <label>Password</label>
                                    </div>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    <div class="remember-forgot">
                                        <label><input type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>Remember me</label>
                                        <a href="<?php echo e(route('password.request')); ?>">Forgot Password?</a>
                                    </div>

                                    <button type="submit" class="btn">Login</button>

                    
                                    <div class="login-register">
                                        <p>Don't have an account?<a href="<?php echo e(route('auth.register')); ?>" class="register-link">Click Here</a></p>
                                    </div>
                            
                        </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php /**PATH C:\Users\user\Desktop\Final\Gym\resources\views/auth/login.blade.php ENDPATH**/ ?>