<?php
/**
 * The template for displaying search forms in nord
 *
 * @package nord
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
      <input type="search" class="form-control search-field" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder', 'nord' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
      <span class="input-group-btn">
        <button class="btn btn-default search-btn" type="submit"><?php echo esc_attr_x( 'Search', 'submit button', 'nord' ); ?></button>
      </span>
    </div><!-- /input-group -->
</form>
