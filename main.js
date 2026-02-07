// <!-- swiper --> 
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script> 

     // フロントビューswiper 
    const swiper = new Swiper('.swiper-fv', { 
        // Optional parameters 
        direction: 'horizontal', 
        loop: true, 
        speed: 1000, 

        // If we need pagination 
        pagination: { 
            el: '.swiper-fv .swiper-pagination', 
        }, 

        // Navigation arrows 
        navigation: { 
            nextEl: '.swiper-fv .swiper-button-next', 
            prevEl: '.swiper-fv .swiper-button-prev', 
        }, 

        // And if we need scrollbar 
        scrollbar: { 
            el: '.swiper-fv .swiper-scrollbar', 
            hide: true, 
        }, 
    }); 
    // フロントビューswiper 

    // 店舗情報swiper 
    const swiper_store = new Swiper('.swiper-store', { 
        // Optional parameters 
        direction: 'horizontal', 
        loop: true, 
        speed:1000, 
        
        // If we need pagination 
        pagination: { 
            el: '.swiper-store .swiper-pagination', 
        }, 

        // Navigation arrows 
        navigation: { 
            nextEl: '.swiper-store .swiper-button-next', 
            prevEl: '.swiper-store .swiper-button-prev', 
        }, 

        // And if we need scrollbar 
        scrollbar: { 
            el: '.swiper-store .swiper-scrollbar', 
        }, 
    }); 
    // 店舗情報swiper 
