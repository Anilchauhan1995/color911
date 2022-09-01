
    <!-- footer section start -->

    <footer class="footer padding_top">

        <div class="container">

            <div class="row">

                <div class="col-xxl-3 col-md-3">

                    <div class="footer-logo m_margin_bottom">

                        <picture>

                            <a href="index.php"><img src="assets/images/Color911-logo.png" alt=""></a>

                        </picture>

                    </div>

                </div>

                <div class="col-xxl-3 col-md-3 col-6">

                    <div class="footer-heading quick-link">

                        <h4>Quick Links</h4>

                        <ul>

                            <li>

                                <a href="#">Application</a>

                            </li>

                            <li>

                                <a href="#">Features</a>

                            </li>

                            <li>

                                <a href="#">FAQ</a>

                            </li>
                            <li>
                                 <li>

                                <a href="about-color911.php">About Color911</a>

                            </li>

                                <a href="privacy-policy.php">Privacy Policy</a>

                            </li>
                            <li>

                                <a href="terms-of-use.php">Terms of use</a>

                            </li>

                        </ul>

                    </div>

                </div>

                <div class="col-xxl-3 col-md-3 col-6">

                    <div class="footer-heading">

                        <h4>Social Links</h4>

                        <ul class="d-flex column-gap_10">

                            <li>

                                <a><img src="assets/images/Logo-Assets/twitter.svg"></a>

                            </li>

                            <li>

                                <a><img src="assets/images/Logo-Assets/facebook.svg"></a>

                            </li>

                            <li>

                                <a><img src="assets/images/Logo-Assets/linkedin.svg"></a>

                            </li>

                            <li>

                                <a target="_blank" href="https://www.instagram.com/color911app/"><img src="assets/images/Logo-Assets/insta.svg"></a>

                            </li>

                        </ul>

                    </div>

                </div>

                <div class="col-xxl-3 col-md-3">

                    <div class="footer-heading">

                        <h4>Contact Us</h4>

                        <address> Are you as excited as we are about the new Color911 app?

                         Please contact us by filling in the section above, we’d love to hear from you!</address>

                        
                    </div>

                </div>

            </div>

            <div class="copyright text-center padding_top ">

                <p>2022 &copy; Copyright COLOR911 - All right reserved</p>

            </div>

        </div>

    </footer>

    <!-- footer section end -->



    <!-- back to top button -->

    <button class="btn theme_graident_button" id="btn-back-to-top">

        <i class="fi fi-rr-arrow-small-up"></i>

    </button>

    <!-- back to top button End -->



    <!-- bootstap 5 js cdn links -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript " src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js "></script>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js "></script>

    <script src="assets/js/main.js "></script>

    <!-- bootstap 5 js cdn links -->





    <script>

        $(".features_wrapper ").mouseover(function () {

            $(".features_wrapper ").removeClass("active ");

            $(this).addClass("active ");

            var img_url = $(this).data('src');

            $("#change_image ").removeAttr('href');

            $("#change_image ").attr('href', img_url);

            // console.log(img_url);

        });

    </script>

    

    <script>



	



$("#get-in-touch-form").submit(function (event) {

      

    event.preventDefault();

    

    $('#submit').val('Submitting...');

      

    var fname = $('#fname').val();

    var email = $('#email').val();

    var phone = $('#phone').val();

    var message = $('#message').val();

    var error = false;

    var response_html = "";

    

    if(fname==""){

        error = true; 

        response_html = response_html + "<li>Full Name cannot be blank!</li>";

    }

      

    

    if(email==""){

        error = true; 

        response_html = response_html + "<li>Email cannot be blank!</li>";

    }else{

        if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))

        {

            error = true; 

            response_html = response_html + "<li>Incorrect email format!</li>";

        }        

    }  

     if(phone==""){

        error = true; 

        response_html = response_html + "<li>Phone Number cannot be blank!</li>";

    }else{

        if(!/^[0-9]+$/.test(phone)){

            error = true; 

            response_html = response_html + "<li>Phone field should only contain numbers!</li>";

        }        

    }  

  

    if(error===true){ 

        $('#submit').val('~submit~');

        $('.response').removeClass('text-success');

        $('.response').addClass('text-danger');

        $('.response').html(response_html); return false; 

    }else{

        

                    

        $.ajax({

            url:'get-in-touch-backend.php',

            type:'post',

            data:{fname:fname,email:email,phone:phone,message:message},

            dataType:'json',

            success:function(response){

                console.log(response);

                if(response.status=="success"){

                    $('#submit').val('~submit~');

                    $('.response').removeClass('text-danger');

                    $('.response').addClass('text-success');

                    $('.response').html("Thankyou for contacting us! Our team will contact you soon!");

                    $("#get-in-touch-form").trigger("reset");

                }else{

                    $('#submit').val('~submit~');

                    $('.response').removeClass('text-success');

                    $('.response').addClass('text-danger');

                    $('.response').html("<li>Oops! Something is not right, please try again!</li>");

                }

            }

        });

    }

    

  });    



    </script>

</body>



</html>