<header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Đây là menu mobile</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">Translate</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="home">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('user')): ?>
                <ul class="nav navbar-nav pull-right">
                    <li><a href="<?php echo e(route('auth.login')); ?>" >Login</a></li>
                    <li><a href="#" role="button">Register</a></li>
                </ul>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user')): ?>
                <ul class="nav navbar-nav pull-right">
                    <li><a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('global.app_logout'); ?></span>
                </a></li>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>