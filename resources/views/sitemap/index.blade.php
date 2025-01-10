<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($staticPages as $page)
        <url>
            <loc>{{config('app.url')}}/{{$page}}</loc>
            <lastmod>2025-01-10</lastmod>
        </url>
    @endforeach
    @foreach($posts as $post)
        <url>
            <loc>{{config('app.url')}}/{{$post->slug}}</loc>
            @php
                $date = new DateTimeImmutable($post->updated_at);
                $newDate = $date->format('Y-m-d');
            @endphp
            <lastmod>{{ $newDate }}</lastmod>
        </url>
    @endforeach
    @foreach($works as $work)
        <url>
            <loc>{{config('app.url')}}/{{$work->slug}}</loc>
            @php
                $date = new DateTimeImmutable($work->updated_at);
                $newDate = $date->format('Y-m-d');
            @endphp
            <lastmod>{{ $newDate }}</lastmod>
        </url>
    @endforeach
</urlset>
