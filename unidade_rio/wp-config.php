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
define( 'DB_NAME', 'unidade_rio' );

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
define( 'AUTH_KEY',         'W3%fDaS:(56f:c]$z[r_rDkZ2)6s?,2TFXR#bEg,ZdL,zyF$=.}41,#9[AnO)sL`' );
define( 'SECURE_AUTH_KEY',  'RPBb-gS&:BYK`H@,W+~8-~4XI3.7A[HqJ8wH]NxC=l+Kh[R$o|P7=l><:#vwLy#K' );
define( 'LOGGED_IN_KEY',    'M9qzy8Pvb[t2 :DMP7FO)gD]br<+e 3G6I]m(-cLc1W`TrW(&K$,6<,_~OVM|m !' );
define( 'NONCE_KEY',        'fOZ;P~/:E*VtNwrbJZR[4pz5*F.^ YGFN[(1Pk7v[kHR7LXVY@1KGus?b.,P_Txi' );
define( 'AUTH_SALT',        ':q!r_cTciF]WH_H*8edmsJg5[rOrhk~t?qZC~?T<t}c]buWD&UuzSK!@PNify^o%' );
define( 'SECURE_AUTH_SALT', '(1mO:f[VBY`jfW)W()N3pzeBq`,+zhk_!?peht}{CcPN1;p>5uO0n9l0GmW*]x~B' );
define( 'LOGGED_IN_SALT',   'D6Ot6lcj&B1$F/b;f 9^s#KS-+/8J3`L/(9sxyi di$U+e3>]q6Ih8acwOlOY;xU' );
define( 'NONCE_SALT',       'xNA*yuL=:p*NkS.c>b}/{sBiuhO#Js}BZDUV&{=f;4z a5-D uV&Lr6/+XL_tkgj' );

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
