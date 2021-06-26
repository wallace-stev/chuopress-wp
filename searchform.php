<form role="search" method="get" class="form-inline search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
    <input 
        required="true"
        type="text" 
        class="search-field" 
        placeholder="<?php echo esc_attr_x( 'Search here &hellip;', 'placeholder' ) ?>" 
        value="" 
        name="s" />
    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
</form>
