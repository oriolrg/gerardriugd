<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($imatges as $imatge)
        <url>
            <loc>https://gerardriugd.com/public/profile_images/{{ $imatge->imatge }}</loc>
            <lastmod>{{ $imatge->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.6</priority>
        </url>
    @endforeach
</urlset>