<aside class="nav">
    <section class="archives">
        <h2 class="archives-header">Archives</h2>
            <li><?php wp_get_archives( 'type=monthly' ); ?></li>
    </section>
    <h4>About</h4>
<p><?php the_author_meta( 'description' ); ?> </p>
</aside>