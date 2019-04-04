<div class="container">
	<div class="row">
		<div class="col s12">
			<table>
				<thead>
					<tr>
						<th>Total Views</th>
						<th>Title</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($data['posts'] as $key => $value) {
							?>
								<tr>
									<td><?=$value['view_count']?></td>
									<td>
										<a href="<?=base_url()?>post/view/<?=$value['id'].'/'.$value['title']?>" class="tooltipped" 
											data-tooltip="View Count : <?=$value['view_count']?><br/> Title : <?=$value['title']?>">
											<?=$value['title']?>
										</a>
									</td>
								</tr>
							<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('.modal').modal();
		$('.tooltipped').tooltip({
			html: true
		})
	});
</script>