@extends("layout")

@section("about-this-site-content")
	
	<div class='title-box box-shadow'>
		 <div class="page-title"><span class="bar-line">|</span> Nuts and Bolts <span class="bar-line">|</span></div>
	</div>

	<div class="container-fluid">
	    <div class="row-fluid">
	    	<div class="span10 offset1">
	    		<div class="content">
	    			<div class="content-title-container">
	    				<div class="content-title">
	    					About This Site
	    				</div>
	    			</div>

	    			<p class="text-center"> 
	    				This project uses Laravel 4 for it's backend framework and Bootstrap 
	    				for its frontend framework. The background image is a subtle pattern and
	    				the default font has been supplied by Google Fonts. Github is currently 
	    				holding this site's 
	    				<a href="https://github.com/bbhamdeo/personal-site">repo </a>
	    				and as with every programming project, a big shout out to the stack community.
	    				Furthermore, after struggling with getting my layout's footer to stay fixed to
	    				the bottom of the page, I found a excellent solution by 
	    				<a href="http://matthewjamestaylor.com/blog/keeping-footers-at-the-bottom-of-the-page"> this gentleman,</a>
	    				a solution that I, myself, adopted.
	    			 </p>
	    			
	    			<div class="row-fluid">
			    		<div class="span5">
			    			<a href="http://www.google.com/fonts/#">
			    				<img class="standard-image "src="css/img/google.png">
			    			</a>	
			    			<p> Google Fonts </p>
			    		</div>
			    		<div class="span5 offset1">
			    			<a href="http://twitter.github.io/bootstrap/">
			    				<img class="bootstrap" src="css/img/bootstrap-logo.png">
			    			</a>
			    			<p> Bootstrap by Twitter</p>
			    		</div>	
	    			</div>

	    			<div class="row-fluid">
			    		<div class="span5">
			    			<a href="http://subtlepatterns.com/">	
			    				<img class="standard-image"src="css/img/subtle-patterns.png">
			    			</a>	
			    			<p> Subtle Patterns </p>
			    		</div>
			    		<div class="span5 offset1">
			    			<a href="https://github.com/bbhamdeo/personal-site">
			    				<img class="standard-image" src="css/img/github.png">
			    			</a>	
			    			<p> Github</p>
			    		</div>	
	    			</div>

	    			<div class="row-fluid">
			    		<div class="span5">
			    			<a href="http://laravel.com/">
			    				<img class="standard-image"src="css/img/laravel.png">
			    			</a>	
			    			<p> Laravel 4 </p>
			    		</div>
			    		<div class="span5 offset1">
			    			<a href="http://stackoverflow.com/">
			    				<img class="standard-image"src="css/img/stack.png">
			    			</a>		
			    			<p> Stack Overflow </p>
			    		</div>	
	    			</div>
	    		<p class="revision-date"> Last Revised: June, 2013</p>
	    		</div>
	    	</div>
	    </div>
	</div>

@stop