<?php 
	 include_once('db/connect.php');
	 include('inc/topbar.php');
	 include('inc/menu.php');
?> 
  <div class="row">
  <div name ="left" id="left" class="col-2 text-center ml-3" >
	  
	  			<a target="_blank" href="https://genshin.mihoyo.com/en/download">
					<img class="w-100 h-auto mt-xl-2 rounded" src="images/Ad-0.jpg" alt=""></a>
				<a target="_blank" href="https://genshin.mihoyo.com/en/character/mondstadt?char=8">
					<img class=" w-100 h-auto mt-xl-5 rounded" src="images/Ad-1.jpg" alt=""></a>
				<a target="_blank" href="https://genshin.mihoyo.com/en/character/mondstadt?char=17">
					<img class="w-100 h-auto mt-xl-5 rounded" src="images/Ad-2.png" alt=""></a>
		  		<a target="_blank" href="https://genshin.mihoyo.com/en/character/mondstadt?char=11">
					<img class="w-100 h-auto mt-xl-5 rounded" src="images/Ad-3.jpg" alt=""></a>
		  		<a target="_blank" href="https://genshin.mihoyo.com/en/character/mondstadt?char=14">
					<img class="w-100 h-auto mt-xl-5 rounded" src="images/Ad-4.png" alt=""></a>
			
			
			
			
			
	  </div>
	  
  <div name = "content" class="col-9 ">
		<div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
           
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
     
    </div>
    <hr>
  
	<div class="container">
		<div class="carrer-opp">
		<h1>Career Opportunities</h1> <br>
        <p><img src="images/img-carrer.jpg" width="1050" height="600"></p>
        <h2> FAQs</h2>
		<p>Got a questions? We've got the answer.</p>

		<div id="faq-form">
		<details open>
         <summary>
			 How to apply for a job?
		 </summary>
		 <div class="answer-question">
			Easy! You can submit your information through our form online or interview in-person.
		 </div>
		</details>
		
		<details open> 
			<summary>
				What's the best way to apply?
			</summary>
			<div class="answer-question"> 
				Just conduct your search, then complete your profile to apply. Again, we encourage you to complete your profile, 
				as it will be accessible to our recruiting team.
			</div>
		</details>
		<details>
			<summary>
				How should I prepare prior to submitting my profile?
			</summary>
			<div class="answer-question">
				Take a moment to review your resume and cover letter. Our recruiters will review your 
				information to ensure a match with these requirements.

			</div>
	    </details>
        <details>
			<summary>
				After I submit my profile for a specific opportunity, will I be considered for other openings?
			</summary>
			<div class="answer-question">
				Yes, as long as you select the box "Accept invitations by email on career opportunities matching this profile.
			</div>
		</details>
		<details>
			<summary>
				What happens after I apply?
			</summary>
			<div class="answer-question">
				If you qualify, they will forward your profile to the respective hiring manager, and contact you  accordingly.Later,
				you can work in Holoshop.
			</div>
		</details>
	    </div>


	</div>
	</div>

	<?php 
	   include('inc/footer.php'); 
    ?>

    <footer class="text-center">
		
      <div class="container">
        <div class="row">
          <div class="col-12">
			<p style="position: absolute; margin-left: 400px;">Copyright © HOLOSHOP. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.3.1.js"></script>
  </body>
</html>
