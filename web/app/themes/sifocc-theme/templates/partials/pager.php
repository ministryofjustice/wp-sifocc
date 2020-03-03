<?php if ($wp_query->max_num_pages > 1) : ?>

    <nav class="pager">
        <?php h()->pagination(); ?>
    </nav>

<?php endif; ?>
