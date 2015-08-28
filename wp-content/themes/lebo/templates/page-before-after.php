<?php
/*
Template Name: Before After Gallery
*/
?>

<?php get_header(); ?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="sub-page proc-vid">
  <section>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-8 clearfix" role="main">

              <h1 id="no-head-h1"><?php the_title(); ?></h1>
              <h2><a href="#" class="flipper">Choose a Service <i class="fa fa-caret-down"></i></a></h2>
            <div class="flipcon">
              <div class="flipped" style="display:none;">

                   <div class="column four">
                   <a href="#botox" class="scroll">BOTOX<sup>®</sup> Cosmetic</a>
                   <a href="#core" class="scroll">CO2RE<sup>™</sup> Laser</a>
                   <a href="#chemical" class="scroll">Chemical Peels</a>
                   <a href="#coolsculpting" class="scroll">CoolSculpting<sup>®</sup></a>
                    <a href="#fillers" class="scroll">Cosmetic Fillers</a>
                   <a href="#dermapen" class="scroll">Dermapen<sup>®</sup></a>

                   </div>

                    <div class="column four">
                    <a href="#tinting" class="btn2 scroll">Eyelash Tinting</a>
                    <a href="#isolaz" class="btn2 scroll">Isolaz<sup>™</sup></a>
                    <a href="#waxing" class="btn2 scroll">Laser Hair Removal</a>
                    <a href="#latisse" class="btn2 scroll">Latisse<sup>®</sup></a>
                    <a href="#vein" class="btn2 scroll">Leg Vein Therapy</a>
                    <a href="#microdermabrasion" class="btn2 scroll">Microdermabrasion</a>

                   </div>

                    <div class="column four">
                    <a href="#makeup" class="btn2 scroll">Permanent Makeup</a>
                   <a href="#photorejuvenation" class="btn2 scroll">Photorejuvenation</a>
                    <a href="#revitalization" class="btn2 scroll">PicoSure<sup>™</sup> Skin Revitalization</a>
                    <a href="#smartlipo" class="btn2 scroll">Smartlipo<sup>®</sup></a>
                    <a href="#tattoo" class="btn2 scroll">Tattoo Removal</a>
                    <a href="#velaShape" class="btn2 scroll">VelaShape<sup>™</sup></a>
                   </div>
              </div>
            </div>

            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              
            
              <section class="page-content entry-content clearfix" itemprop="articleBody">

<div class="q-con">
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
          <a href="" id="botox"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 3457); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>BOTOX<sup>®</sup> Cosmetic</h3>
                        <p>These are purified proteins administered in a simple injection that temporarily improves the appearance of moderate to severe lines and wrinkles in the face and neck by relaxing the muscles that cause movement.</p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="core"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 210); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>CO2RE<sup>™</sup> Laser</h3>
                        <p>CO2RE<sup>™</sup> Laser produces dramatic results by working both on the surface and deeper layers of the skin. CO2RE<sup>™</sup> Laser treats acne scarring, age spots, wrinkles and sun damage.</p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="chemical"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 237); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>Chemical Peels</h3>
                        <p>Improve the texture and tone of your skin with a chemical peel. Chemical peels can reduce acne scars, brown spots and fine lines.</p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
          <a href="" id="coolsculpting"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 194); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>CoolSculpting<sup>®</sup></h3>
                        <p>CoolSculpting<sup>®</sup> is a non-invasive procedure that helps the body remove fat from trouble areas like love handles, flanks and bra lines. See the difference a few inches makes!</p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->


<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="fillers"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 140); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>Cosmetic Fillers</h3>
                        <p>For instant results, consider cosmetic fillers as part of your anti-aging regime. Cosmetic fillers can transform your lips, cheeks, forehead and other areas.</p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="dermapen"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 70); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>Dermapen<sup>®</sup></h3>
                        <p>Rejuvenate your skin with the latest in microneedling technology. Dermapen<sup>®</sup> is safe for any skin type and effectively reduces surgical and acne scars, fine lines and wrinkles, and stretch marks. </p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="tinting"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 229); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>Eyelash Tinting</h3>
                        <p>For a longer lasting and more reliable look than mascara, choose eyelash tinting. Make your lashes look luxurious every day with eyelash tinting.</p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="isolaz"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 233); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>Isolaz<sup>™</sup></h3>
                        <p>Isolaz<sup>™</sup> treats the skin with broadband light and a vacuum to reduce the amount of oil produced by the oil glands, effectively treating acne, brown spots and redness. Isolaz<sup>™</sup> can also be used to penetrate the pores with therapeutic products.</p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="waxing"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 243); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>Laser Hair Removal</h3>
                        <p>Remove unwanted hair permanently with laser hair removal. Our Alexandrite laser is capable of reducing the growth of dark hair on the body.</p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->





<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="latise"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 158); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>Latisse<sup>®</sup></h3>
                        <p>Latisse<sup>®</sup> is the first prescription eyelash growth product approved by the FDA. For fuller, darker and longer lashes, consider Latisse<sup>®</sup>.</p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="vein"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 179); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>Leg Vein Therapy</h3>
                        <p>Make spider veins disappear with the leg vein therapy called sclerotherapy. Sclerotherapy requires little down time and results can be seen within a few weeks. </p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="microdermabrassion"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 239); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>Microdermabrasion</h3>
                        <p>Diamonds are your skin's best friend! Microdermabrasion uses a diamond-tipped rod to exfoliate the skin, eliminating dead skin cells and promoting collagen production.</p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="makeup"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 231); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>Permanent Makeup</h3>
                        <p>Permanent makeup is the perfect solution for patients with skin sensitive to traditional makeup, busy lifestyles or chronic conditions like dry eye. Spend less time in front of the mirror and more time loving your look! </p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="photorejuvenation"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 245); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>Photorejuvenation</h3>
                        <p>Intense pulsed light can reduce the signs of aging by reducing the appearance of broken capillaries, age spots, sun damage and even Rosacea. Photorejuvenation can also minimize freckles and birthmarks.</p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="revitalization"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 227); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>PicoSure<sup>™</sup> Skin Revitalization</h3>
                        <p>Eliminate unwanted birthmarks, freckles or other pigmented skin with PicoSure<sup>™</sup> Skin Revitalization. This laser technology is safe and requires fewer sessions than other treatments.</p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="smartlipo"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 3499); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>Smartlipo<sup>®</sup></h3>
                        <p>• Permanently Destroys Fat Cells<br/>
• Tightens Skin<br/>
• 94% Patient Satisfaction Rate<br/>
• Minimal Downtime</p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="tattoo"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 225); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>Tattoo Removal</h3>
                        <p>Erase your ink with PicoSure<sup>™</sup> Tattoo Removal. PicoSure<sup>™</sup> Tattoo Removal is capable of removing more colors with fewer treatments.</p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->
 <a href="" id="velaShape"></a>
              <div class="group second vid-con">
                  <div class="column six  ba">
                  <?php
                  $rows = get_field('before_and_after_gallery' , 235); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image_one = $first_row['before_image' ]; // get the sub field value 
                  $first_row_image_two = $first_row['after_image' ]; // get the sub field value 
                  ?>
                              <div class="item">
                                  <div class="item-container">
                                      
                                          <div class="before-b"> <img src="<?php echo $first_row_image_one ?>" /> <span>Before</span> </div>
                                          <div class="after-b"> <img src="<?php echo $first_row_image_two ?>" /> <span>After</span> </div>
                                      
                                  </div>
                              </div>
                  </div>
                    <div class="column six bab">
                        <div class="vid-desc">
                        <h3>VelaShape<sup>™</sup></h3>
                        <p>VelaShape<sup>™</sup> uses heat and massage to smooth and tighten skin, producing a leaner, more youthful look. Radio frequency, infrared light, and suction causes the body to metabolize fat cells faster, reducing cellulite. </p>
                        </div>
                    </div>
              </div>


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->





<div class="sched-more">
<button class="btn2">Show More Galleries <i class="fa fa-caret-down"></i></button>
<h4>Schedule your FREE consultation today!</h4>
<p>The results are pretty spectacular, and we’re sure they will make you feel Lebo Beautiful. Want to better understand which treatment is the right fit for you? Schedule your consultation with one of our experts to learn more and start your Lebo Beautiful journey today.</p>
<a href="<?php bloginfo( 'url' ) ?>/contact-us/" class="schedule-button">Schedule Today</a>
</div>

</div><!-- END OF Q-CON -->

<div class="sched-after">
<h4>Schedule your FREE consultation today!</h4>
<p>The results are pretty spectacular, and we’re sure they will make you feel Lebo Beautiful. Want to better understand which treatment is the right fit for you? Schedule your consultation with one of our experts to learn more and start your Lebo Beautiful journey today.</p>
<a href="<?php bloginfo( 'url' ) ?>/contact-us/" class="schedule-button">Schedule Today</a>
</div>


              </section> <!-- end article section -->
              
            
            </article> <!-- end article -->


                        
            <?php endwhile; ?>    
            

            
            <?php endif; ?>


          </div> <!-- end #main -->

      
        </div> <!-- end #content -->

      </div> <!-- end .container -->



     </section>
</main>

<i class="fa fa-caret-up scrollToTop"></i>
<?php get_footer(); ?>
