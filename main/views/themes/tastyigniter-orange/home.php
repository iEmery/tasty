<?php echo get_header(); ?>
<?php echo get_partial('content_top'); ?>

<?php if ($this->alert->get()) { ?>
    <div id="notification">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $this->alert->display(); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<div id="page-content">
	<div class="container top-spacing-10">
	    <div class="content-wrap">
            
                        
            

            <?php echo get_partial('content_bottom'); ?>
        </div>
	</div>
</div>
<?php echo get_footer(); ?>