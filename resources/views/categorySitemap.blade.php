<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
           <loc>https://www.huzurr.com/</loc>
         
           <changefreq>weekly</changefreq>
           <priority>0.8</priority>
        </url>

        @foreach ($parent_category as $post)
      
        <url>   
            <loc>{{ url('https://www.huzurr.com') }}/{{ $post->url }}</loc>
            <lastmod>{{ $post->created_at }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        @endforeach
        @foreach ($parent_category as $post)
         @foreach ($sub_cat as $subCat)
         @if($subCat->parent_category == $post->id)
        <url>   
            <loc>{{ url('https://www.huzurr.com') }}/{{strtolower($post->name)}}/{{ $subCat->url }}</loc>
            <lastmod>{{ $post->created_at }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        @endif
         @endforeach
        @endforeach
        

        @foreach ($childCategories_rings as $post)
        <url>
             <loc>{{ url('https://www.huzurr.com') }}/rings/{{ $post->url }}</loc>
            <lastmod>{{ $post->created_at }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        @endforeach



        @foreach ($childCategories_necklaces as $post)
        <url>
             <loc>{{ url('https://www.huzurr.com') }}/necklaces/{{ $post->url }}</loc>
            <lastmod>{{ $post->created_at }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        @endforeach
        
        
        
        
      @foreach ($childCategories_earrings as $post)
        <url>
             <loc>{{ url('https://www.huzurr.com') }}/earrings/{{ $post->url }}</loc>
            <lastmod>{{ $post->created_at }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        @endforeach
        
        
        @foreach ($childCategories_bracelets as $post)
        <url>
             <loc>{{ url('https://www.huzurr.com') }}/bracelets/{{ $post->url }}</loc>
            <lastmod>{{ $post->created_at }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        @endforeach

    
        

      



    </urlset>




