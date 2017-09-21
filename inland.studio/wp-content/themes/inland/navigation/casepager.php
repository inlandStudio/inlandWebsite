<?php
	$pagelist = get_pages("child_of=".$post->post_parent."&parent=".$post->post_parent."&sort_column=menu_order&sort_order=asc");
	$pages = array();
	foreach ($pagelist as $page) {
	   $pages[] += $page->ID;
	}

	$current = array_search($post->ID, $pages);
	$prevID = $pages[$current-1];
	$nextID = $pages[$current+1];
?>


<nav class="pager">
	<div class="wrapper wrapper-960">
		<div>
			<?php if (!empty($prevID)) { ?>
			<a href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>">&larr;&nbsp;See previous</a>
			<?php } else { ?>
				<a href="/work/#work">See all cases</a>
			<?php } ?>
		</div>
		<div>
			<?php if (!empty($nextID)) { ?>
			<a href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>">See next&nbsp;&rarr;</a>
			<?php } else { ?>
				<a href="/work/#work">See all cases</a>
			<?php } ?>
		</div>
	</div>
</nav>
