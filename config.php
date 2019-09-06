<?php
    /** O nome do banco de dados */
    define('DB_NAME','id9950735_crud');

    /** Usuário do banco de dados MySQL */
    define('DB_USER','id9950735_admin');

    /** Senha do banco de dados MySQL */
    define('DB_PASSWORD','12345');

    /** Nome do host do MySQL */
    define('DB_HOST','localhost');

    /** caminho absoluto para a pasta do sistema */
    if( !defined('ABSPATH'))
    {
        define('ABSPATH', dirname(__FILE__) . '/');
    }

    if ( !defined('BASEURL'))
    {
        define('BASEURL', '/juju');
    }

    if( !defined('DBAPI') )
    {
        DEFINE('DBAPI', ABSPATH. 'inc/database.php');
    }

    define('HEADER_TEMPLATE', ABSPATH. 'inc/header.php');
    define('COPYRIGHT','Julia Rodrigues e Ayumi');
    define('FOOTER_TEMPLATE', ABSPATH. 'inc/footer.php');