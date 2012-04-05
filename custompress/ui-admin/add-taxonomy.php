<?php if (!defined('ABSPATH')) die('No direct access allowed!'); ?>

<?php $post_types = get_post_types('','names'); ?>

<h3><?php _e('Add Taxonomy', $this->text_domain); ?></h3>
<form action="" method="post" class="ct-taxonomy">
	<div class="ct-wrap-left">
		<div class="ct-table-wrap">
			<div class="ct-arrow"><br></div>
			<h3 class="ct-toggle"><?php _e('Taxonomy', $this->text_domain) ?></h3>
			<table class="form-table <?php do_action('ct_invalid_field_taxonomy'); ?>">
				<tr>
					<th>
						<label for="post_type"><?php _e('Taxonomy', $this->text_domain) ?> <span class="ct-required">( <?php _e('required', $this->text_domain); ?> )</span></label>
					</th>
					<td>
						<input type="text" name="taxonomy" value="<?php if ( isset( $_POST['taxonomy'] ) ) echo $_POST['taxonomy']; ?>">
						<span class="description"><?php _e('The system name of the taxonomy. Alphanumeric characters and underscores only. Min 2 letters. Once added the taxonomy system name cannot be changed.', $this->text_domain); ?></span>
					</td>
				</tr>
			</table>
		</div>
		<div class="ct-table-wrap">
			<div class="ct-arrow"><br></div>
			<h3 class="ct-toggle"><?php _e('Post Type', $this->text_domain) ?></h3>
			<table class="form-table <?php do_action('ct_invalid_field_object_type'); ?>">
				<tr>
					<th>
						<label for="object_type"><?php _e('Post Type', $this->text_domain) ?> (<span class="ct-required"> <?php _e('required', $this->text_domain); ?> </span>)</label>
					</th>
					<td>

						<select name="object_type[]" multiple="multiple" class="ct-object-type">
							<?php if ( is_array( $post_types )): ?>
							<?php foreach( $post_types as $post_type ): ?>
							<option value="<?php echo ( $post_type ); ?>" <?php if ( isset( $_POST['object_type'] ) && is_array( $_POST['object_type'] )) { foreach ( $_POST['object_type'] as $post_value ) { if ( $post_value == $post_type ) echo( 'selected="selected"' ); }} ?>><?php echo( $post_type ); ?></option>
							<?php endforeach; ?>
							<?php endif; ?>
						</select>

						<span class="description"><?php _e('Select one or more post types to add this taxonomy to.', $this->text_domain); ?></span>
					</td>
				</tr>
			</table>
		</div>
		<div class="ct-table-wrap">
			<div class="ct-arrow"><br></div>
			<h3 class="ct-toggle"><?php _e('Labels', $this->text_domain) ?></h3>
			<table class="form-table">
				<tr>
					<th>
						<label for="name"><?php _e('Name', $this->text_domain) ?></label>
					</th>
					<td>
						<input type="text" name="labels[name]" value="<?php if ( isset( $_POST['labels']['name'] ) ) echo $_POST['labels']['name']; ?>">
						<span class="description"><?php _e('General name for the taxonomy, usually plural.', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<label for="singular_name"><?php _e('Singular Name', $this->text_domain) ?></label>
					</th>
					<td>
						<input type="text" name="labels[singular_name]" value="<?php if ( isset( $_POST['labels']['singular_name']  ) ) echo $_POST['labels']['singular_name']; ?>">
						<span class="description"><?php _e('Name for one object of this taxonomy. Defaults to value of name.', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<label for="add_new_item"><?php _e('Add New Item', $this->text_domain) ?></label>
					</th>
					<td>
						<input type="text" name="labels[add_new_item]" value="<?php if ( isset( $_POST['labels']['add_new_item'] ) ) echo $_POST['labels']['add_new_item']; ?>">
						<span class="description"><?php _e('The add new item text. Default is "Add New Tag" or "Add New Category".', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<label for="new_item_name"><?php _e('New Item Name', $this->text_domain) ?></label>
					</th>
					<td>
						<input type="text" name="labels[new_item_name]" value="<?php if ( isset( $_POST['labels']['new_item_name'] ) ) echo $_POST['labels']['new_item_name']; ?>">
						<span class="description"><?php _e('The new item name text. Default is "New Tag Name" or "New Category Name".', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<label for="edit_item"><?php _e('Edit Item', $this->text_domain) ?></label>
					</th>
					<td>
						<input type="text" name="labels[edit_item]" value="<?php if ( isset( $_POST['labels']['edit_item'] ) ) echo $_POST['labels']['edit_item']; ?>">
						<span class="description"><?php _e('The edit item text. Default is "Edit Tag" or "Edit Category".', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<label for="update_item"><?php _e('Update Item', $this->text_domain) ?></label>
					</th>
					<td>
						<input type="text" name="labels[update_item]" value="<?php if ( isset( $_POST['labels']['update_item'] ) ) echo $_POST['labels']['update_item']; ?>">
						<span class="description"><?php _e('The update item text. Default is "Update Tag" or "Update Category".', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<label for="search_items"><?php _e('Search Items', $this->text_domain) ?></label>
					</th>
					<td>
						<input type="text" name="labels[search_items]" value="<?php if ( isset( $_POST['labels']['search_items'] ) ) echo $_POST['labels']['search_items']; ?>">
						<span class="description"><?php _e('The search items text. Default is "Search Tags" or "Search Categories".', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<label for="popular_items"><?php _e('Popular Items', $this->text_domain) ?></label>
					</th>
					<td>
						<input type="text" name="labels[popular_items]" value="<?php if ( isset( $_POST['labels']['popular_items'] ) ) echo $_POST['labels']['popular_items']; ?>">
						<span class="description"><?php _e('The popular items text. Default is "Popular Tags" or null.', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<label for="all_items"><?php _e('All Items', $this->text_domain) ?></label>
					</th>
					<td>
						<input type="text" name="labels[all_items]" value="<?php if ( isset( $_POST['labels']['all_items'] ) ) echo $_POST['labels']['all_items']; ?>">
						<span class="description"><?php _e('The all items text. Default is "All Tags" or "All Categories".', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<label for="parent_item"><?php _e('Parent Item', $this->text_domain) ?></label>
					</th>
					<td>
						<input type="text" name="labels[parent_item]" value="<?php if ( isset( $_POST['labels']['parent_item'] ) ) echo $_POST['labels']['parent_item']; ?>">
						<span class="description"><?php _e('The parent item text. This string is not used on non-hierarchical taxonomies such as post tags. Default is null or "Parent Category".', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<label for="parent_item_colon"><?php _e('Parent Item Colon', $this->text_domain) ?></label>
					</th>
					<td>
						<input type="text" name="labels[parent_item_colon]" value="<?php if ( isset( $_POST['labels']['parent_item_colon'] ) ) echo $_POST['labels']['parent_item_colon']; ?>">
						<span class="description"><?php _e('The same as parent_item, but with colon : in the end null, "Parent Category:".', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<label for="add_or_remove_items"><?php _e('Add Or Remove Items', $this->text_domain) ?></label>
					</th>
					<td>
						<input type="text" name="labels[add_or_remove_items]" value="<?php if ( isset( $_POST['labels']['add_or_remove_items'] ) ) echo $_POST['labels']['add_or_remove_items']; ?>">
						<span class="description"><?php _e('The add or remove items text is used in the meta box when JavaScript is disabled. This string isn\'t used on hierarchical taxonomies. Default is "Add or remove tags" or null.', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<label for="separate_items_with_commas"><?php _e('Separate Items With Commas', $this->text_domain) ?></label>
					</th>
					<td>
						<input type="text" name="labels[separate_items_with_commas]" value="<?php if ( isset( $_POST['labels']['separate_items_with_commas'] ) ) echo $_POST['labels']['separate_items_with_commas']; ?>">
						<span class="description"><?php _e('The separate item with commas text used in the taxonomy meta box. This string isn\'t used on hierarchical taxonomies. Default is "Separate tags with commas", or null.', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<label for="choose_from_most_used"><?php _e('Choose From Most Used', $this->text_domain) ?></label>
					</th>
					<td>
						<input type="text" name="labels[choose_from_most_used]" value="<?php if ( isset( $_POST['labels']['choose_from_most_used'] ) ) echo $_POST['labels']['choose_from_most_used']; ?>">
						<span class="description"><?php _e('The choose from most used text used in the taxonomy meta box. This string isn\'t used on hierarchical taxonomies. Default is "Choose from the most used tags" or null.', $this->text_domain); ?></span>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="ct-wrap-right">
		<div class="ct-table-wrap">
			<div class="ct-arrow"><br></div>
			<h3 class="ct-toggle"><?php _e('Public', $this->text_domain) ?></h3>
			<table class="form-table publica">
				<tr>
					<th>
						<label for="public"><?php _e('Public', $this->text_domain) ?></label>
					</th>
					<td>
						<span class="description"><?php _e('Should this taxonomy be exposed in the admin UI.', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						<input type="radio" name="public" value="1" <?php if ( isset( $_POST['public'] ) && $_POST['public'] === '1' ) echo( 'checked="checked"' ); elseif ( !isset( $_POST['public'] ) ) echo( 'checked="checked"' ); ?>>
						<span class="description"><strong><?php _e('TRUE', $this->text_domain); ?></strong></span>
						<br />
						<input type="radio" name="public" value="0" <?php if ( isset( $_POST['public'] ) && $_POST['public'] === '0' ) echo( 'checked="checked"' ); ?>>
						<span class="description"><strong><?php _e('FALSE', $this->text_domain); ?></strong></span>
						<br />
						<input type="radio" name="public" value="advanced" <?php if ( isset( $_POST['public'] ) && $_POST['public'] == 'advanced' ) echo( 'checked="checked"' ); ?>>
						<span class="description"><strong><?php _e('ADVANCED', $this->text_domain); ?></strong></span>
					</td>
				</tr>
			</table>
		</div>
		<div class="ct-table-wrap">
			<div class="ct-arrow"><br></div>
			<h3 class="ct-toggle"><?php _e('Show UI', $this->text_domain) ?></h3>
			<table class="form-table show-ui">
				<tr>
					<th>
						<label for="show_ui"><?php _e('Show UI', $this->text_domain) ?></label>
					</th>
					<td>
						<span class="description"><?php _e('Whether to generate a default UI for managing this taxonomy.', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						<input type="radio" name="show_ui" value="1" <?php if ( isset( $_POST['public'] ) && $_POST['public'] == 'advanced' && isset( $_POST['show_ui'] ) && $_POST['show_ui'] === '1' ) echo( 'checked="checked"' ); ?>>
						<span class="description"><strong><?php _e('TRUE', $this->text_domain); ?></strong></span>
						<br />
						<input type="radio" name="show_ui" value="0" <?php if ( isset( $_POST['public'] ) && $_POST['public'] == 'advanced' && isset( $_POST['show_ui'] ) && $_POST['show_ui'] === '0' ) echo( 'checked="checked"' ); ?>>
						<span class="description"><strong><?php _e('FALSE', $this->text_domain); ?></strong></span>
					</td>
				</tr>
			</table>
		</div>
		<div class="ct-table-wrap">
			<div class="ct-arrow"><br></div>
			<h3 class="ct-toggle"><?php _e('Show Tagcloud', $this->text_domain) ?></h3>
			<table class="form-table show_tagcloud">
				<tr>
					<th>
						<label for="show_tagcloud"><?php _e('Show Tagcloud', $this->text_domain) ?></label>
					</th>
					<td>
						<span class="description"><?php _e('Whether to show a tag cloud in the admin UI for this taxonomy.', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						<input type="radio" name="show_tagcloud" value="1" <?php if ( isset( $_POST['public'] ) && $_POST['public'] == 'advanced' && isset( $_POST['show_tagcloud'] ) && $_POST['show_tagcloud'] === '1' ) echo( 'checked="checked"' ); ?>>
						<span class="description"><strong><?php _e('TRUE', $this->text_domain); ?></strong></span>
						<br />
						<input type="radio" name="show_tagcloud" value="0" <?php if ( isset( $_POST['public'] ) && $_POST['public'] == 'advanced' && isset( $_POST['show_tagcloud'] ) && $_POST['show_tagcloud'] === '0' ) echo( 'checked="checked"' ); ?>>
						<span class="description"><strong><?php _e('FALSE', $this->text_domain); ?></strong></span>
					</td>
				</tr>
			</table>
		</div>
		<div class="ct-table-wrap">
			<div class="ct-arrow"><br></div>
			<h3 class="ct-toggle"><?php _e('Show In Nav Menus ', $this->text_domain) ?></h3>
			<table class="form-table show-in-nav-menus">
				<tr>
					<th>
						<label for="show_in_nav_menus"><?php _e('Show In Nav Menus', $this->text_domain) ?></label>
					</th>
					<td>
						<span class="description"><?php _e('Whether to make this taxonomy available for selection in navigation menus.', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						<input type="radio" name="show_in_nav_menus" value="1" <?php if ( isset( $_POST['public'] ) && $_POST['public'] == 'advanced' && isset( $_POST['show_in_nav_menus'] ) && $_POST['show_in_nav_menus'] === '1' ) echo( 'checked="checked"' ); ?>>
						<span class="description"><strong><?php _e('TRUE', $this->text_domain); ?></strong></span>
						<br />
						<input type="radio" name="show_in_nav_menus" value="0" <?php if ( isset( $_POST['public'] ) && $_POST['public'] == 'advanced' && isset( $_POST['show_in_nav_menus'] ) && $_POST['show_in_nav_menus'] === '0' ) echo( 'checked="checked"' ); ?>>
						<span class="description"><strong><?php _e('FALSE', $this->text_domain); ?></strong></span>
					</td>
				</tr>
			</table>
		</div>
		<div class="ct-table-wrap">
			<div class="ct-arrow"><br></div>
			<h3 class="ct-toggle"><?php _e('Hierarchical', $this->text_domain) ?></h3>
			<table class="form-table">
				<tr>
					<th>
						<label for="hierarchical"><?php _e('Hierarchical', $this->text_domain) ?></label>
					</th>
					<td>
						<span class="description"><?php _e('Is this taxonomy hierarchical (have descendants) like categories or not hierarchical like tags.', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						<input type="radio" name="hierarchical" value="1" <?php if ( isset( $_POST['hierarchical'] ) && $_POST['hierarchical'] === '1' ) echo( 'checked="checked"' ); ?>>
						<span class="description"><strong><?php _e('TRUE', $this->text_domain); ?></strong></span>
						<br />
						<input type="radio" name="hierarchical" value="0" <?php if ( isset( $_POST['hierarchical'] ) && $_POST['hierarchical'] === '0' ) echo( 'checked="checked"' ); elseif ( !isset( $_POST['hierarchical'] ) ) echo( 'checked="checked"' ); ?>>
						<span class="description"><strong><?php _e('FALSE', $this->text_domain); ?></strong></span>
					</td>
				</tr>
			</table>
		</div>
		<div class="ct-table-wrap">
			<div class="ct-arrow"><br></div>
			<h3 class="ct-toggle"><?php _e('Rewrite', $this->text_domain) ?></h3>
			<table class="form-table">
				<tr>
					<th>
						<label for="rewrite"><?php _e('Rewrite', $this->text_domain) ?></label>
					</th>
					<td>
						<span class="description"><?php _e('Set to false to prevent rewrite, or true to customize.', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						<input type="radio" name="rewrite" value="1" <?php if ( isset( $_POST['rewrite'] ) && $_POST['rewrite'] === '1' ) echo( 'checked="checked"' ); elseif ( !isset( $_POST['rewrite'] ) ) echo( 'checked="checked"' ); ?>>
						<span class="description"><strong><?php _e('TRUE', $this->text_domain); ?></strong></span>
						<br />
						<span class="description"><?php _e('Default will use query var.', $this->text_domain); ?></span>
						<br />
						<input type="radio" name="rewrite" value="0" <?php if ( isset( $_POST['rewrite'] ) && $_POST['rewrite'] === '0' ) echo( 'checked="checked"' ); ?>>
						<span class="description"><strong><?php _e('FALSE', $this->text_domain); ?></strong></span>
						<br />
						<span class="description"><?php _e('Prevent rewrite.', $this->text_domain); ?></span>
						<br /><br />

						<span class="description"><strong><?php _e('Custom Slug', $this->text_domain); ?></strong></span>
						<br />
						<input type="text" name="rewrite_slug" value="<?php if ( !empty( $_POST['rewrite_slug'] ) ) echo $_POST['rewrite_slug']; ?>" />
						<br />
						<span class="description"><?php _e('Prepend posts with this slug. If empty default will be used.', $this->text_domain); ?></span>
						<br /><br />
						<input type="checkbox" name="rewrite_with_front" value="1" <?php if ( !isset( $_POST['rewrite_with_front'] ) || !empty( $_POST['rewrite_with_front'] ) ) echo 'checked="checked"'; ?>>
						<span class="description"><strong><?php _e('Allow Front Base', $this->text_domain); ?></strong></span>
						<br />
						<span class="description"><?php _e('Allowing permalinks to be prepended with front base.', $this->text_domain); ?></span>
						<br /><br />
						<input type="checkbox" name="rewrite_hierarchical" value="1" <?php if ( !empty( $_POST['rewrite_hierarchical'] ) ) echo 'checked="checked"'; ?>>
						<span class="description"><strong><?php _e('Hierarchical URLs', $this->text_domain); ?></strong></span>
						<br />
						<span class="description"><?php _e('Allow hierarchical urls. Applicable for hierarchical taxonomies.', $this->text_domain); ?></span>
					</td>
				</tr>
			</table>
		</div>
		<div class="ct-table-wrap">
			<div class="ct-arrow"><br></div>
			<h3 class="ct-toggle"><?php _e('Query var', $this->text_domain) ?></h3>
			<table class="form-table">
				<tr>
					<th>
						<label for="query_var"><?php _e('Query var', $this->text_domain) ?></label>
					</th>
					<td>
						<span class="description"><?php _e('False to prevent queries. Default will use the taxonomy system name as query var.', $this->text_domain); ?></span>
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						<input type="radio" name="query_var" value="1" <?php if ( isset( $_POST['query_var'] ) && $_POST['query_var'] === '1' ) { echo( 'checked="checked"' ); } elseif ( !isset( $_POST['query_var'] ) ) { echo( 'checked="checked"' ); } ?>>
						<span class="description"><strong><?php _e('TRUE', $this->text_domain); ?></strong></span>
						<br />
						<input type="radio" name="query_var" value="0" <?php if ( isset( $_POST['query_var'] ) && $_POST['query_var'] === '0' ) echo( 'checked="checked"' ); ?>>
						<span class="description"><strong><?php _e('FALSE', $this->text_domain); ?></strong></span>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="clear"></div>
	<p class="submit">
		<?php wp_nonce_field('submit_taxonomy'); ?>
		<input type="submit" class="button-primary" name="submit" value="<?php _e('Add Taxonomy Type', $this->text_domain); ?>">
	</p>
	<br /><br /><br /><br />
</form>