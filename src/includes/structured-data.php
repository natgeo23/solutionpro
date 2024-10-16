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
            "logo": "<?php echo $site_domain; ?>/src/assets/img/logo.svg", // URL del logo del sitio
            "sameAs": [
                "https://www.facebook.com/p/My-Sport-Session-100063915368745/?paipv=0&eav=AfabQD7kWbZ4tYa5Rz16jgckH9xI0tR2i87Af4iN6qhczecDuW0DDYV006pELq7-A0E&_rdr",
                "https://www.instagram.com/mysportsession/",
                "https://www.linkedin.com/company/my-sport-session/"
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
                "name": "France"
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
