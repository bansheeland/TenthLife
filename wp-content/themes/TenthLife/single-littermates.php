<?php get_header(); ?>
<div class="top_right_paw">
        <svg width="100pt" height="100pt" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
 <g>
  <path d="m88.703 37.09c-1.9805-2.3594-4.5859-3.6602-7.3398-3.6602-2.5742 0-5.1641 1.0781-7.6953 3.1992-2.7031 2.2656-5.0664 5.5547-6.3281 8.793-1.4805 3.8086-1.3164 7.0781 0.46875 9.1992 1.3008 1.5508 3.375 2.3672 6 2.3672 4.1055 0 9.1055-1.9688 12.738-5.0156 2.707-2.2734 4.2891-4.918 4.5742-7.6445 0.26172-2.5391-0.57422-5.043-2.418-7.2383z"/>
  <path d="m57.027 43.277c0.65625 0.21875 1.3516 0.33203 2.0664 0.33203 5.6523 0 11.832-7.0586 14.055-13.652 1.25-3.6992 1.2227-7.0977-0.070313-9.8281-1.2031-2.5352-3.4219-4.4062-6.4141-5.418-1.2969-0.4375-2.5898-0.66016-3.8477-0.66016-4.8047 0-8.6484 3.2305-10.547 8.8594-2.6836 7.9531-1.2188 18.352 4.7578 20.367z"/>
  <path d="m26.195 56.992c2.625 0 4.6992-0.82031 6-2.3672 1.7812-2.125 1.9492-5.3906 0.46875-9.1992-1.2578-3.2383-3.625-6.5273-6.3281-8.793-2.5312-2.125-5.1211-3.1992-7.6953-3.1992-2.7539 0-5.3633 1.3008-7.3398 3.6562-1.8438 2.1992-2.6797 4.7031-2.4141 7.2422 0.28516 2.7305 1.8672 5.3711 4.5742 7.6445 3.6328 3.0469 8.6328 5.0156 12.738 5.0156h-0.003907z"/>
  <path d="m40.211 43.82c0.51172 0 1.0156-0.058593 1.5039-0.17969 2.9453-0.71484 5.2148-3.5039 6.3867-7.8477 1.0039-3.7266 1.0508-8.2188 0.125-12.027-1.5117-6.2188-5.4062-9.7812-10.695-9.7812-0.95703 0-1.9414 0.12109-2.9375 0.36328-3.0703 0.74609-5.4414 2.4219-6.8633 4.8398-1.5273 2.6055-1.8477 5.9883-0.92578 9.7852 1.7422 7.1719 7.5469 14.848 13.406 14.848z"/>
  <path d="m68.176 58.676c-2.2266-0.875-3.9258-2.5312-4.7852-4.6641-2.1914-5.4375-7.4453-8.9531-13.391-8.9531s-11.199 3.5117-13.391 8.9531c-0.85938 2.1328-2.5586 3.7891-4.7852 4.6641-5.5039 2.1641-9.0586 7.332-9.0586 13.168 0 7.8164 6.457 14.172 14.398 14.172 2.2969 0 4.582-0.54688 6.6094-1.5781 3.8633-1.9688 8.5898-1.9688 12.453 0 2.0273 1.0312 4.3125 1.5781 6.6094 1.5781 7.9375 0 14.398-6.3594 14.398-14.172 0-5.8359-3.5547-11-9.0586-13.168z"/>
 </g>
</svg>
    </div>
    
    <div class="container littermates_page">
		<div class="pd lmtop"></div>
			 
        <div class="row">
            <div class="col-sm-6">
                <div class="littermates_hero" style="background: url(<?php the_field( 'cat_name_copy' ); ?>)"></div>
                <h1><?php the_field( 'cat_name' ); ?></h1>
                <?php the_field( 'cat_bio' ); ?>
            </div>
            
            <div class="col-sm-6">
                <h2 class="orange">Donate to Gallifrey</h2>
                
                <div class="row">
                    <div class="col-md-6">
                        <label>Your name</label>
                        <input>
                    </div>
                    
                     <div class="col-md-6">
                        <label>Your name</label>
                        <input>
                    </div>
                    
                     <div class="col-md-12">
                        <label>Your address</label>
                        <input>
                    </div>
                    
                    <div class="col-md-6">
                        <label>City</label>
                        <input>
                    </div>
                    
                    <div class="col-md-3">
                        <label>State</label>
                        <input>
                    </div>
                    
                    <div class="col-md-3">
                        <label>Zip Code</label>
                        <input>
                    </div>
                    
                    <div class="col-md-6">
                        <label>Monthly donation amount</label>
                        <input placeholder="$">
                    </div>
                    
                    <div class="col-md-12">
                        <p class="label_copy">By signing, I agree to the charges listed above, every month, until I notify Tenth Life Cat Rescue in writing that I wish to cease my donation. Unless otherwise noted, I will be charged on the 1st day of every month. I also agree to be a part of the Litter Mates Club, by donating monthly, for a minimum of 12 months.</p>
                    </div>
                    
                    <div class="col-sm-12">
                        <div class="divide30"></div>
                        <button class="orange_bg big_btn">Submit donation</button>
                    </div>
                    
                </div>
            </div>
        </div>
		<div class="pd lmbottom"></div>
    </div>


    <div class="more_littermates_slideshow">
            <div class="carousel" data-flickity='{"contain": true }'>
                <div class="carousel-cell">
                    <div class="adopt_box">
                            <img src="/img/littermates/beauregard.jpg" alt="Albie Littermates cat donations">
                            <div class="adopt_box_info littemates br10 sh">
                                <h2>Beauregard</h2>
                                
                            </div>
                        </div>
                </div>
                <div class="carousel-cell">
                   <div class="adopt_box">
                            <img src="/img/littermates/Forte%20LM.jpg" alt="Albie Littermates cat donations">
                            <div class="adopt_box_info littemates br10 sh">
                                <h2>Forte</h2>
                                
                            </div>
                        </div>
                </div>
                <div class="carousel-cell">
                    <div class="adopt_box">
                            <img src="/img/littermates/Forte%20LM.jpg" alt="Albie Littermates cat donations">
                            <div class="adopt_box_info littemates br10 sh">
                                <h2>Forte</h2>
                                
                            </div>
                        </div>
                </div>
                <div class="carousel-cell">
                    <div class="adopt_box">
                            <img src="/img/littermates/Forte%20LM.jpg" alt="Albie Littermates cat donations">
                            <div class="adopt_box_info littemates br10 sh">
                                <h2>Forte</h2>
                                
                            </div>
                        </div>
                </div>
                <div class="carousel-cell">
                    <div class="adopt_box">
                            <img src="/img/littermates/Forte%20LM.jpg" alt="Albie Littermates cat donations">
                            <div class="adopt_box_info littemates br10 sh">
                                <h2>Forte</h2>
                                
                            </div>
                        </div>
                </div>
            </div>
        </div>

    



    <div class="pd"></div>
<?php get_footer(); ?>

