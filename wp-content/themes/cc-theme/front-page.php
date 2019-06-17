<?php get_header(); ?>
<section class="section" style="position: relative; overflow: hidden; padding-top: 0px;">
    <div style="background-image: url(<?php echo get_theme_mod('logo', 'none') ?>)" class="bg-image">
    </div>
    <div class="container">
        <div class="hero is-large">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div style="background-color: white; padding: 20px; border-radius: 2px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1), 0 0 0 1px rgba(0, 0, 0, 0.1); ">
                        <p class="title is-1 has-text-info has-text-weight-black has-font-header"><?php echo get_theme_mod('title_text_block', 'TITLE TEXT') ?></p>
                        <p class="subtitle is-5 has-font-header"><?php echo get_theme_mod('subtitle_text_block', 'SUBTITLE TEXT') ?></p>
                        <span class="button is-info">Learn More</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="section"></section>
<section class="section">
    <div class="hero">
        <div class="hero-title">
            <div class="container has-text-centered">
                <p class="title header-font">
                    Our Partners
                </p>
            </div>
        </div>
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <?php if (get_theme_mod('sponsor_one', '') != '') : ?>
                        <div class="column is-3">
                            <a href="<? get_theme_mod('sponsor_one_link', '#') ?>">
                                <img src="<?php echo get_theme_mod('sponsor_one') ?>" />
                            </a>
                        </div>
                    <?php endif ?>
                    <?php if (get_theme_mod('sponsor_two', '') != '') : ?>
                        <div class="column is-3">
                            <a href="<? get_theme_mod('sponsor_two_link', '#') ?>">
                                <img src="<?php echo get_theme_mod('sponsor_two') ?>" />
                            </a>
                        </div>
                    <?php endif ?>
                    <?php if (get_theme_mod('sponsor_three', '') != '') : ?>
                        <div class="column is-3">
                            <a href="<? get_theme_mod('sponsor_three_link', '#') ?>">
                                <img src="<?php echo get_theme_mod('sponsor_three') ?>" />
                            </a>
                        </div>
                    <?php endif ?>
                </div>
            </div>

        </div>

    </div>
    <div class="hero">
        <div class="hero-body">
            <div class="container box">
                <div class="columns">
                    <?php if (get_theme_mod('mission-img') != '#FFF') : ?>
                        <div class="column">
                            <figure class="image ">
                                <img src="<?php echo get_theme_mod('mission-img') ?>"></img>
                            </figure>
                        </div>
                    <?php endif ?>
                    <div class="column has-text-right">
                        <p class="title is-1"><?php echo get_theme_mod('mission_text_block', 'Mission text') ?></p>
                        <p class="subtitle is-4"><?php echo get_theme_mod('mission_body_block', 'Mission body') ?></p>
                    </div>
                </div>
            </div>
            <div class="container is-fullheight">
                <div class="columns">
                    <div class="column">
                        <div class="box">
                            <p class="title"><i class="fas fa-laptop-code"></i> Content</p>
                            <p class="subtitle">Content</p>
                            <p class="">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae libero vel ante imperdiet convallis in eu diam. Nam purus felis, euismod non accumsan ac, hendrerit at nisi. Nulla elit arcu, tincidunt nec arcu mattis, congue gravida ex. Nullam ornare lacus et enim laoreet, et lacinia ante bibendum. Morbi nec posuere mi. Aenean aliquet magna et auctor ornare. Aliquam congue ex at varius vestibulum. Maecenas eleifend dui vitae pulvinar bibendum. Duis faucibus elementum lobortis. Morbi feugiat, lectus id suscipit ullamcorper, purus purus consectetur nunc, sed cursus ex enim eget elit. Nunc porttitor nulla quam, sit amet tempor ligula convallis non. Nulla dictum sollicitudin leo, sollicitudin congue tortor fermentum at.
                            </p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="box">
                            <p class="title"><i class="fas fa-laptop-code"></i> Content</p>
                            <p class="subtitle">Content</p>
                            <p class="">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae libero vel ante imperdiet convallis in eu diam. Nam purus felis, euismod non accumsan ac, hendrerit at nisi. Nulla elit arcu, tincidunt nec arcu mattis, congue gravida ex. Nullam ornare lacus et enim laoreet, et lacinia ante bibendum. Morbi nec posuere mi. Aenean aliquet magna et auctor ornare. Aliquam congue ex at varius vestibulum. Maecenas eleifend dui vitae pulvinar bibendum. Duis faucibus elementum lobortis. Morbi feugiat, lectus id suscipit ullamcorper, purus purus consectetur nunc, sed cursus ex enim eget elit. Nunc porttitor nulla quam, sit amet tempor ligula convallis non. Nulla dictum sollicitudin leo, sollicitudin congue tortor fermentum at.
                            </p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="box">
                            <p class="title"><i class="fas fa-laptop-code"></i> Content</p>
                            <p class="subtitle">Content</p>
                            <p class="">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae libero vel ante imperdiet convallis in eu diam. Nam purus felis, euismod non accumsan ac, hendrerit at nisi. Nulla elit arcu, tincidunt nec arcu mattis, congue gravida ex. Nullam ornare lacus et enim laoreet, et lacinia ante bibendum. Morbi nec posuere mi. Aenean aliquet magna et auctor ornare. Aliquam congue ex at varius vestibulum. Maecenas eleifend dui vitae pulvinar bibendum. Duis faucibus elementum lobortis. Morbi feugiat, lectus id suscipit ullamcorper, purus purus consectetur nunc, sed cursus ex enim eget elit. Nunc porttitor nulla quam, sit amet tempor ligula convallis non. Nulla dictum sollicitudin leo, sollicitudin congue tortor fermentum at.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

</body>

</html>