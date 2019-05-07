<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'mestrerey' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '!Cd78fj56007' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TLrpTMRUk)f/;^uhM,PU!+1`l8y>9MN.2Cq]6.HZa@EH%#G6-^Z:*|S9,lP-j>$v' );
define( 'SECURE_AUTH_KEY',  'Rb$KCmM)p6M6T_t<<*#I2Fx*lad;}DI 7UQjhY@8+`!EF|Y^!*+O!x;^7r=3^.1Y' );
define( 'LOGGED_IN_KEY',    '?rYsJg.B+bMu+,DA1R=vjL_QIJ*fkNW`;hLb8@ta28bj`rS38(Ug~?X}AM{dC/hr' );
define( 'NONCE_KEY',        'jeHY,UpSA9InbK7arvk3gm$)Dr:NsDuv&+SERRD~cVP*Kr5#gU^cBXcz-xR6!zUI' );
define( 'AUTH_SALT',        '}4U6ya[qF.pt,)yoFv#C#&}7L&EvwW}tUg60i:+M0ln&@#G GGYk~Y4xGLGhFD[w' );
define( 'SECURE_AUTH_SALT', '$0U+kbElj1vv*m%V~^7KdFc/: (}<qih:,>:A2=#P3pp5@zx~Z+d$&;c5r7mb2}w' );
define( 'LOGGED_IN_SALT',   '%(.[2tFH9 LhY6[s,YC4YIneUp=>%QCsU<z<OF<>8>HF0%=S*wa1S *8Q#AqTZX&' );
define( 'NONCE_SALT',       'bsk5oeiJ6MyH!y~R_}5*|*6dY7TI7J/;5E#VBCiUX_E 83go-:8j;$2S(1>]eDo ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD','direct');
