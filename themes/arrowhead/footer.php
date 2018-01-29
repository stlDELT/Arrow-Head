<div class="newsarrow">
	<div class="newsbar pd gbg">
		<div class="footarrow"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<h3>sign up for our newsletter to stay up-to-date on with all things Arrowhead</h3>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-4">
					<div class="newsign">
						<div class="row rnp">
							<div class="col-sm-8">
								<input type="email" placeholder="Your Email">
							</div>
							<div class="col-sm-4">
								<input type="submit" placeholder="SIGN UP" style="background:#141414;color:#fff">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="bbg">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="">
						<h2>Arrowhead Building Supplies</h2>
						<p>Proudly providing building supplies and services for commercial and residential projects in Missouri, Illinois, and Arkansas.</p>
						<div class="icon-block">
							<li>
								<i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
							</li>
							<li>
								<i class="fa fa-youtube fa-lg" aria-hidden="true"></i>
							</li>
							<li>
								<i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>
							</li>
							<li>
								<i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
							</li>
							<li>
								<i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
							</li>
						</div>
					</div>
				</div>
				<div class="col-md-3 fli">
					<ul>
						<li>Contactor Services</li>
						<li>Homeowner Services</li>
						<li>Speciality Services</li>
						<li>Our Products</li>
					</ul>
				</div><!-- end of footer-contractor-services -->
				<div class="col-md-3 fli">
					<ul>
						<li>About Arrowhead</li>
						<li>Our Locations</li>
						<li>Blog and News</li>
						<li>Contact Us</li>
					</ul>
				</div><!-- end of footer-about-arrowhead -->
			</div>
		</div>
		<div class="pd2"></div>
		<div class="container">
			<div class="copytho">
				<div class="row">
					<div class="col-sm-6">
						<span>Copyright 2018 | Arrowhead Building Supply</span>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>
	$(function() {
		var Accordion = function(el, multiple) {
			this.el = el || {};
			this.multiple = multiple || false;

			// Variables privadas
			var links = this.el.find('.link');
			// Evento
			links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
		}

		Accordion.prototype.dropdown = function(e) {
			var $el = e.data.el;
			$this = $(this),
				$next = $this.next();

			$next.slideToggle();
			$this.parent().toggleClass('open');

			if (!e.data.multiple) {
				$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
			};
		}

		var accordion = new Accordion($('#accordion'), false);
	});
</script>
