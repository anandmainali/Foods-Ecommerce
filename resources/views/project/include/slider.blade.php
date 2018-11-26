<div class="slide">
	<div class="slideshow owl-carousel">
		@foreach($sliders as $slider)
		<div class="item">
			<img src="{{$slider->image}}" alt="banner" title="banner" class="img-responsive"/>
		</div>
		@endforeach
		
	</div>
</div>
