<?php include_once('sendmail/mail.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Renfew Solicitors - Newcastle NSW</title>
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0" />
        <link rel="stylesheet" href="css/renfrew-main.min.css">
        
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,300|Roboto:400,700,500,300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        
    <!-- Navigation -->
    <section id="renfrew-nav" data-uk-sticky="{top: 0, animation: 'uk-animation-slide-top'}" >     
       <div class="uk-container uk-container-center uk-margin-large-bottom">
            <nav class="uk-navbar uk-margin-large-bottom">
                <div class="uk-navbar-brand uk-hidden-small"><img src="images/renfrew-solicitors.gif"/></div>

                <ul id="renfrew-main-nav" class="uk-navbar-nav uk-hidden-small" data-uk-scrollspy-nav="{closest: 'li'}">
                    <li>
                        <a href="#renfrew-main" data-uk-smooth-scroll="{offset:100}">Home</a>
                    </li>
                    <li>
                        <a href="#services" data-uk-smooth-scroll="{offset:90}">Services</a>
                    </li>
                    <li>
                        <a href="#conveyancing" data-uk-smooth-scroll="{offset:90}">Conveyancing</a>
                    </li>
                    <li>
                        <a href="#location" data-uk-smooth-scroll="{offset:90}">Location</a>
                    </li>
                    <li>
                        <a href="#contact" data-uk-smooth-scroll="{offset:90}">Contact</a>
                    </li>
                </ul>
                
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><img src="images/renfrew-solicitors.gif"/></div>
            </nav>
        </div>
    </section>
    
    <!-- Main -->
    <section id="renfrew-main" class="uk-cover-background">
        <div class="uk-container uk-container-center">
            <div id="renfrew-main-header" data-uk-parallax="{y: '200', opacity: '0'}">           
                <h1>Renfrew</br />
                Solicitors</h1>
                <span class="renfrew-subtitle">Louise Renfrew - Solicitor (Principal), BALLB, BA.ED (Art)</span>
            </div>
        </div>
    </section>  

    <div style="clear: both;"></div>

    <!-- Services -->
    <section id="services">      
        <div class="uk-width-medium-6-10 uk-container-center" data-uk-scrollspy="{cls:'uk-animation-fade', target:'.i-block', delay:100, repeat: true}">
            <header>
                <h1 class="uk-text-center">Services</h1>
                <p class="uk-text-center">Renfrew Solicitors can provide a range of personalized services to assist you.</p>
            </header>
            
           <!-- Top Row -->
           <div id="services-top">
                <div class="i-block uk-grid uk-container-center uk-text-center">
                    <div class="uk-width-1-3">
                        <i class="uk-icon-briefcase renfrew-icon-xlarge"></i><br />
                        <span>Commercial Litigation</span>
                    </div>
                    <div class="uk-width-1-3">
                        <i class="uk-icon-plane renfrew-icon-xlarge"></i><br />
                        <span>Aviation &amp; Marine</span>
                    </div>
                    <div class="uk-width-1-3">
                        <i class="uk-icon-bank renfrew-icon-xlarge"></i><br />
                        <span>Business Law</span>
                    </div>
                </div>
            </div>

            <!-- Bottom Row -->
            <div id="services-bottom" class="i-block">
                <div class="uk-grid uk-container-center uk-text-center">
                    <div class="uk-width-1-3">
                        <i class="uk-icon-copyright renfrew-icon-xlarge"></i><br />
                        <span>Copyright &amp; Intellectual Property</span>
                    </div>
                    <div class="uk-width-1-3">
                        <i class="uk-icon-group renfrew-icon-xlarge"></i><br />
                        <span>Family &amp; De-facto Law</span>
                    </div>
                    <div class="uk-width-1-3">
                        <i class="uk-icon-gavel renfrew-icon-xlarge"></i><br />
                        <span>Crime</span>
                    </div>
                </div> 
            </div>     
        </div>
    </section>

    <div style="clear: both;"></div>

    <!-- Conveyancing -->
    <section id="conveyancing">
        



        <div class="uk-grid">
            <div class="uk-width-small-1-1 uk-container-center" style="padding-top: 35px;">
                <header class="uk-text-center">
                    <h1 class="uk-margin-large-bottom">Conveyancing</h1>
                    <p>Affordable fixed fee conveyancing (
                    <span class="ren-yellow uk-text-bold">$1,350.00</span> 
                    inclusive of all disbursements)<br />
                    We focus on delivering a competent, hassle free, personalised service without compromise.</p>
                </header>
                <div class="uk-grid" style="margin-top:-25px;">
                    <div class="uk-container-center uk-margin-bottom">
                    <a href="conveyancing.php" class="uk-button uk-button-primary uk-button-large">Find out what's included</a>
                    </div>
                </div>
            </div>
        </div>



        
    </section>
    
     

    <!-- Location -->
    <section id="location">
        <div class="uk-width-medium-8-10 uk-container-center">
            
            <div class="uk-grid">
                <div id="location-txt" class="uk-width-small-1-1 uk-width-medium-1-2">
                    <header>
                        <h1>Location</h1>
                        <p>19, Bolton Street <br />Newcastle, NSW, 2300 <br /> 
                    (02) 4926 3099</p>
                    </header>
                </div>
                <div class="uk-width-small-1-1 uk-width-medium-1-2">
                    <header>
                        <div id="map" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}"></div>
                    </header>
                </div>
            </div>

        </div>
    </section>

    <div style="clear: both;"></div>

    <section id="contact">
        <div class="uk-width-medium-6-10 uk-container-center">
            <div class="uk-width-medium-6-10 uk-container-center">
                <header>
                    <h1 class="uk-text-center">Contact</h1>
                    <p class="uk-text-center">Just fill out the form below and we'll get back to you as soon as possible.</p>
                </header>
                
                <!-- Form -->
                <form action="#contact" method="POST" class="uk-form uk-form-stacked">
                    <div class="uk-form-row">
                        <div class="uk-form-controls">
                            <label class="uk-form-label" for="Name"></label>
                            <input type="text" name="name" placeholder="Name" required value="<?php echo !empty($name)?$name:''; ?>" class="uk-form-large uk-width-1-1 uk-margin-bottom">
                            <label class="uk-form-label" for="Email"></label>
                            <input type="email" name="email" required placeholder="Email" class="uk-form-large uk-width-1-1 uk-margin-bottom">
                            <label class="uk-form-label" for="Comments"></label>
                            <textarea cols="" rows="10" placeholder="Comments" required name="message" class="uk-form-large uk-width-1-1 uk-margin-bottom"><?php echo !empty($message)?$message:''; ?></textarea>
                        </div>
                    </div>
                    
                    <div>
                        <?php if(!empty($errMsg)): ?>
                            <div class="uk-alert uk-alert-danger uk-text-center">
                                <?php echo $errMsg; ?>
                            </div>
                        <?php endif; ?>
                        <div class="g-recaptcha" data-sitekey="6LdtngMTAAAAAC023EZo542Mycs5cQ3IL-sxyAgS"></div>
                    </div>
                    <button type="submit" name="submit" value="SUBMIT" class="uk-button uk-button-large uk-button-primary uk-width-1-1 uk-margin-bottom uk-margin-top">Send</button>
                </form>
                <!-- /Form -->
    
        </div>
    </div>
    
    </section>

	<div style="clear: both;"></div>

    <footer>
        <p class="uk-text-center">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Renfrew Solicitors. All Rights Reserved.</p>
    </footer>

    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/uikit.min.js"></script>
    <script src="js/renfrew-main.min.js"></script>
    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
      function initialize() {
          var myLatLng = {lat: -32.928065, lng: 151.78343799999993};

          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: myLatLng
          });

          var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
          });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    </body>
</html>
