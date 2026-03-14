<p>This is site ber area</p>
<?php if(is_active_sidebar('main_sidebar_1')): ?>
    <div id="secondary">
        <?php dynamic_sidebar('main_sidebar_1');  ?>
    </div> 
<?php endif;?>