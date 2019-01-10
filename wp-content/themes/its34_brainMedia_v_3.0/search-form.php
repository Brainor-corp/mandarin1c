<?php
/**
 * Поисковая строка для шапки
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
    <div class="input-group">
        <input type="text" class="form-control hght-hdr-inpt" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск по сайту">
        <span class="input-group-btn">
            <button class="btn btn-secondary bg-white hght-hdr-inpt p-0 pl-2 pr-2" type="submit"><i class="fa fa-search text-dark" aria-hidden="true"></i></button>
            </button>
        </span>
    </div>
</form>




