<?php
$social = get_option('social_options');

if ($social) {
    ?>
    <div class="social_join">Приєднуйтесь до нас</div>
    <?php
	foreach ($social as $key => $value) {
		if ($value) {
			?>
            <a class="social <?=$key?>" href="<?=$value?>" target="_blank" title="<?=$key?>"></a>
			<?php
		}
	}
}