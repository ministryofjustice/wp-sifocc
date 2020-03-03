<?php get_header(); ?>
<div class="page-section">
    <article class="container">
        <header>
            <h1>Page not found</h1>
        </header>
        <div class="row">
            <div class="rich-text">
                <p>Sorry, but the page you were trying to view does not exist.</p>
                <p>It looks like this was the result of either:</p>
                <ul>
                    <li>a mistyped address</li>
                    <li>an out-of-date link</li>
                </ul>
                <p><a href="<?php bloginfo('url'); ?>">Go back to the homepage</a></p>
            </div>
        </div>
    </article>
</div>
<?php get_footer(); ?>
