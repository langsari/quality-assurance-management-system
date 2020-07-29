

<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>manager_add</title>

        <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/foundation.css">

        <!-- If you are using the gem version, you need this only -->
        <link rel="stylesheet" href="css/app.css">

        <script src="js/vendor/modernizr.js"></script>
        <script src="js/script.js"></script>
        <style type="text/css">
            p.margin {margin: 1cm }
            .myform{
                margin:0 auto;
                width:300px;
                padding:14px;
            }

            body
            {
                background-color:#FFFFFF;
            }

            .table
            {
                border-collapse:collapse;
            }
            .link{
                margin:3 auto;
                width:180px;
                padding:17px;

            }
            .font{
                font-size: 13px;
                font-family:times new roman;
            }
            table, td, th
            {
                border:1px solid black;

            }
            .center{
                align : center;
            }
            p.margin {margin: 0.5cm }
            .footer {padding: 7px 0;
                     background: #333333;}
            .white{color: white}

        </style>

    </head>
    <body>
        <fieldset>
            

                <p class="margin"></p>


                <nav class="top-bar" data-topbar>
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="index.html">QUALITY ASSURANCE</a></h1>
                        </li>
                    </ul>

                    <section class="top-bar-section">
                        <!-- Right Nav Section -->
                        <ul class="right">

                            <li class="has-dropdown">
                                <a href="#">Admin</a>
                                <ul class="dropdown">
                                    <li><a href="profile">Profile</a></li>
                                    <li><a href="index.html">Sign Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                </nav>
                <p class="margin"></p>
                <div class="left">        
                    <div class="row">
                        <div class="small-3 columns">


                            <fieldset>
                                <a href="#" class="link round button font" data-dropdown="drop1">MANAGER &raquo;</a>
                                <ul id="drop1" class=" small content f-dropdown" data-dropdown-content>
                                    <li><a href="manager_add.php">Add</a></li>
                                    <li><a href="manager_view.php">View</a></li>

                                </ul>

                                <a href="#" class="link round button font" data-dropdown="drop2">LECTURER &raquo;</a>
                                <ul id="drop2" class=" small content f-dropdown" data-dropdown-content>
                                    <li><a href="manager_add.php">Add</a></li>
                                    <li><a href="manager_view.php">View</a></li>
                                </ul>

                                <a href="#" class="link round button font" data-dropdown="drop3">OFFICER &raquo;</a>
                                <ul id="drop3" class=" small content f-dropdown" data-dropdown-content>
                                    <li><a href="manager_add.php">Add</a></li>
                                    <li><a href="manager_view.php">View</a></li>
                                </ul>
                                <a href="#" class="link round button font" data-dropdown="drop4">ACTION PLAN &raquo;</a>
                                <ul id="drop4" class=" small content f-dropdown" data-dropdown-content>
                                    <li><a href="#">This is a link</a></li>
                                    <li><a href="#">This is another</a></li>
                                    <li><a href="#">Yet another</a></li>
                                </ul> 


                                <a href="#" class="link round button font" data-dropdown="drop5">PROFILE &raquo;</a>
                                <ul id="drop5" class=" small content f-dropdown" data-dropdown-content>
                                    <li><a href="#">This is a link</a></li>
                                    <li><a href="#">This is another</a></li>
                                    <li><a href="#">Yet another</a></li>
                                </ul>

                                <a href="#" class="link round button font" data-dropdown="drop6">PROJECT  &raquo;</a>
                                <ul id="drop6" class=" small content f-dropdown" data-dropdown-content>
                                    <li><a href="#">This is a link</a></li>
                                    <li><a href="#">This is another</a></li>
                                    <li><a href="#">Yet another</a></li>
                                </ul>

                                <a href="#" class="link round button font" data-dropdown="drop7">QUALITY ASSURANCE &raquo;</a>
                                <ul id="drop7" class=" small content f-dropdown" data-dropdown-content>
                                    <li><a href="#">This is a link</a></li>
                                    <li><a href="#">This is another</a></li>
                                    <li><a href="#">Yet another</a></li>
                                </ul>

                                <a href="#" class="link round button font" data-dropdown="drop8">NOTIFICATION &raquo;</a>
                                <ul id="drop8" class=" small content f-dropdown" data-dropdown-content>
                                    <li><a href="#">This is a link</a></li>
                                    <li><a href="#">This is another</a></li>
                                    <li><a href="#">Yet another</a></li>
                                </ul>

                                <a href="#" class="link round button font" data-dropdown="drop9">INDICATOR &raquo;</a>
                                <ul id="drop9" class=" small content f-dropdown" data-dropdown-content>
                                    <li><a href="#">This is a link</a></li>
                                    <li><a href="#">This is another</a></li>
                                    <li><a href="#">Yet another</a></li>
                                </ul>

                                <a href="#" class="link round button font" data-dropdown="drop10">REPORT &raquo;</a>
                                <ul id="drop10" class=" small content f-dropdown" data-dropdown-content>
                                    <li><a href="#">This is a link</a></li>
                                    <li><a href="#">This is another</a></li>
                                    <li><a href="#">Yet another</a></li>
                                </ul>
                            </fieldset>          
                        </div>
                        <div class="small-9 columns"><div class="row">
<form action="doaddm.php" method="post" name="manager" onsubmit="return manager_check_field()">
                                <fieldset>
                                    <legend>Add Information</legend>
                                    <div class="row">
                                        <div class="small-8">
                                            <div class="row">
                                                <div class="small-3 columns">

                                                    <label for="label" class="inline">User Name</label>
                                                    <label for="label" class=" inline">Password</label>
                                                    <label for="label" class="inline">First Name</label>
                                                    <label for="label" class="  inline">Last Name</label>
                                                    <label for="label" class=" inline">Phone</label>
                                                    <label for="label" class=" inline">E-mail</label>
                                                    <label for="label" class=" inline">Department</label>
                                                    <label for="label" class=" inline"></label>

                                                </div>
                                                <div class="small-9 columns">

                                                    <input type="text" name="username" id="username" placeholder="User Name">
                                                    <input type="text" name="password" id="password" placeholder="Password">
                                                    <input type="text" name="fname" id="fname" placeholder="First Name">
                                                    <input type="text" name="lname" id="lname" placeholder="Last Name">
                                                    <input type="text" name="phone" id="phone" placeholder="Phone">
                                                    <input type="text" name="e_mail" id="e_mail" placeholder="E-mail">
                                                    <input type="text" name="department" id="department" placeholder="Department">
                                                    <input type="submit" name="button" id="button" value="Save" />
                                                    <input type="reset" name="button2" id="button2" value="Cancle" />
                                                </div>
                                            </div>
                                        </div>
                                </fieldset>
</form>
                                <script src="js/vendor/jquery.js"></script>
                                <script src="js/foundation.min.js"></script>
                                <script>
                                    $(document).foundation();
                                </script>

                                </fieldset>
                                <div class="footer">          
                                    <p class="white " align="center" >copyright &copy;QA system 2014</p>
                                </div>

                                </body>

                                </html>





















