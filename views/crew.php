<?php
	$crew = json_decode(file_get_contents("crew.json"));
	usort($crew->crew, "sort_crew");

	//$fb_friends = json_decode(file_get_contents("https://graph.facebook.com/me/friends?access_token=" . $access_token));
	//print_r($user_id);


	function sort_crew($a, $b) {
		if($a->rank->level < $b->rank->level) {
			return 1;
		}elseif($a->rank->level > $b->rank->level) {
			return -1;
		}else{
			return strcmp($a->lname,$b->lname);
		}
	}
?>

<ul id="crew">
	<?php foreach($crew->crew as $officer) {
		$name = $officer->fname . ' ' . $officer->lname;
	?>
		<li class="<?php echo $officer->department . ' ' . $officer->rank->name; ?>">
			<img src="images/crew/<?php echo strtolower(str_replace(' ','_',$name)) ?>.jpg" alt="<?php echo $name; ?>" />
			<div class="meta">
				<div class="name"><?php echo $name; ?></div>
				<div class="department"><?php echo $officer->department; ?></div>
			</div>
			<div class="rank">
				<?php for($i=0; $i<$officer->rank->level; $i++) { ?>
					<div class="pip"><div></div></div>
				<?php } ?>
			</div>
		</li>
	<?php } ?>
</ul>