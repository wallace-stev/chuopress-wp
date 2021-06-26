    <!-- footer -->
    <footer class="mt-3 pt-5">
        <!-- footer content -->
        <div class="footer bg-footer pt-5 pb-4 border-bottom">
          <div class="container px-2">
          <div class="row no-gutters">
                <div class="col-lg-5 mr-lg-5 col-md-12 col-sm-12 mr-0">
                    <?php if (is_active_sidebar( 'map' )): ?>
                      <?php dynamic_sidebar( 'map' ); ?>
                    <?php else: ?>
                      <h2 class="text-slight mb-3">
                        <?php echo 'Fatal error! Map is missing or could not be displayed. Please contact admin'; ?>
                      </h2>
                    <?php endif; ?>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6"> <!--Edit Contact Details Here-->
                    <h4 class=" mt-2 mb-3 text-primary footer-section-heading">Contact Information</h4>
                    <ul class="list-unstyled"> <!--Edit Contact Information Here-->
                        <li class="mb-3 text-slight"><i class="fa fa-map-marker mx-1"></i> Ruhuwiko, Songea, Tanzania</li>
                        <li class="mb-3">
                          <a class="text-slight" href="tel:+255-767-778069">
                            <i class="fa fa-phone mx-1"></i> +255 767 778069
                          </a>
                        </li>
                        <li class="mb-3">
                          <a class="text-slight" href="tel:+255-622-818818">
                            <i class="fa fa-phone mx-1"></i> +255 622 818818
                          </a>
                        </li>
                        <li class="mb-3">
                          <a class="text-slight" href="tel:+255-754-686669">
                            <i class="fa fa-phone mx-1"></i> +255 754 686669
                          </a>
                        </li>
                        <li class="mb-3">
                          <a class="text-slight" href="mailto:principal@stimat.ac.tz">
                            <i class="fa fa-envelope mx-1"></i> chagua@stimat.ac.tz
                          </a>
                        </li>
                    </ul>
                </div>

                <!--Footer Quick Links Menu Widget-->
                <?php if (is_active_sidebar( 'footer' )): ?>
                      <?php dynamic_sidebar( 'footer' ); ?>
                <?php endif; ?>
                
            </div>
        </div>
        </div>
        <!-- copyright -->
        <div class="copyright pt-3 bg-footer">
          <div class="container-fluid">
            <div class="row px-md-5 px-2">
              <div class="col-md-8 col-12 text-md-left text-center text-slight my-1">
                <p style="line-height:1.5;" class="mb-0 copyright-text">Copyright &copy; 
                  <script>
                    var CurrentYear = new Date().getFullYear()
                    document.write(CurrentYear)
                  </script> 
                  <?php bloginfo( 'name' ); echo ". "; ?>
                  <a class="text-primary" href="https://www.aspiretz.com" target="_blank">Designed by Aspire Creative</a>
                  </p>
              </div>
              <div class="col-md-4 text-md-right text-center my-1">
                <ul class="list-inline">
                  <li class="list-inline-item"><!--Edit Facebook Link Here--><a class="d-inline-block p-2 text-primary" href="https://www.facebook.com/Ruhuwiko"><i class="ti-facebook"></i></a></li> 
                  <li class="list-inline-item"><!--Edit Twitter Link Here--><a class="d-inline-block p-2 text-primary" href="https://www.twitter.com/stimatsongea"><i class="ti-twitter-alt"></i></a></li> 
                  <li class="list-inline-item"><!--Edit Instagram Link Here--><a class="d-inline-block p-2 text-primary" href="https://www.instagram.com/stimatsongea"><i class="ti-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </footer>
    <!-- /footer -->

    <?php wp_footer(  );?>

</body>
</html>