<?php get_header(); ?>

    <section class="section works__content">
        <div class="works__main-title-area">
            <h1 class="yellowtail">
                Woeks<br>
                <span>制作事例</span>
            </h1>
            <p>
                長年さまざまなイメージパースを製作しており、<br class="br-change">
                要望通りのものをご提案させていただきます。<br class="br-change">
                手書きとCGどちらでも製作いたします。
            </p>
        </div>
        <div class="works__gallery">
            <select class="works__sort" name="category">
                <option value="all">全て</option>
                <option value="outward">外観パース</option>
                <option value="house">戸建住宅パース</option>
                <option value="layout">間取り・レイアウト</option>
                <option value="shared">共有スペースパース</option>
                <option value="presentation">コンペ・プレゼンテーション</option>
                <option value="resort">リゾート施設</option>
                <option value="colur">鳥瞰カラーパース</option>
                <option value="site">敷地平面</option>
            </select>
            <ul class="works__wrap-items">
                <li class="" style="background-image: url(<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-01.jpg);"></li>
                <li class="" style="background-image: url(<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-01.jpg);"></li>
                <li class="" style="background-image: url(<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-01.jpg);"></li>
                <li class="" style="background-image: url(<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-01.jpg);"></li>
                <li class="" style="background-image: url(<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-01.jpg);"></li>
                <li class="" style="background-image: url(<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-01.jpg);"></li>
                <li class="" style="background-image: url(<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-01.jpg);"></li>
                <li class="" style="background-image: url(<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-01.jpg);"></li>
                <li class="" style="background-image: url(<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-01.jpg);"></li>
                <li class="" style="background-image: url(<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-01.jpg);"></li>
                <li class="" style="background-image: url(<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-01.jpg);"></li>
                <li class="" style="background-image: url(<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-01.jpg);"></li>
            </ul>
        </div>


    </section>


<?php get_footer(); ?>