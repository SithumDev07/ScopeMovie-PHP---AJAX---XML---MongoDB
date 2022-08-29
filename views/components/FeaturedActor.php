<?php

function FeaturedActor($image, $name) {
    ?>
    <div class="flex flex-col items-center space-y-2 font-scope-regular">
        <img class="object-cover h-10 md:h-14 w-10 md:w-14 rounded-full grayscale" src="assets/images/dune/actors/<?php echo $image; ?>" alt="Actor One">
        <p class="text-xs text-scope-white"><?php echo $name; ?></p>
    </div>
    <?php
}