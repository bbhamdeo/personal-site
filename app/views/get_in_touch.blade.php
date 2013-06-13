@extends('layout')

@section('get-in-touch-content')

	<div class="title-box">
		<div class="page-title"><span class="bar-line">|</span> We Should Chat <span class="bar-line">|</span></div>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span8 offset2">
				<div class="content center-me-please">
					<div class="content-title-container">
						<p class="content-title">
							What's that? Who? <span style="font-style:italic;">Me?</span> I'm flattered!
						</p>	
					</div>
					<p> If you'd like, shoot me an email at 
						<a href="mailto:benjaminbhamdeo@gmail.com?Subject=Hey%20Ben,%20What's%20Up?">BenjaminBhamdeo@gmail.com</a>.
					</p>
					<p>I am also on Twitter, even if I don't use it as much as I should.</p>
						<!-- Twitter Button -->
						<a href="https://twitter.com/intent/tweet?screen_name=BBhamdeo" class="twitter-mention-button" data-size="large" data-related="BBhamdeo">Tweet to @BBhamdeo</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					<p>
						<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
						<script type="IN/MemberProfile" data-id="http://www.linkedin.com/pub/benjamin-bhamdeo/3b/46a/a5b" data-format="hover" data-text="Oh, and this." data-related="false"></script>					
						I should use this more, too...
					</p>
					<p> ¯\_(ツ)_/¯ </p>
					<p class="revision-date"> Last Revised: June, 2013</p>
				</div>
			</div>
		</div>
	</div>

@stop

