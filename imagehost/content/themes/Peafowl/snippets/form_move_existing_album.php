<?php

use function Chevereto\Legacy\G\get_global;
use Chevereto\Legacy\G\Handler;

// @phpstan-ignore-next-line
if (!defined('ACCESS') || !ACCESS) {
    die('This file cannot be directly accessed.');
} ?>
<?php $user_items_editor = get_global('user_items_editor') ?: Handler::var('user_items_editor'); ?>
<label for="form-album-id"><?php _ne('Album', 'Albums', 1); ?></label>
<select name="form-album-id" id="form-album-id" class="text-input">
	<?php
            foreach ($user_items_editor['user_albums'] ?? [] as $album) {
                ?>
	<option value="<?php echo $album['id_encoded'] ?? ''; ?>"<?php if (isset($user_items_editor['album']) && $album['id'] == $user_items_editor['album']['id']) {
                    echo " selected";
                } ?>><?php echo($album['indent_string'] ?? '') . $album['name_with_privacy_readable_html']; ?></option>
	<?php
            }
    ?>
</select>
