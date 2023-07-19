<?php include "includes/header.php"; ?>
<?php include "includes/navbar.php"; ?>
<!-- Home -->
<header class="header-2">
    <div class="page-header min-vh-75" style="background-image: url('./assets/img/curved-images/01.jpg')">
        <div class="container" id="">
            <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                    <img src="assets/img/home.png" class="img-responsive" width="50%" alt="">

                    <h3 class="text-gradient text-warning fs-3"> Want to Become
                        <h2 class="typewrite fs-2  text-gradient text-primary" data-period="2000" data-type='[ "Web Developer", "Ethical Hacker" ]'>
                            <span class="wrap"></span>
                        </h2>
                    </h3>
                    <p class="text-warning text-gradient fw-bolder fs-6">Let's get started with excellent tutorials.If you are new user here, <br> click signup button above and become our user.</p>
                </div>
            </div>
        </div>
        <div class="position-absolute w-100 z-index-1 bottom-0">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="moving-waves">
                    <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                    <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                    <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                    <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
                </g>
            </svg>
        </div>
    </div>
</header>
<section class="pt-2 pb-4 mt-7" id="count-stats">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">
                <div class="row">
                    <div class="col-md-4 position-relative">
                       <?php
                            $query = "SELECT * FROM users";
                            $select_users = mysqli_query($con, $query);
                        
                            while($row = mysqli_fetch_assoc($select_users)){
                                $users = $row['id'];
                            }
                        ?>
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary"><span id="state1" countTo="<?php echo $users?>">0</span>+</h1>
                            <h5 class="mt-3">Total Users</h5>
                        </div>
                        <hr class="vertical dark">
                    </div>
                    <div class="col-md-4 position-relative">
                       <?php
                            $query = "SELECT * FROM subscribers";
                            $select_users = mysqli_query($con, $query);
                        
                            while($row = mysqli_fetch_assoc($select_users)){
                                $users = $row['id'];
                            }
                        ?>
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary"> <span id="state2" countTo="<?php echo $users?>">0</span>+</h1>
                            <h5 class="mt-3">Subscribers</h5>
                        </div>
                        <hr class="vertical dark">
                    </div>
                    <div class="col-md-4 position-relative">
                       <?php
                            $query = "SELECT * FROM courses_enrolled";
                            $select_users = mysqli_query($con, $query);
                        
                            while($row = mysqli_fetch_assoc($select_users)){
                                $users = $row['id'];
                            }
                        ?>
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary"> <span id="state3" countTo="<?php echo $users?>">0</span>+</h1>
                            <h5 class="mt-3">Courses Enrolled</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Posts -->
<?php 
    $query = "SELECT * FROM posts";
    $select_posts = mysqli_query($con, $query);
?>
<section class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="mb-5 text-center text-gradient text-primary"><em>Latest Posts</em></h2>
        </div>
      </div>
      <div class="row">
       <?php
            while($row = mysqli_fetch_assoc($select_posts)){
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];
            ?>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain card-blog tilt" data-tilt>
            <div class="card-image border-radius-lg position-relative">
              <a href="javascript:;">
                <img class="w-100 border-radius-lg move-on-hover shadow" src="images/<?php echo $post_image; ?>" alt="<?php echo $post_title; ?>">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold"><?php echo $post_title; ?></a>
              </h5>
              <h6><?php echo $post_author; ?></h6>
              <h6><i class="fa fa-clock-o"></i> <?php echo $post_date; ?></h6>
              <p>
                <?php echo $post_content; ?>
              </p>
              <a href="javascript:;" class="text-info icon-move-right">Read More
                <i class="fas fa-arrow-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
        <?php } ?>
        <div class="col-lg-3 col-md-12 col-12">
          <div class="card card-background card-background-mask tilt" data-tilt>
            <div class="full-background" style="background-image: url('./assets/img/curved-images/3.jpg')"></div>
            <div class="card-body pt-7 text-center">
              <div class="content-left text-start my-auto py-4">
                <a href="javascript:;">
                  <h2 class="card-title text-white">Flexible work hours</h2>
                  <p class="card-description text-white">Rather than worrying about switching offices every couple years, you stay in the same place.</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Home End -->

<script>
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<?php include "includes/footer.php"; ?>