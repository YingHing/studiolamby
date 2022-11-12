<div class="row">
    <div class="col-lg animate__animated animate__slideInUp animate__slow">
        <div class="post-text" >
            <h1 class="size-title-article"> <?php echo(the_title()); ?> </h1>
            <p class="lead"> <?php echo wp_strip_all_tags( get_the_content() ); ?> </p>
        </div>
    </div>
</div>