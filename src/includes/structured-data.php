<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "WebSite",
            "@id": "<?php echo $site_domain; ?>#website",
            "url": "<?php echo $site_domain; ?>",
            "name": "<?php echo $site_name; ?>",
            "description": "Libérez vos journées et développez votre business avec My Sport Session. Gagnez en visibilité et optimisez la gestion de vos réservations.",
            "publisher": {
                "@id": "<?php echo $site_domain; ?>#organization"
            },
            "potentialAction": {
                "@type": "SearchAction",
                "target": "<?php echo $site_domain; ?>/?s={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        },
        {
            "@type": "Organization",
            "@id": "<?php echo $site_domain; ?>#organization",
            "name": "<?php echo $site_name; ?>",
            "url": "<?php echo $site_domain; ?>",
            "logo": "<?php echo $site_domain; ?>/path-to-logo.jpg", // URL del logo del sitio
            "sameAs": [
                "https://www.facebook.com/yourpage",
                "https://www.instagram.com/yourpage",
                "https://www.linkedin.com/in/yourpage"
            ]
        },
        {
            "@type": "Service",
            "@id": "<?php echo $site_domain; ?>#service",
            "serviceType": "Gestion de réservations",
            "provider": {
                "@type": "Organization",
                "@id": "<?php echo $site_domain; ?>#organization"
            },
            "description": "Gagnez en visibilité et optimisez la gestion de vos réservations avec My Sport Session.",
            "areaServed": {
                "@type": "Place",
                "name": "France" // Puedes ajustar el área según corresponda
            },
            "keywords": [
                "Gestion de réservations",
                "Optimisation des réservations",
                "Développement de business",
                "Visibilité en ligne",
                "Plateforme de sport",
                "Réservations en ligne",
                "Gestion du temps",
                "Augmenter la visibilité",
                "Sport en ligne",
                "Solution de gestion"
            ]
        }
    ]
}
</script>
