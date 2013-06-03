
    <form action="<?php bloginfo('url'); ?>" method="get">
        <fieldset>
            <p>
            <input type="text" value="<?php the_search_query(); ?>" name="m_recherche" id="m_recherche" />
            <input type="submit" name="m_sub" value="Rechercher" />
            </p>
        </fieldset>
        
    </form>
