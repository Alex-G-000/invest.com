<section class="most-traded block <?php echo $args['some_class']; ?>">
    <div class="container">
        <div class="most-traded__content">
            <div class="most-traded__header section-header">
                <h2 class="section-header__header"><?php echo $args['title']; ?></h2>
                <p class="section-header__text"><?php echo $args['subtitle']; ?></p>
            </div>
            <div class="row most-traded__row">
                <?php echo $args['inner']; ?>
            </div>
        </div>
    </div>
</section>