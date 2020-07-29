

<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>report</title>

        <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/foundation.css">

        <!-- If you are using the gem version, you need this only -->
        <link rel="stylesheet" href="css/app.css">

        <script src="js/vendor/modernizr.js"></script>
        <style type="text/css">
            p.margin {margin: 1cm }
            .myform{
                margin:0 auto;
                width:300px;
                padding:14px;
            }

            body
            {
                background-color:#CFCFCF;
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
            .fieldset {
  border: 2px #FFFFFF solid;
  border-radius: 10px;
}
.link1{
               
                width:150px;
}

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
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="index.php">Sign Out</a></li>
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
                            <a href="#" class="link round button font" data-dropdown="drop">MANAGER &raquo;</a>
                            <ul id="drop" class=" small content f-dropdown" data-dropdown-content>
                                <li><a href="manager_add.php">Add</a></li>
                                    <li><a href="manager.php">View</a></li>
                            </ul>

                            <a href="#" class="link round button font" data-dropdown="drop">LECTURER &raquo;</a>
                            <ul id="drop" class=" small content f-dropdown" data-dropdown-content>
                                <li><a href="manager_add.php">Add</a></li>
                                    <li><a href="manager.php">View</a></li>
                            </ul>
<a href="#" class="link round button font" data-dropdown="drop">OFFICER &raquo;</a>
<ul id="drop" class=" small content f-dropdown" data-dropdown-content>
  <li><a href="manager_add.php">Add</a></li>
                                    <li><a href="manager.php">View</a></li>
</ul>           
                            <a href="#" class="link round button font" data-dropdown="drop">ACTION PLAN &raquo;</a>
                            <ul id="drop" class=" small content f-dropdown" data-dropdown-content>
                                <li><a href="#">This is a link</a></li>
                                <li><a href="#">This is another</a></li>
                                <li><a href="#">Yet another</a></li>
                            </ul> 


                            <a href="#" class="link round button font" data-dropdown="drop">PROFILE &raquo;</a>
                            <ul id="drop" class=" small content f-dropdown" data-dropdown-content>
                                <li><a href="#">This is a link</a></li>
                                <li><a href="#">This is another</a></li>
                                <li><a href="#">Yet another</a></li>
                            </ul>

                            <a href="#" class="link round button font" data-dropdown="drop">PROJECT  &raquo;</a>
                            <ul id="drop" class=" small content f-dropdown" data-dropdown-content>
                                <li><a href="#">This is a link</a></li>
                                <li><a href="#">This is another</a></li>
                                <li><a href="#">Yet another</a></li>
                            </ul>

                            <a href="#" class="link round button font" data-dropdown="drop">QUALITY ASSURANCE &raquo;</a>
                            <ul id="drop" class=" small content f-dropdown" data-dropdown-content>
                                <li><a href="#">This is a link</a></li>
                                <li><a href="#">This is another</a></li>
                                <li><a href="#">Yet another</a></li>
                            </ul>

                            <a href="#" class="link round button font" data-dropdown="drop">NOTIFICATION &raquo;</a>
                            <ul id="drop" class=" small content f-dropdown" data-dropdown-content>
                                <li><a href="#">This is a link</a></li>
                                <li><a href="#">This is another</a></li>
                                <li><a href="#">Yet another</a></li>
                            </ul>

                            <a href="#" class="link round button font" data-dropdown="drop">INDICATOR &raquo;</a>
                            <ul id="drop" class=" small content f-dropdown" data-dropdown-content>
                                <li><a href="#">This is a link</a></li>
                                <li><a href="#">This is another</a></li>
                                <li><a href="#">Yet another</a></li>
                            </ul>

                            <a href="#" class="link round button font" data-dropdown="drop">REPORT &raquo;</a>
                            <ul id="drop" class=" small content f-dropdown" data-dropdown-content>
                                <li><a href="#">This is a link</a></li>
                                <li><a href="#">This is another</a></li>
                                <li><a href="#">Yet another</a></li>
                            </ul>
                        </fieldset>          
                    </div>
                    <div class="small-9 columns"><div class="row ">

                            <fieldset>
                                <form>
                                    <div>
                                        <label class="link1">
                                            <select>
                                                <option value="day">Day</option>
                                                <option value="sunday">Sunday</option>
                                                <option value="monday">Monday</option>
                                                <option value="tuesday">Tuesday</option>
                                                <option value="wednesday">Wednesday</option>
                                                <option value="thursday">Thursday</option>
                                                <option value="friday">Friday</option>
                                                <option value="saturday">Saturday</option>
                                            </select>
                                        </label>
                                    </div>
                                    
                                </form>   

                                <table>

                                    <tr>
                                        <th>ID</th>
                                        <th>Project Name</th>
                                        <th>Department</th>
                                        <th>Day</th>
                                        <th>Month</th>
                                        <th>Year</th>
                                        <th>Time</th>
                                        <th>Delete</th>
                                       
                                    </tr>

                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>delete</td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>delete</td>

                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>delete</td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>delete</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>

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





















