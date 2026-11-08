<?php
$export = defined( 'LASH_STATIC_EXPORT' ) && LASH_STATIC_EXPORT;
$assets = $export ? './assets' : get_template_directory_uri() . '/assets';
$home = $export ? './' : home_url( '/' );
$canonical = $export ? 'https://fedinartemii.github.io/LASHbyTASH/' : $home;
$page = get_post( (int) get_option( 'page_on_front' ) );
$title = 'LASH by TASH — наращивание ресниц за 1 час';
$description = 'Наращивание ресниц за 1 час, брови, маникюр, педикюр и обучение. VIP-сервис в 4 или 6 рук. Запись во ВКонтакте.';
$nav = array( 'services' => 'Услуги', 'vip' => 'VIP-сервис', 'training' => 'Обучение' );
?>
<!doctype html>
<html lang="ru" data-type="place" data-motion>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo esc_html( $title ); ?></title>
<meta name="description" content="<?php echo esc_attr( $description ); ?>">
<meta name="page-type" content="place">
<meta name="page-kind" content="place">
<meta name="site-kind" content="other">
<meta name="theme-color" content="#eeced9">
<meta property="og:title" content="<?php echo esc_attr( $title ); ?>">
<meta property="og:description" content="<?php echo esc_attr( $description ); ?>">
<meta property="og:type" content="website">
<meta property="og:locale" content="ru_RU">
<meta property="og:url" content="<?php echo esc_url( $canonical ); ?>">
<meta property="og:image" content="<?php echo esc_url( $export ? $canonical . 'assets/portrait.webp' : $assets . '/portrait.webp' ); ?>">
<link rel="canonical" href="<?php echo esc_url( $canonical ); ?>">
<link rel="icon" href="<?php echo esc_attr( $assets . '/logo.png' ); ?>" type="image/png">
<link rel="stylesheet" href="<?php echo esc_attr( $assets . '/landing.css' ); ?>">
<script defer src="<?php echo esc_attr( $assets . '/landing.js' ); ?>"></script>
<?php if ( ! $export ) { wp_head(); } ?>
</head>
<body class="lash-site">
<?php if ( ! $export ) { wp_body_open(); } ?>
<a class="lash-skip" href="#main">К содержанию</a>
<header class="lash-header">
  <a class="lash-brand" href="<?php echo esc_attr( $home ); ?>" aria-label="LASH by TASH, главная">
    <span class="lash-brand-art"><img src="<?php echo esc_attr( $assets . '/logo.png' ); ?>" alt="" width="144" height="144"></span>
    <span>LASH <em>by</em> TASH</span>
  </a>
  <nav class="lash-desktop-nav" aria-label="Основная навигация">
    <?php foreach ( $nav as $id => $label ) { ?>
      <a href="#<?php echo esc_attr( $id ); ?>"><?php echo esc_html( $label ); ?></a>
    <?php } ?>
  </nav>
  <a class="lash-header-book" href="#booking">Запись <span class="lash-arrow" aria-hidden="true"></span></a>
  <details class="lash-menu">
    <summary>Меню</summary>
    <nav aria-label="Мобильная навигация">
      <?php foreach ( $nav as $id => $label ) { ?>
        <a href="#<?php echo esc_attr( $id ); ?>"><?php echo esc_html( $label ); ?></a>
      <?php } ?>
      <a href="#booking">Запись</a>
    </nav>
  </details>
</header>
<main id="main" tabindex="-1">
<?php if ( $page ) { echo apply_filters( 'the_content', $page->post_content ); } ?>
</main>
<footer class="lash-footer">
  <span>LASH <em>by</em> TASH</span>
  <small>Демонстрационные изображения созданы в ImageGen</small>
  <a href="#main">Наверх</a>
</footer>
<?php if ( ! $export ) { wp_footer(); } ?>
</body>
</html>
