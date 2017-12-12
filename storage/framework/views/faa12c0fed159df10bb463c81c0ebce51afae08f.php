




<?php $__env->startSection('title'); ?> Home :: Translate ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-10">
                                <label for="input">Input:</label>
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default" id="btn-input" value="ja">Japanese</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="button" id="btn-exchange" class="btn btn-default pull-right" onclick="exchage_language()"><span class="glyphicon glyphicon-resize-horizontal"></span></button>
                            </div>
                        </div>
                        <textarea class="form-control" rows="15" id="input" placeholder="Enter here ..."></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="output">Output:</label>
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default" id="btn-output" value="vi">Vietnamese</button>
                                </div>
                            </div>
                        </div>
                        <textarea class="form-control" rows="15" id="output" disabled="disabled"></textarea>
                    </div>
                </div>
            </div>

        </div>
        
        <div class = "capatcha">
            <div class="g-recaptcha" data-sitekey="6LdyVzkUAAAAALu1HVWDaJ7lKoWp_xciEDiZw-V6"></div>
            <span id = "captcha"></span>
        </div>
        <div class="checkbox text-center" >
            <button type="button" class="btn btn-default" id = "translate">Translate</button>
            
        </div>
        
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript" src="<?php echo e(asset('js/translate-guest.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<style>
    .capatcha {
        text-align: center;
    }

    .g-recaptcha {
        display: inline-block;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>