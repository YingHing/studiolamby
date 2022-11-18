<?php
    $content = split_content();
?>

<div class="container-fluid px-4 py-5 mb-5 animate__animated animate__slideInUp">
<div class="row mt-9">
        <div class="col">
            <div class="post-text" >
                <h1> <?php echo '<div id="column1">', array_shift($content), '</div>'; ?> </h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-4 py-5 animate__animated animate__slideInUp" style="background-color: #000;">
<!-- <hr class="m-auto" style="width:100%;"/> -->
    <div class="row py-5">
        <div class="col-lg-auto pe-5">
            <h1 class="display-1 mb-5"> <?php echo(the_title()); ?> </h1>
        </div>
        <div class="col-lg-7">
            <h1> <?php echo '<div class="d-flex flex-wrap align-text-bottom mt-8">', implode($content), '</div>'; ?> </h1>
        </div>
    </div>
</div>