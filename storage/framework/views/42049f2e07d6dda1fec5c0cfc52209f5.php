<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <title>K Fitness</title>
</head>
<body>
    <header class="header">
        <a href="<?php echo e(route ('home')); ?>" class="logo">
            <img src="<?php echo e(asset('Images/WhatsApp Image 2023-04-30 at 10.12.24 PM.png')); ?>" width="15%" height="15%" alt=""></a>
        <nav>
            <div class="navbar">
                <a href="<?php echo e(route ('home')); ?>">Home</a>
                <a href="/home#classes">Classes</a>
                <a href="/home#trainers">Trainers</a>
                <a href="/home#nutrition">Nutrition</a>
                <a href="<?php echo e(route ('plan')); ?>">Plan</a> 
                <span>|</span>
                <a href="#" onclick="event.preventDefault(); logout()"><ion-icon name="log-out-outline"></ion-icon></i></a>
            </div>
        </nav>
              <script>
        function logout() {
            fetch("<?php echo e(route('logout')); ?>", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "<?php echo e(csrf_token()); ?>"
                }
            }).then(response => {
                if (response.redirected) {
                    window.location.href = response.url;
                }
            });
        }
    </script>
    </header>
    <section class="plan" id="plan">
        <h1 class="heading">Our membership plans</h1> 
        <div class="box-container">
        <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="box">
                <h3 class="title"><?php echo e($plan->name()); ?></h3>
                <h3 class="Price"><?php echo e($plan->price); ?><span><?php echo e($plan->abbreviation()); ?></span></h3>
                <?php if($plan['name'] === 'Basic Plan'): ?>
                <h3 class="month">3 months</h3>
                <ul>
                    <li><i class="fas fa-check"></i>Weightlifting</li>
                    <li><i class="fas fa-check"></i>Protien Powder</li>
                    <li><i class="fas fa-check"></i>Kereatine</li>
                    <li><i class="fas fa-check"></i>cardio</li>     
                </ul>
                <?php elseif($plan['name'] === 'Standard Plan'): ?>
                <h3 class="month">6 months</h3>
                 <ul>
                    <li><i class="fas fa-check"></i>Weightlifting</li>
                    <li><i class="fas fa-check"></i>Protien Powder</li>
                    <li><i class="fas fa-check"></i>Kereatine</li>
                    <li><i class="fas fa-check"></i>cardio</li>     
                </ul>
                <?php else: ?>
                <h3 class="month">12 months</h3>
                <ul>
                    <li><i class="fas fa-check"></i>Weightlifting</li>
                    <li><i class="fas fa-check"></i>Protien Powder</li>
                    <li><i class="fas fa-check"></i>Kereatine</li>
                    <li><i class="fas fa-check"></i>cardio</li>     
                    <li><i class="fas fa-check"></i>boxing</li>          
                </ul>
                <?php endif; ?>
                <a href="<?php echo e(route ('payments' ,['plan' => $plan->stripeName()])); ?>"><button class="btn">Buy</button></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html><?php /**PATH C:\Users\user\Desktop\Final\Gym\resources\views/plan.blade.php ENDPATH**/ ?>