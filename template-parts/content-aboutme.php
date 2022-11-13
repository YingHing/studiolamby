<div class="container-fluid px-4 mb-4 animate__animated animate__slideInUp animate__slow">
    <div class="row mt-6">
        <div class="col">
            <div class="post-text" >
                <h1> <?php echo wp_strip_all_tags( get_the_content() ); ?> </h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-4 mb-4 animate__animated animate__slideInUp animate__slow" style="background-color: #000;">
    <div class="row mt-5">
        <div class="col mt-5">
            <div class="post-text" >
                <h1 class="display-1"> <?php echo(the_title()); ?> </h1>
                <h1> <?php echo wp_strip_all_tags( get_the_content() ); ?> </h1>
            </div>
        </div>
    </div>
</div>