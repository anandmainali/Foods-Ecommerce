@if(count($testimonials)>0)
<div class="testi">
	<div class="container">		
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
				<p>People says</p>
				<h4>
					<i class="icon_star_alt"></i>
					<i class="icon_star_alt"></i>
					<i class="icon_star_alt"></i>
					testimonials
					<i class="icon_star_alt"></i>
					<i class="icon_star_alt"></i>
					<i class="icon_star_alt"></i>
				</h4>
			</div>
			<div class="col-sm-12 col-xs-12 owl-carousel testimonail">
				@foreach($testimonials as $testimonial)
				<div class="item">
					<div class="box text-center">
						<ul class="list-inline">
							<li>
								<img src="{{$testimonial->photo}}" style="height: 150px !important;width: 150px;" class="img-circle"  alt="img" title="img" />
							</li>
							
						</ul>
						<p>{!!$testimonial->about!!}</p>
						<h4><i class="icon_profile"></i> {{$testimonial->name}}</h4>
						<span>({{$testimonial->post}})</span>
					</div>
				</div>
				@endforeach
			</div>
		</div>		
	</div>
</div>
@endif
<br>
