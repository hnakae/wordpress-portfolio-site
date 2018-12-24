<?php get_header(); ?>
    <section id="top">
      <div class="container">
        <div class="info">
          <div class="blue-square"></div>
          <h1><?php echo get_bloginfo('name'); ?></h1>
          <p>Web Developer</p>
          <a href="#portfolio-section">Latest Works</a>
        </div>
        <div class="img">
          <div class="background-img">

          </div>
        </div>
      </div>
    </section>
    <section id="services-section">
      <div class="container">
        <div class="title">
          <div class="circle"></div>
          <h1>services</h1>
        </div>
        <div class="services-container">
          <?php
            $mypod = pods('service');
            $mypod->find('name ASC');
          ?>
          <?php while ( $mypod->fetch() ) : ?>
            <?php
            // set our variables
            $name= $mypod->field('name');
            $content= $mypod->field('content');
            $permalink= $mypod->field('permalink');
            $icon_class= $mypod->field('icon_class');
            $border_color= $mypod->field('border_color');
            ?>
            <div class="box <?php echo $border_color ?>">
              <i class="<?php echo $icon_class ?>"></i>
              <h5><?php echo $name ?></h5>
              <p><?php echo $content ?></p>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
    <section id="portfolio-section">
      <div class="container">
        <div class="title">
          <div class="square"></div>
          <h1>portfolio</h1>
        </div>
        <div class="portfolio-container">
          <?php
            $mypod = pods('project');
            $mypod->find('name ASC');
            $loopIndex = 0;
          ?>
          <?php while ( $mypod->fetch() ) : ?>
            <?php
            // set our variables
            $name= $mypod->field('name');
            $type_of_project= $mypod->field('type_of_project');
            $permalink= $mypod->field('permalink');
            $loopIndex += 1;

            $row = $mypod->row();
            $post_id = $row['ID'];
            if (!function_exists('get_post_featured_image')) {
                function get_post_featured_image($post_id, $size) {
                  $return_array = [];
                  $image_id = get_post_thumbnail_id($post_id);
                  $image = wp_get_attachment_image_src($image_id, $size);
                  $image_url = $image[0];
                  $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                  $image_post = get_post($image_id);
                  $image_caption = $image_post->post_excerpt;
                  $image_description = $image_post->post_content;
                  $return_array['id'] = $image_id;
                  $return_array['url'] = $image_url;
                  $return_array['alt'] = $image_alt;
                  $return_array['caption'] = $image_caption;
                  $return_array['description'] = $image_description;
                  return $return_array;
                }
              }
            $image_properties = get_post_featured_image($post_id, 'full');



            ?>
          <a href="<?php echo $permalink; ?>" class="box image<?php echo $loopIndex; ?>" >
            <div class="image" style='background: url("<?php echo $image_properties[url]; ?>");
            height: 100%;
            width: 100%;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;'>
              <div class="hover-bg">
                <div class="title">
                  <div class="text"><?php echo $type_of_project; ?></div>
                </div>
              </div>
            </div>
          </a>
        <?php endwhile; ?>

        </div>
      </div>
    </section>
    <section id="experience-section">
      <div class="container">
        <div class="large-title">
          Experience
        </div>
        <div class="experience-container">
          <div class="large-icons">
            <div class="square">
              <div class="blue-box">
                Experience
              </div>
            </div>
            <div class="circle">
              <div class="white-box">
                AWARDS
              </div>
            </div>
            <div class="triangle">
              <div class="triangle-box">
                <div class="text">Work</div>
              </div>
            </div>
          </div>
          <div class="info">
            <?php
              $mypod = pods('experience');
              $mypod->find('start_end_date ASC');
            ?>
            <?php while ( $mypod->fetch() ) : ?>
              <?php
              // set our variables
              $name= $mypod->field('name');
              $content= $mypod->field('content');
              $start_end_date= $mypod->field('start_end_date');
              $location= $mypod->field('location');
              $permalink= $mypod->field('permalink');

              ?>
              <div class="info-box">
                <h4><?php echo $name ?> - <?php echo $location ?> </h4>
                <span class="date"><?php echo $start_end_date ?></span>
                <p><?php echo $content ?></p>
              </div>
            <?php endwhile; ?>

          </div>
        </div>
      </div>
    </section>
    <section id="blog-section">
      <div class="container">
        <div class="title">
          <h1>Blog</h1>
        </div>

        <div class="blog-container">
          <!-- start of post -->
          <a href="blog/#" class="post">
            <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
            <div class="details">
              <h4>Top 10 Javascript Frameworks</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="more">
              <div class="button">
                Read More
              </div>
            </div>
          </a>
          <!-- end of post -->
          <!-- start of post -->
          <a href="blog/#" class="post" >
            <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
            <div class="details">
              <h4>Top 10 Javascript Frameworks</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="more">
              <div class="button">
                Read More
              </div>
            </div>
          </a>
          <!-- end of post -->
          <!-- start of post -->
          <a href="blog/#" class="post">
            <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
            <div class="details">
              <h4>Top 10 Javascript Frameworks</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="more">
              <div class="button">
                Read More
              </div>
            </div>
          </a>
          <!-- end of post -->
          <!-- start of post -->
          <a href="blog/#" class="post">
            <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
            <div class="details">
              <h4>Top 10 Javascript Frameworks</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="more">
              <div class="button">
                Read More
              </div>
            </div>
          </a>
          <!-- end of post -->
          <!-- start of post -->
          <a href="blog/#" class="post">
            <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
            <div class="details">
              <h4>Top 10 Javascript Frameworks</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="more">
              <div class="button">
                Read More
              </div>
            </div>
          </a>
          <!-- end of post -->
          <!-- start of post -->
          <a href="blog/#" class="post">
            <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
            <div class="details">
              <h4>Top 10 Javascript Frameworks</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="more">
              <div class="button">
                Read More
              </div>
            </div>
          </a>
          <!-- end of post -->
        </div>

      </div>
    </section>
    <section id="testimonials-section">
      <div class="container">
        <div class="title">
          <div class="square"></div>
          <h1>Testimonials</h1>
        </div>
        <div class="testimonials-container">
          <div class="test-sides test-left">
            <div class="person-img" style="background: url('https://d3iw72m71ie81c.cloudfront.net/male-30.jpg');">
              <div class="hover-bg">
                <div class="name">James</div>
              </div>
            </div>
          </div>
          <div class="test-center">
            <div class="header">
              <div class="user-img" style="background: url('https://d3iw72m71ie81c.cloudfront.net/8912fe22-7970-4e15-a3a1-abef9f2fb4b5')">

              </div>
              <div class="info">
                <h4>Jenny Benzino</h4>
                <span>CEO, Nike</span>
              </div>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="test-sides test-right">
            <div class="person-img" style="background: url('https://d3iw72m71ie81c.cloudfront.net/88b95197-fd1e-4e11-8793-2903a5cfd06e-10584053_10153749310922416_3125632463004974493_n.jpg')">
              <div class="hover-bg">
                <div class="name">Bryant</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
