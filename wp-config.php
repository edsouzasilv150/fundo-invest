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
define( 'DB_NAME', 'lab212' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '),Q+i|d0yb+9{P6mnp+3y7$i1PyRmj1:0)MO>.bn1O6gz$~KasaKI>)I[>|/~xF]' );
define( 'SECURE_AUTH_KEY',  '`]b8 )5tFS!A935L4fh@e<~i($x5xLf4O4aI#x:-9~CXgL797wu3EQEFj9,w[`98' );
define( 'LOGGED_IN_KEY',    'w=,ub[G./JT-@wd[0SP3Vg10$&{(qU==)zXv.HOUQVMJitXqP:_L~s{Nd]TM{I6y' );
define( 'NONCE_KEY',        '/1z|3;Zk>64Ezq;!MoAQIq25&tOC74w!9[FAVc +S2L;3iX4%tO>:S1;^^7!5-4P' );
define( 'AUTH_SALT',        'og{t,l_+guDc7v@Rb-Tj4j?]UuWB%d4-__XU<(m?mxBmh8<F9ofm%*]_5LwSS$JM' );
define( 'SECURE_AUTH_SALT', 'B/@-9P1DW-!qaA`#IM&Ne|oY.m}A]GZg.E;.WRne8[$P<Uv0dl=-C s$pU[kM/#p' );
define( 'LOGGED_IN_SALT',   'T-3D?~wJey75V*DU}B7VN 268QY)1yUO2kQ>O-eUR!hChp#cR`lv.DtF30F|D!:x' );
define( 'NONCE_SALT',       '[]_*O*jlMPr|BtI])wO!/tWt0Am{P?6/J>}ZLg9G,i/A7I0_C7Kbfi^#>UJz{;Ci' );

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
