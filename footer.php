<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package klinika
 */
?>
	<footer id="colophon" class="site-footer">
		<div class="container">
      <div class="roww">
        <p><?php echo date(' Y ') ;?> &copy;<?php the_field('all_rechte'); ?> ALL RIGHTS ARE RESERVED.</p>
        <div class="right-butt">
          <h2>Impressum</h2>
          <h3>Datenschutz</h3>
        </div>
    </div>
    </div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<script>

	var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 2,
    spaceBetween: 25,
    loop:true,
    freeMode: true,
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
    },
    autoplay: {
      delay: 2000,
    },
    breakpoints: {
    640: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 4,
    },
    991.98: {
      slidesPerView: 5,
      },
    }
  });

  var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop:true,
    freeMode: true,
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
    },
    autoplay: {
      delay: 2000,
    },
    breakpoints: {
    640: {
      slidesPerView: 4,
    },
    768: {
      slidesPerView: 5,
    },
    991.98: {
      slidesPerView: 6,
      },
    }
  });

  window.addEventListener("scroll", reveall);
    function reveall() {
      var reveals = document.querySelectorAll(".reveall");
      for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
      if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
      } else {
      reveals[i].classList.remove("active");
      }
    }
  }

  window.addEventListener("scroll", reveal);
      function reveal() {
      var reveals = document.querySelectorAll(".reveal");
      for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
      if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
      } else {
      reveals[i].classList.remove("active");
      }
    }
  }

</script>
</body>
</html>
