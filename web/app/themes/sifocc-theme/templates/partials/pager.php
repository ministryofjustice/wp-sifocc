<?php if ($wp_query->max_num_pages > 1) : ?>

    <nav class="pager">
        <?php sifocc_pagination(); ?>
    </nav>

<?php endif; ?>
