<?php $title = "NOM DU PROJET" ?>
<?php include('includes/constants.php'); ?>
<?php include('partials/header.php'); ?>

<div class="container">
	<br>
	<section>
	<h4 class="light-blue-text">Un titre ?</h4>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi sed quam, quo consequuntur esse deleniti assumenda, nemo debitis velit. Ipsum nobis officia maiores alias itaque delectus consequuntur natus assumenda consequatur inventore, quo expedita iure nesciunt nemo qui ut impedit voluptatem, eos sunt pariatur molestiae labore modi molestias necessitatibus laudantium! Deleniti error maiores officiis tempore vero atque aut, officia illum odit sint expedita natus facilis earum voluptatem nihil molestias modi quas impedit facere excepturi blanditiis in dicta. Sit, distinctio qui. Minus ullam, officia cumque velit. Culpa reprehenderit quia eos maxime iusto temporibus maiores vero similique! Autem dolore asperiores animi, ipsam, totam sit obcaecati optio. Doloribus excepturi eligendi dolor deserunt maiores dolore optio laboriosam aperiam eos nam illo incidunt aspernatur facilis perferendis harum eius, similique quae ducimus architecto reiciendis quam eveniet. Tempore inventore, quibusdam quasi nemo, similique quos? Repudiandae nobis aperiam nulla dolore maiores nisi voluptates, expedita veniam, incidunt quos molestias optio.	
	</section>
	<br>
</div>
<div class="parallax-container">
	<div class="parallax">
		<img src="http://lorempixel.com/1080/720/">
	</div>
</div>
<div class="container">
	<br>
	<section>
		<div class="row">
			<h4 class="light-blue-text">Un titre ?</h4>
			<div class="col s8 m8">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi sed quam, quo consequuntur esse deleniti assumenda, nemo debitis velit. Ipsum nobis officia maiores alias itaque delectus consequuntur natus assumenda consequatur inventore, quo expedita iure nesciunt nemo qui ut impedit voluptatem, eos sunt pariatur molestiae labore modi molestias necessitatibus laudantium! Deleniti error maiores officiis tempore vero atque aut, officia illum odit sint expedita natus facilis earum voluptatem nihil molestias modi quas impedit facere excepturi blanditiis in dicta. Sit, distinctio qui. Minus ullam, officia cumque velit. Culpa reprehenderit quia eos maxime iusto temporibus maiores vero similique! Autem dolore asperiores animi, ipsam, totam sit obcaecati optio. Doloribus excepturi eligendi dolor deserunt maiores dolore optio laboriosam aperiam eos nam illo incidunt aspernatur facilis perferendis harum eius, similique quae ducimus architecto reiciendis quam eveniet. Tempore inventore, quibusdam quasi nemo, similique quos? Repudiandae nobis aperiam nulla dolore maiores nisi voluptates, expedita veniam, incidunt quos molestias optio.
			</div>
			<div class="col s4 m4">
	          <div class="card blue-grey darken-1">
	            <div class="card-content white-text">
	              <span class="card-title">Card Title</span>
	              <p>I am a very simple card. I am good at containing small bits of information.
	              I am convenient because I require little markup to use effectively.</p>
	            </div>
	          </div>
	        </div>	
		</div>
	
	</section>
	<br>
</div>
<div class="parallax-container">
	<div class="parallax">
		<img src="http://lorempixel.com/1080/720/">
	</div>
</div>
<!-- Back top Top -->
<div class="fixed-action-btn back-to-top" style="bottom: 45px; right: 24px;display: none;">
	<a class="btn-floating btn-large blue">
		<i class="large mdi-navigation-expand-less"></i>
	</a>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script>
	$(document).ready(function(){
    	$('.parallax').parallax();

	    var offset = 250;
	    var duration = 300;
	    jQuery(window).scroll(function() {
	        if (jQuery(this).scrollTop() > offset) {
	            jQuery('.back-to-top').fadeIn(duration);
	        } else {
	            jQuery('.back-to-top').fadeOut(duration);
	        }
	    });

	    jQuery('.back-to-top').click(function(event) {
	        event.preventDefault();
	        jQuery('html, body').animate({scrollTop: 0}, duration);
	        return false;
	    })
	});
</script>
</script>
<?php include('partials/footer.php'); ?>
