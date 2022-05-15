<?php $portfolio_items_portfolio_two_image = get_field('portfolio_items_portfolio_two_image'); ?>
<?php if(!empty('$portfolio_items_portfolio_two_image')) : ?>

<?php $portfolio_items_portfolio_two_icon = get_field('portfolio_items_portfolio_two_icon'); ?>
<?php if(!empty('$portfolio_items_portfolio_two_icon')) : ?>

<?php $portfolio_items_portfolio_two_title = get_field('portfolio_items_portfolio_two_title'); ?>
<?php if(!empty('$portfolio_items_portfolio_two_title')) : ?>

<?php $portfolio_items_portfolio_two_read_more_link = get_field('portfolio_items_portfolio_two_read_more_link'); ?>
<?php if(!empty('$portfolio_items_portfolio_two_read_more_link')) : ?>

<?php $portfolio_items_portfolio_two_read_more_url = get_field('portfolio_items_portfolio_two_read_more_url'); ?>
<?php if(!empty('$portfolio_items_portfolio_two_read_more_url')) : ?>

<?php $portfolio_items_portfolio_two_class = get_field('portfolio_items_portfolio_two_class'); ?>
<?php if(!empty('$portfolio_items_portfolio_two_class')) : ?>



<div class="col-lg-4 col-md-6 <?php echo $portfolio_items_portfolio_two_class; ?> grid-item">
    <figure class="product-item">
        <img src="<?php echo $portfolio_items_portfolio_two_image['url']; ?>"
            alt="<?php echo $portfolio_items_portfolio_two_image['alt']; ?>" class="img-fluid">
        <figcaption class="fig-caption">
            <i class="<?php echo $portfolio_items_portfolio_two_icon; ?>"></i>
            <h5 class="title mt-1"><?php echo $portfolio_items_portfolio_two_title; ?></h5>
            <span class="sub-title"><a href="<?php echo $portfolio_items_portfolio_two_read_more_url; ?>"
                    target="_blank"><?php echo $portfolio_items_portfolio_two_read_more_link; ?></a></span>
        </figcaption>
    </figure>
</div>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>