<?php 
/*
Template Name: Front Page
*/
get_header(); ?>
<?php $uploads = wp_upload_dir(); ?>
	<div class="section main">
		<div class="container">
			<div class="content">
				<h1>Jack Doyle</h1>
				<p>Full-Stack Developer</p>
				<div class="underline"></div>
				<p>I am a <strong><span class="typing"></span></strong></p>				
			</div>
		</div>
	</div>

	<div class="section profile" id="profile">
		<div class="container">
			<div class="heading">
				<h2>Profile</h2>
				<div class="underline"></div>
			</div>
			<div class="content">
				<div class="row">
					<div class="col-sm-4 about">
						<h4>About Me</h4>
						<div class="underline"></div>
						<p>I'm a full-stack developer, with a specialization in WordPress development. Most of my experience is tied to front-end technologies, plus PHP. I love learning new things, and pushing my limits every day. My favorite part about Web Development is the ability to use creative problem solving. I love solving problems and attempting to make peoples lives better through my work. Happily married to an amazing woman.</p>
					</div>
					<div class="col-sm-4 profile-img">
						<img src="<?php echo $uploads['url']; ?>/jack.jpg">
					</div>
					<div class="col-sm-4">
						<h4>Details</h4>
						<div class="underline"></div>
						<ul>
							<li>Name: <span>Jack Doyle</span></li>
							<li>Age: <span>22 Years</span></li>
							<li>Location: <span>Buffalo, NY</span></li>
							<li>Currently Learning: <span>MEAN Stack</span></li>
							<li><a href="https://twitter.com/OdoyleRules13"><i class="fa fa-twitter fa-2x"></i></a><a href="https://github.com/Jdoyle112"><i class="fa fa-github fa-2x"></i></a><a href="https://www.linkedin.com/in/jack-doyle-a9b7476a"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section projects" id="projects">
		<div class="container">
			<div class="heading">
				<h2>Projects</h2>
				<p>"There are no secrets to success. It is the result of preparation, hard work, and learning from failure."</p>
				<span>- Colin Powell</span>
				<div class="underline"></div>
			</div>
			<div class="content">
				<div class="item-content">
					<div class="row">
						<div class="col-md-6 col-lg-4 image"></div>
						<div class="col-md-6 col-lg-8 text">
							<h2></h2><span class="glyphicon glyphicon-remove" style="font-family: Glyphicons Halflings !important"></span>
							<p></p>
						</div>
					</div>
				</div> 
				<div class="row">
					<div class="project">
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
					    <div class="item">
						        <img width="100%" height="300" src="<?php echo $uploads['url']; ?>/edush.png" alt="my image" title="my image" />
						        <div class="caption" style="display: none;">
						            <h2>Education Super Highway</h2>
						            <div class="underline"></div>
									<a href="http://www.educationsuperhighway.org/" style="display: hidden">View Site</a>
						            <p>EducationSuperHighway is the leading non-profit focused on upgrading the Internet access in every public school classroom in America. I was responsible for creating various custom features added to their existing WordPress site.</p>		            
						        </div>
					    </div>
					</div>   

					</div>  
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4"> 
					    <div class="item">
					    	
						        <img width="100%" height="300" src="<?php echo $uploads['url']; ?>/kentik.png" alt="my image" title="my image" />
						        <div class="caption" style="display: none;">
						            <h2>Kentik</h2>
						            <div class="underline"></div>
									<a href="https://www.kentik.com/" style="display: hidden">View Site</a>
						            <p>Kentik is a big data-based SaaS company that turns network data into valuable intelligence. Kentik required various custom features added to their existing WordPress site.</p>
						        </div>
					    </div>  
					</div>       
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">       
					    <div class="item">

						        <img width="100%" height="300" src="<?php echo $uploads['url']; ?>/fluffy.png" alt="my image" title="my image" />
						        <div class="caption" style="display: none;">
						            <h2>B17 Entertainment</h2>
						            <div class="underline"></div>
									<a href="http://b17entertainment.com/" style="display: hidden">View Site</a>
									<p>B17 is an entertainment is a production company offering a variety of content across different networks. They are responsible for producing shows such as Fluffy Breaks Even, and Broke A$$ Game Show. <br>
									I was responsible for designing and implementing various new features to their existing WordPress site, including making the site responsive.</p>
						        </div>
						    
					    </div>  
					</div>      

					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
					    <div class="item">

						        <img width="100%" height="300" src="<?php echo $uploads['url']; ?>/sentient.png" alt="my image" title="my image" />
						        <div class="caption" style="display: none;">
						            <h2>Sentient</h2>
						            <div class="underline"></div>
									<a href="http://www.sentient.ai/" style="display: hidden">View Site</a>
						            <p>Sentient is a company offering cutting edge artificial intelligence solutions to help solve some of the worlds most complex problems. I was responsible for creating various custom features added to their existing site.</p>		            
						        </div>
					
					    </div>
					</div>      
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4"> 
					    <div class="item">
		
						        <img width="100%" height="300" src="<?php echo $uploads['url']; ?>/bok.png" alt="my image" title="my image" />
						        <div class="caption" style="display: none;">
						            <h2>Bokhandelen</h2>
						            <div class="underline"></div>
									<a href="https://gobokhandelen.no/" style="display: hidden">View Site</a>
						            <p>Bokhandelen is the largest Norweigen E-Commerce book site. I was responsible for implementing various features to their existing site such as infinite scrolling, jQuery nav abr effects, improving site speed, custom post queries, and more.</p>
						        </div>
						    
					    </div>  
					</div>       
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">       
					    <div class="item">
		
						        <img width="100%" height="300" src="<?php echo $uploads['url']; ?>/sigma.png" alt="my image" title="my image" />
						        <div class="caption" style="display: none;">
						            <h2>SigmaKappa Challenge</h2>
						            <div class="underline"></div>
									<a href="http://sigmakappa.org/" style="display: hidden">View Site</a>
									<p>SigmaKappa Challenge is a distirct wide competition amongst the SigmaKappa sorority. The District Challenge supports the PULSE fund, which provides funds for leadership development, programming, grants, scholarships and more. <br>
									I was responsible for developing a landing page for the challenge, as well as back-end functionality to track the district donation totals and rank them accordingly. This project involved various WordPress functions, custom post types, database queries,custom fields, and front-end changes.</p>
						        </div>
						     
					    </div>  
					</div>      

					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
					    <div class="item">

						        <img width="100%" height="300" src="<?php echo $uploads['url']; ?>/nuart.png" alt="my image" title="my image" />
						        <div class="caption" style="display: none;">
						            <h2>Nuart Gallery</h2>
						            <div class="underline"></div>
									<a href="https://nuartgallery.no/" style="display: hidden">View Site</a>
						            <p>Nuart Gallery is one of Norways leading E-Commerce sites offering customers a change to buy unique artwork. I was responsible for implementing infinite scrolling, creating custom woocommerce category pages for artists, improving site speed, and various other front-end tasks.</p>		            
						        </div>
					        
					    </div>
					</div>      
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4"> 
					    <div class="item">

						        <img width="100%" height="300" src="<?php echo $uploads['url']; ?>/americharter.png" alt="my image" title="my image" />
						        <div class="caption" style="display: none;">
						            <h2>Americharter</h2>
						            <div class="underline"></div>
									<a href="http://americharter.com/" style="display: hidden">View Site</a>
						            <p>Americharter is a luxury travel company offering products such as private jets, high end mansions, and top of the line busses for rent. I was responsible for implementing a complete site redesign. On top of plenty of front-end changes, this project also required the use of multiple sub folders where individual WordPress installs were stored on.</p>
						        </div>
						       
					    </div>  
					</div>       
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">       
					    <div class="item">

						        <img width="100%" height="300" src="<?php echo $uploads['url']; ?>/simapp.png" alt="my image" title="my image" />
						        <div class="caption" style="display: none;">
						            <h2>NFL Sim App</h2>
						            <div class="underline"></div>
									<a href="https://github.com/Jdoyle112/NFL_simApp/tree/master/NFL_simApp" style="display: hidden">View Site</a>
									<p>The NFL Simulation App is a web app built entirely in PHP using mySQL as a database. It is a fantasy football type game offering users a more realistic NFL GM experience. At the core of the game is the simulation software which simulates games based on player ratings, with a degree of chance. It encorporates functionalities such as user authorization, advanced database integration across many tables for statistical tracking, PHP objects, complex formulas, and much more.</p>
						        </div>
						   
					    </div>  
					</div>      

					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
					    <div class="item">
						        <img width="100%" height="300" src="<?php echo $uploads['url']; ?>/wpcompare.png" alt="my image" title="my image" />
						        <div class="caption" style="display: none;">
						            <h2>WordPress Compare Plugin</h2>
						            <div class="underline"></div>
									<a href="https://wordpress.org/plugins/wp-compare/" style="display: hidden">View Site</a>
						            <p>The WP Compare plugin is a robust plugin to handle comparing certain custom post types by the front end users. When the plugin is activated, a custom post type is generated where the admin can create the posts which will be displayed. A sidebar is displayed on each post providing the front-end users an option to compare selected posts on an archive page.</p>		            
						        </div>
					        
					    </div>
					</div>      
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4"> 
					    <div class="item">
						        <img width="100%" height="300" src="<?php echo $uploads['url']; ?>/fungames.png" alt="my image" title="my image" />
						        <div class="caption" style="display: none;">
						            <h2>Fun Ninja Games</h2>
						            <div class="underline"></div>
									<a href="https://github.com/Jdoyle112/Fun_Ninja_Games" style="display: hidden">View Site</a>
						            <p>Fun Ninja Games is a package of games developed for the youth ministry brand Stuff You Can Use. The games include variations of Family Feud, a polling app, a timer with various functionality, and a random word & number generator.<br>
									The games are built using a combination of PHP and JavaScript + jQuery with mySQL database integration. Some of the functionality includes user authentication, JavaScript integration w/ PHP, advanced JavaScript functions, and more.</p>
						        </div>
						    
					    </div>  
					</div>       
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">       
					    <div class="item">
						        <img width="100%" height="300" src="<?php echo $uploads['url']; ?>/stock.png" alt="my image" title="my image" />
						        <div class="caption" style="display: none;">
						            <h2>Stock Scrapper Tool</h2>
						            <div class="underline"></div>
									<a href="https://github.com/Jdoyle112/stock_scrape" style="display: hidden">View Site</a>
										<p>The stock scrapper tool is a project born from a hypothesis. I assumed with the rise of online brokers, there are more amateur investors than ever, who may be blindly listening to the "experts" stock picks.
											I built a tool in PHP to take a user inputted url (an archive page of blog posts), loop through all the posts in the archives, grab the stock tickers from each page, and store them in a database with the date published. I then took the data and analyzed the % increase in price on average for various amounts of time past the published date for each article.</p>
						        </div>
						    
					    </div>  
					</div>      
				</div>											

			</div>
		</div>
	</div>

	<div class="section abilities" id="skills">
		<div class="container">
			<div class="heading">
				<h2>Abilities</h2>
				<p>"Competition gives me energy. It keeps me focused."</p>
				<span>- Conner McGregor</span>
				<div class="underline"></div>
			</div>
			<div class="content">
				<div class="module">
					<h4>Languages</h4>
					<div class="underline"></div>
					<div class="row">
						<div class="col-md-6">
							<ul class="skill">
								<li>
									<span class="title">HTML</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
								<li>
									<span class="title">CSS</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
								<li>
									<span class="title">PHP</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
								<li>
									<span class="title">SQL</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
								<li>
									<span class="title">Python</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
								<li>
									<span class="title">Django</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>								
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="skill">
								<li>
									<span class="title">Angular 2</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
								<li>
									<span class="title">Node JS</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
								<li>
									<span class="title">Java</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
								<li>
									<span class="title">SASS</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
								<li>
									<span class="title">JavaScript / jQuery</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
								<li>
									<span class="title">Ruby</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>								
							</ul>
						</div>
					</div>			
				</div>

				<div class="module">
					<h4>Tools</h4>
					<div class="underline"></div>
					<div class="row">
						<div class="col-md-6">
							<ul class="skill">
								<li>
									<span class="title">Git</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
								<li>
									<span class="title">Command Line</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
								<li>
									<span class="title">WordPress</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
									</span>
								</li>
								<li>
									<span class="title">Bootstrap</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
									</span>
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="skill">
								<li>
									<span class="title">Laravel</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
								<li>
									<span class="title">Grunt/ Gulp</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
									</span>
								</li>
								<li>
									<span class="title">Vagrant</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
								<li>
									<span class="title">MAMP</span>
									<span class="icons">
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star active"></i>
										<i class="fa fa-star"></i>
									</span>
								</li>
							</ul>
						</div>
					</div>			
				</div>

			</div>
		</div>
	</div>	

	<div class="section experience" id="experience">
		<div class="container">
			<div class="heading">
				<h2>Experience</h2>
				<p>"Experience is simply the name we give our mistakes."</p>
				<span>- Oscar Wilde</span>
				<div class="underline"></div>
			</div>
			<div class="content">
				<div class="row module">
					<div class="col-sm-4 meta">
						<h4>Codecademy</h4>
						<p>Jan 2016 - Present</p>
					</div>
					<div class="col-sm-8 info">
						<h6>Student Advisor</h6>
						<p>Codecademy is one of the leading online learning platforms for Web Development skills. I am currently working as a student mentor, responsible for not only breaking down abstract concepts to help learners understand programming, but also to teach them the necessary learning skills that go beyond code such as the ability to think and operate efficiently as a developer. I am typically responsible for teaching HTML&CSS, JavaScript, jQuery, AngularJS, PHP, Python, SQL, Git, SASS, and Java. My passion for programming helps make me a successful student mentor.</p>
					</div>
				</div>
				<div class="row module">
					<div class="col-sm-4 meta">
						<h4>Red Bridge Net</h4>
						<p>Mar 2016 - Present</p>
					</div>
					<div class="col-sm-8 info">
						<h6>WordPress Developer</h6>
						<p>Red Bridge Net is a WordPress agency based out of San Francisco. I am currently working as a PT WordPress developer. Daily responsibilities include building custom WordPress solutions for clients, fixing bugs, turning designs into functional sites/ pages, handling database updates, and implementing front-end solutions. Development is handled in a local environment, and migrated to staging, and production sites.</p>
					</div>					
				</div>
				<div class="row module">
					<div class="col-sm-4 meta">
						<h4>The Look and Feel</h4>
						<p>Mar 2016 - Present</p>
					</div>
					<div class="col-sm-8 info">
						<h6>Jr. WordPress Developer</h6>
						<p>The Look and Feel is a WordPress agency based out of Norway, with a focus on E-Commerce customers. I am currently working as a PT Jr. WordPress developer. Daily responsibilities include everything listed above, with the addition of working with WooCommerce child themes, as well as support for one of the companies plugins.</p>
					</div>						
				</div>
			</div>
		</div>
	</div>	

	<div class="section recent-posts">
		<div class="container">
			<div class="heading">
				<h2>Recent Posts</h2>
				<p>"One day I will find the right words, and they will be simple."</p>
				<span>- Jack Kerouac</span>
			</div>
			<div class="content">
				<div class="row">
					<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<div class="post col-md-4 col-sm-6">
						<img src="<?php the_post_thumbnail_url(); ?>" width="100%" height="200px">
						<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
						<p><?php the_excerpt(__('(more…)')); ?></p>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>	
				<a href="/blog" class="view-blog">View Blog</a>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>