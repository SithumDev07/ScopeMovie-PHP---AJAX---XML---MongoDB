<?php

function BigBButton($title, $icon, $extraTailwindCSS) {
    ?>
        <button type="button" class="text-xl px-8 sm:px-14 py-4 flex items-center space-x-4 rounded-lg <?php echo $extraTailwindCSS; ?>">
            <p><?php echo  $title; ?></p>
            <?php
                if($icon != false) {
                    ?>
                        <i class="bi bi-badge-4k-fill text-2xl"></i>
                    <?php
                }
            ?>
        </button>
    <?php
}