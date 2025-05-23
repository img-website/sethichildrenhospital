
!function(t){"use strict";var o=t(window);function a(){var e,a;e=t(".full-screen"),a=o.height(),e.css("min-height",a),e=t("header").height(),a=t(".screen-height"),e=o.height()-e,a.css("height",e)}t("#preloader").fadeOut("normall",function(){t(this).remove()}),o.on("scroll",function(){var e=o.scrollTop(),a=t(".logochange img");e<=50?(t("header").removeClass("scrollHeader").addClass("fixedHeader"),a.attr("src","img/logos/logo-white.png")):(t("header").removeClass("fixedHeader").addClass("scrollHeader"),a.attr("src","img/logos/logo.png"))}),o.on("scroll",function(){500<t(this).scrollTop()?t(".scroll-to-top").fadeIn(400):t(".scroll-to-top").fadeOut(400)}),t(".scroll-to-top").on("click",function(e){e.preventDefault(),t("html, body").animate({scrollTop:0},600)}),new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:!1,live:!0}).init(),t(".parallax,.bg-img").each(function(e){t(this).attr("data-background")&&t(this).css("background-image","url("+t(this).data("background")+")")}),t(".story-video").magnificPopup({delegate:".video",type:"iframe"}),t(".popup-social-video").magnificPopup({type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:!1,fixedContentPos:!1}),t(".appointment").magnificPopup({type:"inline",preloader:!1}),t(".form_date").datetimepicker({language:"en",weekStart:1,todayBtn:1,autoclose:1,todayHighlight:1,startView:2,minView:2,forceParse:0}),t(".form_time").datetimepicker({language:"en",weekStart:1,todayBtn:1,autoclose:1,todayHighlight:1,startView:1,minView:0,maxView:1,forceParse:0}),o.resize(function(e){setTimeout(function(){a()},500),e.preventDefault()}),a(),0!==t(".copy-clipboard").length&&(new ClipboardJS(".copy-clipboard"),t(".copy-clipboard").on("click",function(){var e=t(this);e.text();e.text("Copied"),setTimeout(function(){e.text("Copy")},2e3)})),t(".source-modal").magnificPopup({type:"inline",mainClass:"mfp-fade",removalDelay:160}),t(document).ready(function(){t(".testimonial-style1").owlCarousel({loop:!0,responsiveClass:!0,nav:!1,dots:!1,margin:0,autoplay:!0,thumbs:!0,thumbsPrerendered:!0,center:!0,autoplayTimeout:5e3,smartSpeed:800,responsive:{0:{items:1},600:{items:1},1e3:{items:1}}}),t(".testimonial-style2").owlCarousel({loop:!0,responsiveClass:!0,nav:!1,navText:["<i class='ti-arrow-left'></i>","<i class='ti-arrow-right'></i>"],dots:!1,margin:0,autoplay:!0,center:!0,autoplayTimeout:5e3,smartSpeed:800,responsive:{0:{items:1},600:{items:1},1e3:{items:1,nav:!0}}}),t(".testimonial-style4").owlCarousel({loop:!0,responsiveClass:!0,autoplay:!0,smartSpeed:900,thumbs:!1,nav:!1,dots:!1,center:!1,margin:0,responsive:{0:{items:1},1200:{items:1,dots:!0}}}),t(".client-style01").owlCarousel({loop:!0,responsiveClass:!0,autoplay:!0,smartSpeed:900,thumbs:!1,nav:!1,dots:!1,center:!1,margin:30,responsive:{0:{items:2},576:{items:3},768:{items:4},992:{items:5,margin:40},1200:{items:6}}}),t(".client-style02").owlCarousel({loop:!0,responsiveClass:!0,autoplay:!0,smartSpeed:900,thumbs:!1,nav:!1,dots:!1,center:!1,margin:30,responsive:{0:{items:2},576:{items:3},768:{items:4},1200:{items:4}}}),t(".portfolio-carousel").owlCarousel({loop:!0,responsiveClass:!0,autoplay:!0,smartSpeed:900,thumbs:!1,nav:!1,dots:!1,center:!1,margin:30,responsive:{0:{items:1},576:{items:2},992:{items:2},1200:{items:3}}}),t(".portfolio-carousel-02").owlCarousel({loop:!0,responsiveClass:!0,autoplay:!0,smartSpeed:900,thumbs:!1,nav:!1,dots:!1,center:!1,margin:0,responsive:{0:{items:1},576:{items:1},992:{items:2,margin:30},1200:{items:3,margin:30}}}),t(".portfolio-carousel-03").owlCarousel({loop:!0,responsiveClass:!0,nav:!1,navText:["<i class='ti-arrow-left'></i>","<i class='ti-arrow-right'></i>"],dots:!1,margin:30,autoplay:!0,center:!1,autoplayTimeout:5e3,smartSpeed:800,responsive:{0:{items:1},576:{items:2},992:{items:4},1399:{items:4}}}),t(".slider-fade1").owlCarousel({items:1,loop:!0,dots:!1,margin:0,nav:!1,autoplay:!0,mouseDrag:!1,animateIn:"fadeIn",animateOut:"fadeOut",smartSpeed:900,responsive:{992:{nav:!0,navText:["<span class='fas fa-arrow-left'></span>","<span class='fas fa-arrow-right'></span>"],dots:!1}}}),t(".slider-fade2").owlCarousel({items:1,loop:!0,dots:!1,margin:0,nav:!1,autoplay:!0,mouseDrag:!1,animateIn:"fadeIn",animateOut:"fadeOut",smartSpeed:900,responsive:{992:{nav:!0,navText:["<span class='fas fa-arrow-left'></span>","<span class='fas fa-arrow-right'></span>"],dots:!1}}}),t(".owl-carousel").owlCarousel({items:1,loop:!0,dots:!0,margin:0,autoplay:!0,smartSpeed:500}),t(".slider-fade1").on("changed.owl.carousel",function(e){e=e.item.index-2;t("h1").removeClass("animated fadeInUp"),t("p").removeClass("animated fadeInUp"),t("a").removeClass("animated fadeInUp"),t(".owl-item").not(".cloned").eq(e).find("h1").addClass("animated fadeInUp"),t(".owl-item").not(".cloned").eq(e).find("p").addClass("animated fadeInUp"),t(".owl-item").not(".cloned").eq(e).find("a").addClass("animated fadeInUp")}),t(".slider-fade2").on("changed.owl.carousel",function(e){e=e.item.index-2;t(".sub-title").removeClass("animated fadeInUp"),t("h1").removeClass("animated fadeInUp"),t("p").removeClass("animated fadeInUp"),t("a").removeClass("animated fadeInUp"),t(".owl-item").not(".cloned").eq(e).find(".sub-title").addClass("animated fadeInUp"),t(".owl-item").not(".cloned").eq(e).find("h1").addClass("animated fadeInUp"),t(".owl-item").not(".cloned").eq(e).find("p").addClass("animated fadeInUp"),t(".owl-item").not(".cloned").eq(e).find("a").addClass("animated fadeInUp")}),t(".countup").counterUp({delay:25,time:2e3}),t(".countdown").countdown({date:"29 Dec 2025 00:01:00",format:"on"}),t(".current-year").text((new Date).getFullYear())}),o.on("load",function(){t(".portfolio-gallery").lightGallery(),t(".portfolio-link").on("click",e=>{e.stopPropagation()})})}(jQuery);

  // Get current URL path
  const currentPath = window.location.pathname;

  // Get all menu links inside the list
  document.querySelectorAll('.list-style3 li a').forEach(link => {
    // Check if link href matches current path
    if(link.getAttribute('href') === currentPath.substring(currentPath.lastIndexOf('/') + 1)) {
      // Remove 'active' from all first
      document.querySelectorAll('.list-style3 li').forEach(li => li.classList.remove('active'));
      // Add 'active' to the matching link's parent <li>
      link.parentElement.classList.add('active');
    }
  });
  
 $('.team-carousel').owlCarousel({
        loop:true,
        margin:20,
        autoplay:true,
        dots: false,
        autoplayTimeout:1000,
        nav:false,
        autoHeight: true,
        responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
        }
    })
    