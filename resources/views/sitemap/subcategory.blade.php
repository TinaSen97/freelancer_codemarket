<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($subcategory as $categories)
        <url>
            <loc>{{ URL::to('/') }}/shop/subcategory/{{ $categories->subcategory_slug }}</loc>
            <lastmod>{{ now()->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>