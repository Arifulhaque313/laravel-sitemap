<?php 'echo <?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    
   
    <url>
        <loc>{{url('/')}}</loc>
        <lastmod>2024-12-24T15:54:14+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{url('/services')}}</loc>
        <lastmod>2024-12-24T15:54:14+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{url('/about-us')}}</loc>
        <lastmod>2024-12-24T15:54:14+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{url('/contact-us')}}</loc>
        <lastmod>2024-12-24T15:54:14+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{url('/terms-and-conditions')}}</loc>
        <lastmod>2024-12-24T15:54:14+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
  

    @foreach ($posts as $post)
        <url>
            <loc>{{ url('post/'. $post->slug) }}</loc>
            <lastmod>{{ $post->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.3</priority>
        </url>
    @endforeach
</urlset>