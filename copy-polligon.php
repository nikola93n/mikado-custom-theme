<?php $team_member_three_image = get_field('team_member_three_image'); ?>
<?php if(!empty($team_member_three_image)) : ?>

<?php $team_member_three_name = get_field('team_member_three_name'); ?>

<?php $team_member_three_position = get_field('team_member_three_position'); ?>

<?php $team_member_three_first_network_icon = get_field('team_member_three_first_network_icon'); ?>
<?php $team_member_three_first_network_url = get_field('team_member_three_first_network_url'); ?>

<?php $team_member_three_second_network_icon = get_field('team_member_three_second_network_icon'); ?>
<?php $team_member_three_second_network_url = get_field('team_member_three_second_network_url'); ?>

<?php $team_member_three_third_network_icon = get_field('team_member_three_third_network_icon'); ?>
<?php $team_member_three_third_network_url = get_field('team_member_three_third_network_url'); ?>

<div class="col-lg-4 col-md-6">
    <div class="team-card">
        <img src="<?php echo $team_member_three_image['url']; ?>" alt="<?php $team_member_three_image['alt']; ?>"
            class="img-fluid">
        <div class="team-detail">
            <h5 class="text-center"><?php echo $team_member_three_name; ?></h5>
            <p class="text-center"><?php echo $team_member_three_position; ?></p>
            <ul class="d-flex justify-content-center">
                <li><a href="<?php echo $team_member_three_first_network_url; ?>" target="_blank">
                        <i class="<?php echo $team_member_three_first_network_icon; ?>"></i></a></li>
                <li><a href="<?php echo $team_member_three_second_network_url; ?>" target="_blank">
                        <i class="<?php echo $team_member_three_second_network_icon; ?>"></i></a></li>
                <li><a href="<?php echo $team_member_three_third_network_url; ?>" target="_blank">
                        <i class="<?php echo $team_member_three_third_network_icon; ?>"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<?php endif; ?>