<form role="search" class="search_form" method="get" action="<?php echo home_url( '/' ) ?>" >
    <label>
        <input type="text" class="search_input" value="<?php echo get_search_query() ?>" name="s"/>
    </label>
    <button type="submit" class="search_button"></button>
</form>