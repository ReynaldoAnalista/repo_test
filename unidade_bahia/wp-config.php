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
define( 'DB_NAME', 'unidade_bahia' );

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
define( 'AUTH_KEY',         'V9t*<5Lo3Hk7lCf;Rt-@mf|>9z:kUzS3FmI_G 35CG/>KZ}@,]Dju+jjgQPk#Cxs' );
define( 'SECURE_AUTH_KEY',  ' I`m[XR*s8CUQ6^qABxmh5qk~xZ]-koI^rws$yUA}B02VS@CXVSS9)2@{26>;T?=' );
define( 'LOGGED_IN_KEY',    '{wz}|O@?Bp>~a$MX;(wT<{/=lH>.}43E36_`Z@vTTZ0nG VBNM|$e?!m$.[=SmQT' );
define( 'NONCE_KEY',        'Sg=0k98eLXOIM<FTNSL!u&y.;/v+>nlWa2S<.zaS+zlu.=@}9CsM@*tH2N?AT,o ' );
define( 'AUTH_SALT',        'tI=vz>a7+s_.%pzXqZHdNMUl#RF.<RXEI;!sAo/n@X@c*}iQM5rEX3~chB&gYpKL' );
define( 'SECURE_AUTH_SALT', 'y*R2D]8K |-0NEI/m}U2DRufgqw$(@CC[M2DQ<L&_tB`<U#%{%^1Jcsa}?PCZ[vW' );
define( 'LOGGED_IN_SALT',   'p+ O}O.D>M0pLsc=6R#Y[3,gI4<%yqhvE(Zd}~)-gy%J*a$X@~tbain;R9C*7ZjW' );
define( 'NONCE_SALT',       'DH&v&RA}s0No#3DJJYgMKUiE=m!QW=>(W^DhS+,0h%1#E%,E81Ye3Fy:Ub{dNx?g' );

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
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD','direct');
