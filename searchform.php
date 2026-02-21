<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="text" name="s" placeholder="কি কাজ খুঁজছেন?" value="<?php echo get_search_query(); ?>">
                        
        <select name="job_loc">
            <option value="">সব লোকেশন</option>
            <?php 
            $locations = get_terms(['taxonomy' => 'job_location', 'hide_empty' => false]);
                 foreach ($locations as $loc) : ?>
            <option value="<?php echo esc_attr($loc->slug); ?>">
                <?php echo esc_html($loc->name); ?>
            </option>
            <?php endforeach; ?>
        </select>
                        
    <button type="submit">খুঁজুন</button>
</form>