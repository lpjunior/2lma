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
define( 'AUTH_KEY',         'U%7Aq|,)WrK^223)xCMdTZ{}rbFA@3/U;O8QW-}KJF|7-Tgk9aH&9|#0|h^K?swF' );
define( 'SECURE_AUTH_KEY',  '[&sER^G. 1lt7~L~tJ3]KQTbL5yJoQ/w_1&IC!M^sP}(yW4=:YnvxR3`>*,}rf9f' );
define( 'LOGGED_IN_KEY',    '^.M=5g6rrOFx/`j.m{o&]T-n[3hA=g%MLLr0G[<nKqwSf<TW=)zvM@k:u@1q$<{1' );
define( 'NONCE_KEY',        ':xn|+:d/y?GuR[].fMdicv+*CE8Oz]yd>6aZFyz$.]z0&J$z8#uLh~cm?csG5)RZ' );
define( 'AUTH_SALT',        'FsG2FKcs~|c)}FDAYw:_G<<W /0_}kqhl9+}bRwjQ6b&tYz*Y %TlvpSE:m-<1am' );
define( 'SECURE_AUTH_SALT', 'LSJRW]o($FMaN 5~KRm#P7Yd97?-fX}T 13Ls!y Uou1E+$Dn(e#ngmdz4tspx`:' );
define( 'LOGGED_IN_SALT',   '8nj4`r<$Q::nd~e ??4w8J[c, *Tm,a`n2Z3;8[ml_JS6c) [k88?Msz51E9^w<S' );
define( 'NONCE_SALT',       'irW7$A;)PBzjppnB9Xgpe3obpU!T/|NEvL>~r=YZBh_Q*e?lo, #Eite<Yy9}vFr' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = '2lma_';

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
