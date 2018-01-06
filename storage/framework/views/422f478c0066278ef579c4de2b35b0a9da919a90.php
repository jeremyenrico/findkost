<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Find Kost</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" type="text/css" href="css/mycss.css">
    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <span class="color">Find Kost
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li>
                        <form class="navbar-form" action="<?php echo e(url('/search')); ?>">
                            <div class="input-group">
                                 <input type="text" class="form-control" placeholder="search" name="q">
                                 <div class="input-group-btn">
                                     <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                 </div>
                            </div>
                        </form>    
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                            <ul id="dropdown-login" class="dropdown-menu">
                                 <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2><span class="color">LOGIN</span></h2>
                                             <form class="form" method="post" action="<?php echo e(url('/login')); ?>">
                                                    <?php echo e(csrf_field()); ?>

                                                    <div class="form-group">
                                                         <label class="sr-only">Email address</label>
                                                         <input type="email" class="form-control<?php echo e($errors->has('email') ? ' has-error' : ''); ?>" placeholder="Email address" name="email">
                                                         <?php if($errors->has('email')): ?>
                                                             <span class="help-block">
                                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                                             </span>
                                                         <?php endif; ?>
                                                    </div>
                                                    <div class="form-group">
                                                         <label class="sr-only">Password</label>
                                                         <input type="password" class="form-control<?php echo e($errors->has('password') ? ' has-error' : ''); ?>" placeholder="Password" name="password">
                                                         <?php if($errors->has('password')): ?>
                                                         <span class="help-block">
                                                             <strong><?php echo e($errors->first('password')); ?></strong>
                                                         </span>
                                                         <?php endif; ?>
                                                         <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                                    </div>
                                                    <div class="form-group">
                                                         <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                    </div>
                                             </form>
                                        </div>
                                        <div class="bottom text-center">
                                            Don't Have an Account ?<br><button type="button" class="btn btn-info" data-target="#registerModal" data-toggle="modal"><b>Join Us</b></button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    <?php elseif(Auth::user()->name == "admin"): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/insertform')); ?>"><i class="fa fa-btn fa-home"></i>Insert Kost</a></li>
                                <li><a href="<?php echo e(url('/viewAdminKost')); ?>"><i class="fa fa-btn fa-home"></i>View All Kost</a></li>
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/findkost')); ?>"><i class="fa fa-btn fa-home"></i>Find Kost</a></li>
                                <li><a href="<?php echo e(url('/')); ?>"><i class="fa fa-btn fa-briefcase"></i>About</a></li>
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>
    <footer class="footer-distributed">

            <div class="footer-left">

                <h3><span class="color">Find Kost</span></h3>

                <p class="footer-links">
                    <a href="#">Home</a>
                    ·
                    <a href="#">Find Kost</a>
                    ·
                    <a href="#">Login</a>
                    ·
                    <a href="#">Register</a>
                    ·
                    <a href="#">About</a>
                    ·
                </p>

                <p class="footer-company-name">Find Kost &copy; 2018</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>27 Kebun Jeruk Raya Street</span> Jakarta, Indonesia</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+628 86130188</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">findkost@gmail.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About Find Kost</span>
                    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>

                </div>

            </div>

        </footer>
        <div class="modal fade" id="registerModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h2 class="modal-title"><span class="color">Create Account</span></h2>
                    </div>
                    <div class="modal-body">
                        <div class="container2">
                            <div class="row">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <form method="post" action="<?php echo e(url('/register')); ?>">
                                            <?php echo e(csrf_field()); ?>

                                            <div class="form-group">
                                                <label class="control-label" for="signupName">Your name</label>
                                                <input  type="text" class="form-control" name="name">
                                                <?php if($errors->has('name')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="signupEmail">Email</label>
                                                <input  type="email" class="form-control" name="email">
                                                <?php if($errors->has('email')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="signupPassword">Password</label>
                                                <input  type="password" class="form-control" placeholder="at least 6 characters" name="password">
                                                <?php if($errors->has('password')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="signupPasswordagain">Confirm Password</label>
                                                <input  type="password" class="form-control" name="password_confirmation">
                                                <?php if($errors->has('password_confirmation')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info btn-block">Create your account</button>
                                            </div>
                                            <p class="form-group">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      
            </div>
        </div>

    <script src="js/jquery-3.2.1.min.js" ></script>
    
    <script src="js/bootstrap.min.js" ></script>
    <?php /* <script src="<?php echo e(elixir('js/app.js')); ?>"></script> */ ?>
</body>
</html>
