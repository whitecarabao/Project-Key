<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Key Hosting Co - Property Listings</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <style>
        .pastel-blue { background-color: #a7c7e7; }
        .pastel-pink { background-color: #f3d1dc; }
        .concrete-gray { color: #95a5a6; }
        .welcome-text { font-size: 1.5rem; font-weight: 500; color: #34495e; }
    </style>
</head>
<body class="bg-beige">

<x-app-layout>
    <br>
    <br>
    <div class="text-center my-20">
        <h1 class="text-4xl font-bold welcome-text">Welcome to Key Hosting Co</h1>
        <p class="concrete-gray">Discover Your Perfect Getaway</p>
    </div>
    <br>

   <!-- Image Carousel -->
   <div class="swiper mySwiper" style="height: 500px; width: 90vw; max-width: 1200px; margin: auto;">
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="https://picsum.photos/1920/1080?random=1" alt="Random Image" style="object-fit: cover; width: 100%; height: 100%;"></div>
        <div class="swiper-slide"><img src="https://picsum.photos/1920/1080?random=2" alt="Random Image" style="object-fit: cover; width: 100%; height: 100%;"></div>
        <div class="swiper-slide"><img src="https://picsum.photos/1920/1080?random=3" alt="Random Image" style="object-fit: cover; width: 100%; height: 100%;"></div>
        <!-- ... additional slides ... -->
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-scrollbar"></div>
</div>
<br>
<br>

<!-- Properties Showcase -->
<div style="max-width: 1280px; padding: 0 16px; margin: auto;">
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(400px, 1fr)); gap: 16px; margin-top: 32px;">
        @foreach ($properties as $property)
            <div style="border-radius: 0.5rem; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.05); background-color: #95a5a6;">
                <!-- Smaller Property Images -->
                <img style="width: 100%; height: 192px; object-fit: cover;" src="https://picsum.photos/400/300?random={{ $loop->iteration }}" alt="Property Image">
                <div style="padding: 24px;">
                    <div style="font-weight: bold; font-size: 1.25rem; margin-bottom: 0.5rem;">{{ $property->name }}</div>
                    <p style="color: #4a4a4a; font-size: 1rem;">
                        {{ \Illuminate\Support\Str::limit($property->description, 100) }}
                    </p>
                </div>
                <div style="padding: 16px;">
                    <a href="{{ route('properties.show', $property) }}" style="background-color: #a7c7e7; color: white; font-weight: bold; padding: 8px 16px; border-radius: 0.25rem; text-decoration: none;">
                        View Property
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>


    <br>
    <br>
</x-app-layout>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.mySwiper', {
        // ... existing swiper options ...
    });
</script>

</body>
</html>
