@extends('layout')

@section('resume-content')

	<div class="title-box">
		<div class="page-title"><span class="bar-line">|</span> Things I Do <span class="bar-line">|</span></div>
	</div>

	<div class="container-fluid">
		<div class="row-fluid">

			<!--  Nav Bar -->
			<div class="navbar affix-top resume-nav" data-spy="affix" data-offset-top="300">
				<div class="navbar-inner">
					<div class="span12">
				        <ul class="inline">
					        <li class=""><a href="#education"> 
					        	<span class="bar-line">|</span> 
					        	Education </a>
					        	<span class="bar-line">|</span> </li>
					        <li class=""><a href="#research"> Research</a>
					        	<span class="bar-line">|</span>	
					        </li>
					        <li class=""><a href="#develop"> Develop</a>
					        	<span class="bar-line">|</span>
					        </li>
					        <li class=""><a href="#teach"> Teach</a>
					        	<span class="bar-line">|</span>
					        </li>
					        <li class=""><a href="#skills"> Skills</a>
					        	<span class="bar-line">|</span>
					        </li>
					        <li class=""><a href="#downloads"> Download </a>
					        	<span class="bar-line"> |</span></li>
					        </ul>
			      	</div>
	      		</div>
	      	</div>

	      	<!-- Content -->
			<div class="span8 offset2">

				<!-- Education -->
				<div id="education"></div>
				<div class="resume-content-box"> 
					<div class="resume-title-container">
						<div class="resume-section-title"> Education </div>
					</div>

					<div class="resume-subject-title"> Rutgers University 
						<span class="bar-line">||</span> 
						Sept, 2009 - May, 2013
					</div>
					<div>
						<p>
							<em>Bachelor of Arts: </em> <span class="underline">Classics</span> 
								w/ minors in 
								<span class="underline">History</span> and 
								<span class="underline">Political Science.</span>
							<span class="bar-line">||</span> 
							<em>GPA:</em> 3.919 	
						</p>
					</div> 
					<div class="resume-subtitle"> Honors </div>
					<ul>
						<li>School of Arts and Sciences Honors Scholar</li>
						<li>Greek and Latin Honors Scholar</li>
						<li>Paul Robeson Scholar</li>
						<li>Henry Rutgers Scholars Award</li>
						<li>Outstanding Achievement in Undergraduate Research Award, 2012</li>
						<li>Rutgers University Academic Excellence Award, 2011</li>
					</ul>	
				<p class="revision-date">Last Revised: June, 2013</p>
				</div>

				<!-- Research -->
				<div id="research"></div>
				<div class="resume-content-box"> 
					<div class="resume-title-container">
						<div class="resume-section-title"> Research </div>
					</div>

					<!-- Thesis -->
					<div class="resume-item">
						<div class="resume-subject-title"> Classics Honors Thesis 
							<span class="bar-line">||</span> 
							May, 2012 - May, 2013
						</div>

						<div class="accordion" id="accordion1">
							<div class="accordion-group">
								<a href="#collapseOne" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1">
									<p class="see-more"> See More // Hide </p>
								</a>
							</div>
							<div id="collapseOne" class="accordion-body collapse">
								<div class="accordion-inner">
									<p class='description'> My thesis, "Morality and Realpolitik in the Athenian Speech 
										at the Peloponnesian Congress in Thucydides’ History of the Peloponnesian War"
										explored the aforementioned  speech so as to discover whether we can consider the 
										Athenians position as consistent with traditional Greek normative imperatives or 
										following along with more novel amoral, power-political ones.
									</p>
									<ul>
										<li> Highest Honors </li>
										<li>
											<a href="http://sasundergrad.rutgers.edu/academics/additional-academic-programs/thesis-programs">Henry Rutgers Award</a>
										</li>
										<li> Working closely with Ancient Greek texts in Greek and translation. </li>
										<li> Working closely with historical and linguistic commentary</li>
										<li> Working closely with an Advisor, 
											<a href="http://classics.rutgers.edu/people/81-thomas-figueira">Prof. Thomas Figueira</a>
										</li>
										<li> Working with Greek language, politics, culture, warfare and diplomacy, philosophy, ethics, etc.</li>
										<li> Presented in 54 pg paper with oral defense</li>
									</ul>
								</div>
							</div>			
						</div>	
					</div>

					<!-- RA -->
					<div class="resume-item">
						<div class="resume-subject-title"> Political Science Research Assistant
							<span class="bar-line">||</span> 
							Sept, 2012 - May, 2013
						</div>

						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<a href="#collapseTwo" class="accordion-toggle" data-toggle="collapse" data-parent="#accordiopn2">
									<p class="see-more"> See More // Hide </p>
								</a>
							</div>
							<div id="collapseTwo" class="accordion-body collapse">
								<div class="accordion-inner">
									<p class="description"> As an RA working for Prof. Bert Levine on 
										Campaign Finance Law, in particular on campaign contributions 
										I was tasked with discovering and sifting through 
										relevant and useful data that would contribute to his research. 
									</p>
									<ul>
										<li>"On Call" year around</li>
										<li>Seeking out substantive sources</li>
										<li>
											Working closely with academic studies, court opinions, congressional materials,  
											relevant legal policy, financial documents, and other appropriate data
										</li>
										<li>Presenting data in a digested form to faculty member</li>
										<li>Minor advising faculty member on arguments and opinions</li>
									</ul>
								</div>
							</div>			
						</div>
					</div>		

					<!-- Ind. Study -->
					<div class="resume-item">
						<div class="resume-subject-title"> Independent Study: Campaign Finance Jurisprudence
							<span class="bar-line">||</span> 
							Nov, 2011 - May, 2012
						</div>
							
						<div class="accordion" id="accordion4">
							<div class="accordion-group">
								<a href="#collapseThree" class="accordion-toggle" data-toggle="collapse" data-parent="#accordiopn4">
									<p class="see-more"> See More // Hide </p>
								</a>
							</div>
							<div id="collapseThree" class="accordion-body collapse">
								<div class="accordion-inner">
									<p class="description">A thesis style project I undertook in the Poli Sci department
										under Prof. Bert Levine. My paper revolved around <em>Buckley v. Valeo</em> 424 U.S. 1 (1976) 
										and uses the standard with which the Supreme Court struck down FECA's independent expenditure limitation
										to argue that, today, such a limitation might be defensible given contemporary evidence.     
									</p>
									<ul>
										<li>Outstanding Achievement in Undergraduate Research Award</li>
										<li>Working closely with primary documents, including Supreme Court opinions and US Civil Code</li>
										<li>Gathering and understanding relevant data and scholarly commentary</li>
										<li>Presenting gathered data in a 102 pg research paper</li>
										<li>Presenting paper at Undergraduate Research Symposium</li>
									</ul>
								</div>
							</div>			
						</div>
					</div>
				<p class="revision-date">Last Revised: June, 2013</p>
				</div>

				<!-- Developer -->
				<div id="develop"></div>
				<div class="resume-content-box"> 
					<div class="resume-title-container">
						<div class="resume-section-title"> Develop </div>
					</div>
						
					<!-- Devio -->
					<div class="resume-item">
						<div class="resume-subject-title"> Develop.io
							<span class="bar-line">||</span> 
							April, 2013 - July, 2013
						</div>
						<div class="resume-subtitle"> Intern Web Developer</div>

						<div class="accordion" id="accordion3">
							<div class="accordion-group">
								<a href="#collapseFour" class="accordion-toggle" data-toggle="collapse" data-parent="#accordiopn3">
									<p class="see-more"> See More // Hide </p>
								</a>
							</div>
							<div id="collapseFour" class="accordion-body collapse">
								<div class="accordion-inner">
									<p class="description"> I applied to develop.io under the pretence that I was 
										still a noob programmer who wanted to learn and be around people who would be able
										to help me do just that. I was fortunate to be allowed to be around and get hands on 
										experience.
									</p>
									<ul>
										<li>Primarily front end focused</li>
										<ul>
											<li> html, css, JavaScript, jQurey, Foundation Framework, Bootstrap Framework, 
												some WordPress experience. 
											 </li>
										</ul>
										<li>CodeIgniter Framwork</li>
										<li>Assisting co-workers with any issues and instructing when able</li>
									</ul>
								</div>
							</div>			
						</div>
					</div>

					<!-- This! -->
					<div class="resume-item">
						<div class="resume-subject-title"> Bhamdeo.com
							<span class="bar-line">||</span> 
							June, 2013
						</div>

						<div class="accordion" id="accordion4">
							<div class="accordion-group">
								<a href="#collapseFive" class="accordion-toggle" data-toggle="collapse" data-parent="#accordiopn4">
									<p class="see-more"> See More // Hide </p>
								</a>
							</div>
							<div id="collapseFive" class="accordion-body collapse">
								<div class="accordion-inner">
									<p class="description"> This whole site the the description! I hacked this site together for 
									two reasons, I: to get familiar with Laravel 4, and II: because my old site was a mediocre
									wordpress blog, which was not well suited to be a real site. If you want to know a lot 
									more about this swagtastically average site, 
									<a href="/about-this-site">click here</a> 
									to check out the "about this site" page; this 
									except is a little more succinct.
									</p>
									<ul>
										<li> Development and maintenance, with some help from <a href="/about-this-site"> friends :)</a>.</li>
										<li>html, css, Bootstrap, Laravel 4, jQuerey/JavaScript</li>
									</ul>
								</div>
							</div>			
						</div>
					</div>
				<p class="revision-date">Last Revised: June, 2013</p>
				</div>

				<!-- Teach -->
				<div id="teach"></div>
				<div class="resume-content-box"> 
					<div class="resume-title-container">
						<div class="resume-section-title"> Teach </div>
					</div>

					<!-- Fair Lawn -->
					<div class="resume-item">
						<div class="resume-subject-title"> Fair Lawn High School Music Program
							<span class="bar-line">||</span> 
							May, 2010 - Nov, 2012
						</div>
						<div class="resume-subtitle"> Battery Percussion Technician</div>


						<div class="accordion" id="accordion5">
							<div class="accordion-group">
								<a href="#collapseSix" class="accordion-toggle" data-toggle="collapse" data-parent="#accordiopn5">
									<p class="see-more"> See More // Hide </p>
								</a>
							</div>
							<div id="collapseSix" class="accordion-body collapse">
								<div class="accordion-inner">
									<p class="description"> The "Battery" is fancy way of saying drumline.
										Battery "Tech" is a fancy way of saying music teacher. 
										Having spent much of time High School experiance involved in music activities, 
										it made sense for me to only only return and help teach, but to return to Fair Lawn
										where I went, myself. 
									</p>	
									<ul>
										<li>Instructed 2 Ensembles to have won USSBA National Best Percussion Titles</li>
										<li>Teaching the drumline playing and marching technique</li>
										<li>Critiquing musical and marching performance</li>
										<li>Organizing and leading rehearsals individually and with fellow staff</li>
										<li>Minor editing of and/or writing musical parts</li>
									</ul>
								</div>
							</div>			
						</div>
					</div>

					<!-- Bloomfield -->
					<div class="resume-item">
						<div class="resume-subject-title"> Bloomfield High School Music Program
							<span class="bar-line">||</span> 
							Jan, 2012 - March, 2013
						</div>
						<div class="resume-subtitle"> Battery Percussion Technician</div>

						<div class="accordion" id="accordion6">
							<div class="accordion-group">
								<a href="#collapseSeven" class="accordion-toggle" data-toggle="collapse" data-parent="#accordiopn6">
									<p class="see-more"> See More // Hide </p>
								</a>
							</div>
							<div id="collapseSeven" class="accordion-body collapse">
								<div class="accordion-inner">
									<p class="description"> One of the things about the marching percussion world is
										that people tend to move around from place to place based on connections made 
										with people you've worked with. Thus, when a friend of mine asked if I would help out 
										at his program, I decided to show up for a day or two. I liked the kids and the atmosphere so much, 
										though, that I stayed for a little while longer. 
									</p>
									<ul>
										<li>Teaching the drumline playing and marching technique</li>
										<li>Critiquing musical and marching performance</li>
										<li>Organizing and leading rehearsals individually and with fellow staff</li>
										<li>Minor editing of and/or writing musical parts</li>
									</ul>
								</div>
							</div>			
						</div>
					</div>
				<p class="revision-date">Last Revised: June, 2013</p>
				</div>

				<!-- Skills -->
				<div id="skills"></div>
				<div class="resume-content-box"> 
					<div class="resume-title-container">
						<div class="resume-section-title"> Skills* </div>
					</div>

					<div id="skills-and-downloads-content">
						<p>* More rather, a note on skills. It is typical for every resume to have a "skills" section
							where one puts those things that he/she finds makes them a good employee, candidate, 
							<em> et cetera. </em></p>
						<p class="text-center"> I hate these sections.</p> 
						<p>I find that they tend to be bland, uninventive and, frankly, fail to capture qualities that 
							I would look for in somebody I would like to work with. </p>
						<p>Don't get me wrong, I too would want to look for smart, talented people, but being good 
						at something (hell, even being <em>great</em> at something) does not impress me.</p>
						<p>There are countless people who are good at things. But the people who are good at things, 
						pursue knowledge, and seek to understand diversity, these are the people I want to be with.</p>
						<p class="text-center">And so, I'll say this about myself...</p>
						<p>Not that I'm smart or a hard-worker; on the contrary, I think there are smarter people and harder workers.</p>
						<p class="text-center">Rather, that I have 3 choice skills:
							<ol>
								<li>I am willing and want to learn</li>
								<li>I try to be as unassuming as possible, for assuming leads blindness, and blindness is ignorance</li>
								<li>Above all, and at the end of the day, I love people and want to work with cools ones</li>
							</ol>	
						</p>
						<p class="text-center"> :) </p>
					</div>
				<p class="revision-date">Last Revised: June, 2013</p>
				</div>


				<!-- Downloads -->
				<div id="downloads"></div>
				<div class="resume-content-box"> 
					<div class="resume-title-container">
						<div class="resume-section-title"> Downloads </div>
					</div>

					<div id="skills-and-downloads-content">

						<p> <span style="color: red;">Note! Not working yet, sorry D:</span></p>
						
						<p> You can download a full copy of my long form resume (as presented here) by 
							<a href=""> clicking here</a>
						</p>
						<p> You can find a shorter version with interests included, here, in both 
							<a href=""> .pdf</a> 
							and
							<a href=""> .doc</a>
						</p>
					</div>
					<p class="revision-date">Last Revised: June, 2013</p>
				</div>

			</div>
		</div>
	</div>

@stop