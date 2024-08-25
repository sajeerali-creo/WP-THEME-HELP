<?php $loop = new wp_Query(array(
    'post_type' => 'all_products',
    'orderby' => 'ID',
        'order' => 'ASC',
)); ?>
<?php while ($loop->have_posts()): $loop->the_post(); ?>
    <?php for ($i = 1; $i < 6; $i++) { 
        $media_src = pods_field_display('image_' . $i);
        
        if (empty($media_src)) {
            continue; // Skip this iteration if there is no media source
        }
        ?>
        <div class="item">
            <?php if ($i == 5) { ?>
                <video controls src="<?php echo $media_src; ?>"></video>
            <?php } else { ?>
                <img src="<?php echo $media_src; ?>" alt="Orami Bags">
            <?php } ?>
        </div>
    <?php } ?>
<?php endwhile; ?>