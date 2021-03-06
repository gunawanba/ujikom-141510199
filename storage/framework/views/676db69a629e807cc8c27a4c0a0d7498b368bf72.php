

<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo e(url('assets/plugins/bootstrap/bootstrap.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(url('assets/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(url('assets/plugins/pace/pace-theme-big-counter.css')); ?>" rel="stylesheet" />
   <link href="<?php echo e(url('assets/css/style.css')); ?>" rel="stylesheet" />
      <link href="<?php echo e(url('assets/css/main-style.css')); ?> " rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="<?php echo e(url('assets/img/logo.png')); ?>" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan Login</h3>
                    </div>
                    <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>

                            <fieldset>
                               <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                           

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" placeholder="E-Mail"  name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                          

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-0">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-0">
                                <button type="submit" class="btn btn-primary btn btn-lg btn-success btn-block" >
                                    Login
                                </button>

                                <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="<?php echo e(url('assets/plugins/jquery-1.10.2.js')); ?>"></script>
    <script src="<?php echo e(url('assets/plugins/bootstrap/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/plugins/metisMenu/jquery.metisMenu.js')); ?>"></script>

</body>

</html>






<!-- ///////////////////////////////////////////////////// -->

