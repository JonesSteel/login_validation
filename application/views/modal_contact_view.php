<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login-Codeigniter Modal Contact Form Example</title>
        <link href="<?php echo base_url('assests/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Navigation Menu -->
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" datatype=""data-toggle="collapse" data-target="#navbar1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">ShopMania</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Deals & Offers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active"><a href="#" data-toggle="modal" data-target="#myModal">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Modal Form -->
        <div id="myModal" class="modal fade" aria-label="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <?php
                        $attributes = array("name" => "contact_form", "id" => "contact_form");
                        echo form_open("modal_contact/submit", $attributes);
                    ?>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Contact Form</h4>
                    </div>
                    <div class="modal-body" id="myModalBody">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" id="name" name="name" placeholder="Your Full Name" type="text" value="<?php echo set_value('name'); ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>