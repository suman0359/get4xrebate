<!-- Slider Area From Here  -->

<div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="<?php echo base_url(); ?>images/slider/slider1.jpg" alt="...">
                <div class="carousel-caption">
                    <p>This Is Slider Caption</p>
                </div>
            </div>

            <div class="item">
                <img src="<?php echo base_url(); ?>images/slider/slider2.jpg" alt="...">
                <div class="carousel-caption">
                    <p>This Is Slider Caption</p>
                </div>
            </div>

            <div class="item">
                <img src="<?php echo base_url(); ?>images/slider/slider3.jpg" alt="...">
                <div class="carousel-caption">
                    <p>This Is Slider Caption</p>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- Slider Area End From Here  -->