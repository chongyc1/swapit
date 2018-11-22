<!--postItem.html-->

<html>
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href ="{{asset('frontend/css/bootstrap-social.css')}}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('frontend/images/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/indexStyles.css')}}">
    <title>Trader's Home Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}">

</head>

<body class="main">

<header>
    <div class="topnav" id="myTopnav">
        <a href="/home">
            <img src="{{asset('frontend/images/SwapitLogo_horizontal.png')}}" alt="SWAPIT Logo" width="200">
        </a>
        <a href="post-item" class="hoverColor">Post Item</a>
        <a href="my-item" class="hoverColor">My Item</a>
        <a href="#about" class="hoverColor">History</a>
        <a class="loginNav" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Hello, {{Auth::user()->name}}</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</header>

<section class="PostItem">
    <div class="container">
        <h1>Step 2: Item Information</h1>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 postItem-imageSec">
                {{--<img src="data:image/jpg;base64,'. $base64Image .'" />--}}
                <img src="{{asset('images')}}/{{$imgUrl}}" class="postItem-image" alt="Bedside Table image" width="450px" height="450px">
            </div>


            <div class=" col-xs-12 col-md-4 col-lg-5 col-md-offset-1 postItem-content">
                <div class="postItem-form">
                    <h2 class="postItemForm-title"> Post Item </h2>
                    <form method="POST" class="post-form" id="post-form" action="save-item">
                        {{csrf_field()}}
                        <input type="hidden" value="{{$imgUrl}}" name="img">
                        <div class="form-group">
                            <label> Item Name &nbsp: </label>
                            <input type="text" name="itemName" id="itemName" placeholder="Your Item Name" value="{{$predictions[0].$predictions[1]}}"/>
                        </div>
                        <div class="form-group">
                            <label> Description : </label>
                            <input type="text" name="itemDesc" id="itemDesc" placeholder="Your Item Description"/>
                        </div>
                        <div class="form-group">
                            <label> Category &nbsp &nbsp : </label>
                            <select name="item_cat">
                                <option value="">Select a Category</option>
                                <option value="ElectronicDevice">Electronic Devices</option>
                                <option value="ElectronicAccessories">Electronic Accessories</option>
                                <option value="TV&HomeAppliance">TV and Home Appliance</option>
                                <option value="Helath&Beauty">Health & Beauty</option>
                                <option value="Babies&Toys">Babies & Toys</option>
                                <option value="Groceries&Pets">Groceries & Pets</option>
                                <option value="Home&LifeStyle">Home & LifeStyle</option>
                                <option value="WomensLifestyle">Women's Lifestyle</option>
                                <option value="MensLifestyle">Men's Lifestyle</option>
                                <option value="FashionAccessories">Fashion Accessories</option>
                                <option value="Sports&Travel">Sports & Travel</option>
                                <option value="Automotive&Motorcycles">Automotive & Motorcycles</option>
                            </select>
                        </div>
                </div>
                <div class="form-group">
                    <label> Item Period : </label>
                    <input type="text" name="itemPeriod" id="itemPeriod" placeholder="Your Item Period"/>
                    <small class="help-block">eg. 1,2,3 years</small>
                </div>

                <div class="form-group form-button">
                    <input type="submit" name="postItem" id="postItem" class="item-submit" value="Submit"/>
                </div>
                </form>
            </div>

        </div>
    </div>
</section>




<footer>
    <div align="center">
        Copyright &copy; SWAPIT 2018
    </div><br />
    <div align="center">
        <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/"> <span class="fa fa-linkedin"></span></a>
        <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/"> <span class="fa fa-facebook"></span></a>
        <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/"> <span class="fa fa-instagram"></span></a>
        <a class="btn btn-social-icon btn-twitter" href="https://twitter.com/"> <span class="fa fa-twitter"></span></a>
    </div>
    <br />
    <div align="center">
        <script type="text/javascript" language="JavaScript">
            document.write("Last Modified : " + document.lastModified);
        </script>
    </div>
</footer>



<script>

</script>
</body>
</html>
