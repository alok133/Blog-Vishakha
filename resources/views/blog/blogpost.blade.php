@extends('blog.layouts.master')
@section('content')

<header class="header text-center">	    
	@foreach($blog as $blogs)
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">{{$blogs->name}}'s Blog</a></h1>

        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="{{asset('/upload/' .$blogs->image)}}" alt="image" >			
					
					<div class="bio mb-3">{{$blogs->content}}<br><a href="about.html">Find out more about me</a></div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item">
					    <a class="nav-link" href="index.html"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
					    <a class="nav-link" href="blog-post.html"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog Post</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="{{url('/about')}}"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
					</li>
				</ul>
				
				<div class="my-2 my-md-3">
					
				    <a class="btn btn-primary" href="https://themes.3rdwavemedia.com/" target="_blank">Get in Touch</a>
				    
				</div>
			</div>
		</nav>
		@endforeach
    </header>
    
    <div class="main-wrapper">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2">{{$view->heading}}</h2>
				    <div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <a href="https://made4dev.com"><img class="img-fluid" src="{{asset('/upload' .$view->image2)}}" alt="image"></a>
				        <figcaption class="mt-2 text-center image-caption">Image Credit: <a href="https://made4dev.com?ref=devblog" target="_blank">made4dev.com (Premium Programming T-shirts)</a></figcaption>
				    </figure>
				    <p>{{$view->content}} </p>
				    
				    
				    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
				<div class="blog-comments-section">
					<div id="disqus_thread"></div>
					<script>
					    /**
					     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
					     *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
					     *  PLATFORM OR CMS.
					     *  
					     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
					     *  https://disqus.com/admin/universalcode/#configuration-variables
					     */
					    /*
					    var disqus_config = function () {
					        // Replace PAGE_URL with your page's canonical URL variable
					        this.page.url = PAGE_URL;  
					        
					        // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					        this.page.identifier = PAGE_IDENTIFIER; 
					    };
					    */
					    
					    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
					        var d = document, s = d.createElement('script');
					        
					        // IMPORTANT: Replace 3wmthemes with your forum shortname!
					        s.src = 'https://3wmthemes.disqus.com/embed.js';
					        
					        s.setAttribute('data-timestamp', +new Date());
					        (d.head || d.body).appendChild(s);
					    })();
					</script>
					<noscript>
					    Please enable JavaScript to view the 
					    <a href="https://disqus.com/?ref_noscript" rel="nofollow">
					        comments powered by Disqus.
					    </a>
					</noscript>
				</div><!--//blog-comments-section-->
				
		    </div><!--//container-->
	    </article>
	    
	  
	   
    
    </div><!--//main-wrapper-->
    

    
@endsection