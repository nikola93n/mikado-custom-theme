<?php $project_section_first_paragraph = get_field('project_section_first_paragraph', false, false); ?>
<?php if(!empty($project_section_first_paragraph)): ?>
<p><?php echo $project_section_first_paragraph; ?></p>
<?php endif; ?>