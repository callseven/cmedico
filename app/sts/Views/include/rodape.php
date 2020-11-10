        <footer class="footer bg-danger">
            <div class="container text-center">
                © copyright 2020 call.com.br
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>
        <script src="<?php echo URL; ?>assets/js/scrollreveal.min.js"></script>
        <script src="<?php echo URL; ?>assets/js/personalizado.js"></script>
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

<!--   Core JS Files   -->
<script src="<?php echo URL; ?>assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="<?php echo URL; ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo URL; ?>assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="<?php echo URL; ?>assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="<?php echo URL; ?>assets/js/jquery.validate.min.js"></script>

    <script>
        var header_height;
        var fixed_section;
        var floating = false;

        $().ready(function(){
            suggestions_distance = $("#suggestions").offset();
            pay_height = $('.fixed-section').outerHeight();

			$(window).on('scroll', materialDesign.checkScrollForTransparentNavbar);
        });
    </script>


    </body>
</html>
