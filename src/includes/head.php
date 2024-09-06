<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Datos estructurados -->
    <?php include "src/includes/structured-data.php"; ?>

    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $site_title; ?>
    </title>
    <meta name="description" content="<?php echo $site_description; ?>">
    <meta name="keywords" content="<?php echo $site_keywords; ?>" />
    <meta name="robots" content="index" />
    <meta name="author" content="<?php echo $site_author; ?>" />
    <meta name="copyright" content="<?php echo $site_name; ?>" />
    <link rel="canonical" href="<?php echo $site_domain; ?>/" />

    <!-- Meta tags para redes sociales -->
    <!-- Meta tags comunes para Facebook, WhatsApp, LinkedIn y otros -->
    <meta property="og:title" content="<?php echo $site_title; ?>" />
    <meta property="og:description" content="<?php echo $site_description; ?>" />
    <meta property="og:image" content="<?php echo $site_domain; ?>/src/assets/img/logo.svg" />
    <meta property="og:url" content="<?php echo $site_domain; ?>/" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <!-- Meta tags específicos de Google+ -->
    <meta itemprop="name" content="<?php echo $site_name; ?>" />
    <meta itemprop="description" content="<?php echo $site_description; ?>" />
    <meta itemprop="image" content="<?php echo $site_domain; ?>/src/assets/img/logo.svg" />
    <!-- Meta tags específicos de Twitter y Slack -->
    <meta name="twitter:title" content="<?php echo $site_title; ?>" />
    <meta name="twitter:description" content="<?php echo $site_description; ?>" />
    <meta name="twitter:image" content="<?php echo $site_domain; ?>/src/assets/img/logo.svg" />
    <meta name="twitter:url" content="<?php echo $site_domain; ?>/" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="src/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="src/assets/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Color Scheme -->
    <meta name="color-scheme" content="light dark">

    <!-- Format Detection -->
    <meta name="format-detection" content="telephone=no">

    <!-- Preload Fonts & Images -->
    <link rel="preload" as="image" href="<?php echo $site_domain; ?>/src/assets/img/logo.svg">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="src/assets/fonts/quicksand/stylesheet.css">
    <link rel="stylesheet" href="src/assets/fonts/permanentmaker/stylesheet.css">

    <!-- Hamburguer css -->
    <link href="dist/hamburgers-master/dist/hamburgers.min.css" rel="stylesheet">

    <!-- Aos -->
    <link rel="stylesheet" href="dist/aos/dist/aos.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="dist/slick/slick.css" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.css">

    <!-- Styles -->
    <link rel="stylesheet" href="dist/scss/css/main.min.css?v=10">
</head>