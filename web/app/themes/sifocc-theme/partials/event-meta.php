<small>
    <?php
        $start = get_field('start_date', false, false);
        $end = get_field('end_date', false, false);

        $start = new DateTime($start);
        $end = new DateTime($end);

        if (get_field('end_date')) :
            echo $start->format('j F');
            echo ' - ';
            echo $end->format('j F Y');
        else :
            echo $start->format('j F Y');
        endif;
    ?>
</small>
