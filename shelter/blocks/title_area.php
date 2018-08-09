<section class="section title-area">
    <div class="title-area__wrap-content">
        <h1 class="yellowtail">
            <?php
            if($mainTitle){
                echo $mainTitle. '<br>';
            }
            ?>
            <span>
                <?php
                if($subTitle) {
                    echo $subTitle;
                }
                ?>
            </span>
        </h1>
        <?php
        if($description) {
            echo '<p>'. $description. '</p>';
        }
        ?>
    </div>
</section>
