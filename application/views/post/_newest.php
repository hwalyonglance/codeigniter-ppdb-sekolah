<ul class="collection with-header">
	<li class="collection-header"><h5><?=count($data['post']['newest'])?> Terbaru</h5></li>
	<?php
		foreach ($data['post']['newest'] as $key => $value) {
			?>
			<li class="collection-item truncate">
				<a href="<?=base_url().'post/view/'.$value['id'].'/'.$value['title']?>"
					data-tooltip="View count: <?=$value['view_count']?><br>Title: <?=$value['title']?>" class='tooltipped'>
					(<?=$value['view_count']?>x) <?=$value['title']?>
				</a>
			</li>
			<?php
		}
	?>
</ul>