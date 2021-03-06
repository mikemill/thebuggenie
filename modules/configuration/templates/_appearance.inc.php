<table style="clear: both; width: 700px; margin-top: 5px;" class="padded_table" cellpadding=0 cellspacing=0>
	<tr>
		<td><label for="theme_name"><?php echo __('Selected theme'); ?></label></td>
		<td>
			<select name="<?php echo TBGSettings::SETTING_THEME_NAME; ?>" id="theme_name" style="width: 300px;"<?php if ($access_level != TBGSettings::ACCESS_FULL): ?> disabled<?php endif; ?>>
			<?php foreach ($themes as $aTheme): ?>
				<option value="<?php echo $aTheme; ?>"<?php if (TBGSettings::getThemeName() == $aTheme): ?> selected<?php endif; ?><?php if ($access_level != TBGSettings::ACCESS_FULL): ?> disabled<?php endif; ?>><?php echo $aTheme; ?></option>
			<?php endforeach; ?>
			</select>
		</td>
	</tr>
	<tr>
		<td class="config_explanation" colspan="2"><?php echo __('The selected theme used. Depending on other settings, users might be able to use another theme for their account.'); ?></td>
	</tr>
	<tr>
		<td><label for="icon_header"><?php echo __('Custom header icon'); ?></label></td>
		<td>
			<select name="<?php echo TBGSettings::SETTING_HEADER_ICON_TYPE; ?>" id="icon_header" onchange="if ($('icon_header').getValue() == 2) { $('icon_header_url').enable() } else { $('icon_header_url').disable() }" style="width: 300px;"<?php if ($access_level != TBGSettings::ACCESS_FULL): ?> disabled<?php endif; ?>>
				<option value="<?php echo TBGSettings::APPEARANCE_HEADER_USE_THEME; ?>"<?php if (TBGSettings::isUsingCustomHeaderIcon() == TBGSettings::APPEARANCE_HEADER_USE_THEME): ?> selected<?php endif; ?><?php if ($access_level != TBGSettings::ACCESS_FULL): ?> disabled<?php endif; ?>><?php echo __("Use the theme's default icon in the header"); ?></option>
				<option value="<?php echo TBGSettings::APPEARANCE_HEADER_CUSTOM; ?>"<?php if (TBGSettings::isUsingCustomHeaderIcon() == TBGSettings::APPEARANCE_HEADER_CUSTOM): ?> selected<?php endif; ?><?php if ($access_level != TBGSettings::ACCESS_FULL): ?> disabled<?php endif; ?>><?php echo __("Use the file header.png in the '%thebuggenie%' directory", array('%thebuggenie%', THEBUGGENIE_PUBLIC_FOLDER_NAME)); ?></option>
				<option value="<?php echo TBGSettings::APPEARANCE_HEADER_URL; ?>"<?php if (TBGSettings::isUsingCustomHeaderIcon() == TBGSettings::APPEARANCE_HEADER_URL): ?> selected<?php endif; ?><?php if ($access_level != TBGSettings::ACCESS_FULL): ?> disabled<?php endif; ?>><?php echo __('Load an image from a specified URL'); ?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="config_explanation" colspan="2"><?php echo __('You can optionally use an alternative icon in the header. Select whether you want to do so here. If you choose to, you may need to upload or give the URL to a header icon, see below.'); ?></td>
	</tr>
	<tr>
		<td><label for="icon_header_url"><?php echo __('Custom header icon URL'); ?></label></td>
		<td>
			<input type="text" name="<?php echo TBGSettings::SETTING_HEADER_ICON_URL; ?>" id="icon_header_url" value="<?php echo TBGSettings::getHeaderIconURL(); ?>" style="width: 100%;"<?php if ($access_level != TBGSettings::ACCESS_FULL || TBGSettings::isUsingCustomHeaderIcon() != '2'): ?> disabled<?php endif; ?>>
		</td>
	</tr>
	<tr>
		<td class="config_explanation" colspan="2"><?php echo __('If you want to load your header icon from a URL, specify the URL to an image here.'); ?></td>
	</tr>
	<tr>
		<td><label for="header_link"><?php echo __('Custom header link'); ?></label></td>
		<td>
			<input type="text" name="<?php echo TBGSettings::SETTING_HEADER_LINK; ?>" id="header_link" value="<?php echo TBGSettings::getHeaderLink(); ?>" style="width: 100%;"<?php if ($access_level != TBGSettings::ACCESS_FULL): ?> disabled<?php endif; ?>>
		</td>
	</tr>
	<tr>
		<td class="config_explanation" colspan="2"><?php echo __('You can alter the webpage that clicking on the header icon navigates to. If left blank it will link to the main page of this installation.'); ?></td>
	</tr>
	<tr>
		<td><label for="icon_fav"><?php echo __('Custom favicon'); ?></label></td>
		<td>
			<select name="<?php echo TBGSettings::SETTING_FAVICON_TYPE; ?>" id="icon_fav" onchange="if ($('icon_fav').getValue() == 2) { $('icon_fav_url').enable() } else { $('icon_fav_url').disable() }" style="width: 300px;"<?php if ($access_level != TBGSettings::ACCESS_FULL): ?> disabled<?php endif; ?>>
				<option value=<?php echo TBGSettings::FAVICON_DEFAULT; if (TBGSettings::getFaviconType() == TBGSettings::FAVICON_DEFAULT): ?> selected<?php endif; ?><?php if ($access_level != TBGSettings::ACCESS_FULL): ?> disabled<?php endif; ?>><?php echo __("Use the theme's default favicon"); ?></option>
				<option value=<?php echo TBGSettings::FAVICON_PUBLIC; if (TBGSettings::getFaviconType() == TBGSettings::FAVICON_PUBLIC): ?> selected<?php endif; ?><?php if ($access_level != TBGSettings::ACCESS_FULL): ?> disabled<?php endif; ?>><?php echo __("Use the file favicon.png in the '%thebuggenie%' directory", array('%thebuggenie%', THEBUGGENIE_PUBLIC_FOLDER_NAME)); ?></option>
				<option value=<?php echo TBGSettings::FAVICON_CUSTOM_URL; if (TBGSettings::getFaviconType() == TBGSettings::FAVICON_CUSTOM_URL): ?> selected<?php endif; ?><?php if ($access_level != TBGSettings::ACCESS_FULL): ?> disabled<?php endif; ?>><?php echo __('Load an image from a specified URL'); ?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="config_explanation" colspan="2"><?php echo __('You can optionally use an alternative favicon (the icon that appears next to the URL in your browser, as well as in your favourites). If you choose to do so, you may need to upload or give the URL to a favicon, see below.'); ?></td>
	</tr>
	<tr>
		<td><label for="icon_fav_url"><?php echo __('Custom favicon URL'); ?></label></td>
		<td>
			<input type="text" name="<?php echo TBGSettings::SETTING_FAVICON_URL; ?>" id="icon_fav_url" value="<?php echo TBGSettings::getFaviconURL(); ?>" style="width: 100%;"<?php if ($access_level != TBGSettings::ACCESS_FULL || TBGSettings::getFaviconType() != '2'): ?> disabled<?php endif; ?>>
		</td>
	</tr>
	<tr>
		<td class="config_explanation" colspan="2"><?php echo __('If you want to load your favicon from a URL, specify the URL to an image here.'); ?></td>
	</tr>
</table>
