<?php return [
    'plugin'    => [
        'name'        => 'GoodNews',
        'description' => 'Artikel-Plugin',
    ],
    'field'     => [
        'content'         => 'Inhalt',
        'published_start' => 'Veröffentlichungsdatum',
        'published_stop'  => 'Ende der Veröffentlichung',
        'status'          => 'Status',
    ],
    'component' => [
        'article_page'         => 'Artikelseite',
        'article_page_desc'    => '',
        'article_data'         => 'Artikeldaten',
        'article_data_desc'    => '',
        'article_list'         => 'Artikelliste',
        'article_list_desc'    => '',

        'category_page'        => 'Kategorieseite',
        'category_page_desc'   => '',
        'category_data'        => 'Kategoriedaten',
        'category_data_desc'   => '',
        'category_list'        => 'Kategorieliste',
        'category_list_desc'   => '',
        
        'sorting_publish_asc'     => 'Nach Veröffentlichungsdatum (aufsteigend)',
        'sorting_publish_desc'    => 'Nach Veröffentlichungsdatum (absteigend)',
        'sorting_view_count_acs'  => 'Nach Ansichten (aufsteigend)',
        'sorting_view_count_desc' => 'Nach Ansichten (absteigend)',
    ],
    'menu'      => [
        'article'  => 'Artikel',
        'category' => 'Kategorien',
    ],
    'tab'       => [
        'permissions' => 'Artikel verwalten',
    ],
    'article'   => [
        'name'       => 'Artikel',
        'list_title' => 'Artikelliste',
    ],
    'category'  => [
        'name'       => 'Kategorie',
        'list_title' => 'Kategorienliste',
    ],
    'status' => [
        1 => 'Neu',
        2 => 'In Bearbeitung',
        3 => 'Überprüfen',
        4 => 'Veröffentlicht',
    ],
    'permission' => [
        'article'  => 'Artikel verwalten',
        'category' => 'Kategorien verwalten',
    ],
];