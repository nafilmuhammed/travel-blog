<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <style>
        * {
            box-sizing: border-box;
        }
        
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        
        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }
        
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        
        input[type=submit]:hover {
            background-color: #45a049;
        }
        
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        
        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }
        
        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }
        
        
        .row::after {
            content: "";
            display: table;
            clear: both;
        }
        
        @media screen and (max-width: 600px) {
            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
        .button {
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        background-color: #4CAF50;  
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Display - Blog</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

    <script> language="javascript" type="text/javascript">
        function clearText(field) {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
        
    </script>
    <button id="myButton" class="button" >your blog</button>

    <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = '../yourblog.php';
    };
    </script>


</head>
<div id="tooplate_main">
    <div class="post_box">
        <h2>kashmir</h2>
        <div class="image_frame"><span></span><img src="https://www.shutterstock.com/image-photo/srinagar-kashmir-india-january-28-260nw-1993117301.jpg" alt="Image 08" /></div>
        <p><span class="cat">Posted in <a href="#">Internet</a>, <a href="#">Marketing</a></span> | Date: June 24, 2048</p>
        <p>I had heard how beautiful Kashmir was and had always wanted to visit it. So, when my first leg of photography trip for the Holi Festival was completed, I decided to extend my trip and headed to Kashmir, along with my two friends. The flight from Delhi to Srinagar took only 1.5 hours, much shorter compared to 3 hours .</p>
        <a class="more float_r" href="#">More</a>
        <a href="#">142 comments</a>
        <div class="cleaner"></div>
    </div>
    <div class="post_box">
        <h2>kerala</h2>
        <div class="image_frame"><span></span><img src="https://www.shutterstock.com/image-photo/house-boat-under-blue-sky-260nw-1538903498.jpg" alt="Image 06" /></div>
        <p><span class="cat">Posted in <a href="#">Animations</a>, <a href="#">3D Graphics</a></span> | Date: June 19, 2048</p>
        <p>Vestibulum adipiscing tempus elit eu condimentum. Fusce at mi felis. Etiam sed velit nibh. Nunc bibendum justo nec eros elementum auctor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi sollicitudin
            ultrices urna, at placerat urna pharetra dictum. </p>
        <a class="more float_r" href="#">More</a>
        <a href="#">168 comments</a>
        <div class="cleaner"></div>
    </div>
    <div class="post_box">
        <h2>punjab</h2>
        <div class="image_frame"><span></span><img src="images/tooplate_image_07.jpg" alt="Image 07" /></div>
        <p><span class="cat">Posted in <a href="#">Templates</a>, <a href="#">HTML CSS</a></span> | Date: June 16, 2048</p>
        <p>Donec dictum feugiat eros et sagittis. Sed laoreet, eros eget convallis elementum, est mi accumsan justo, sed accumsan magna ligula sit amet ligula. Aliquam posuere metus id risus cursus accumsan. Vivamus cursus nisl at ipsum elementum id hendrerit
            eros volutpat.</p>
        <a class="more float_r" href="#">More</a>
        <a href="#">180 comments</a>
        <div class="cleaner"></div>
    </div>
    <div></div>
</div>
<!-- end of tooplate_main -->
<h1>share your travel moments </h1>
</div><br><br>
<div class="container">
    <form action="../actions/2register.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-25">
                <label for="fname">First Name</label>
            </div>
            <div class="col-75">
                <input type="text" name="names" placeholder="Your name..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="place">place</label>
            </div>
            <div class="col-75">
                <input type="text" name="place" placeholder="place of your journey">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="location">location</label>
            </div>
            <div class="col-75">
                <input type="text" name="location" placeholder="addres of location">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="images">photo</label>
            </div>
            <div class="col-75">
                <input type="file" id="lname" name="photo" placeholder="photos here">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="subject">about your journey</label>
            </div>
            <div class="col-75">
                <textarea id="subject" name="about" placeholder="Write something.." style="height:200px"></textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
    <button onclick="window.location.href = '../yourblog.php';">Go to Example.com</button>
</div>


<div id="tooplate_footer_wrapper">
    <div id="tooplate_footer">
        <div class="col_allw300">
            <h4>Our Pages</h4>
            <ul class="footer_list">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="col_allw300">
            <h4>Our Partners</h4>
            <ul class="footer_list">
                <li><a href="#">Learn HTML CSS</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Flash Gallery</a></li>
                <li><a href="#">Website Templates</a></li>
                <li><a href="#">Free Graphics</a></li>
            </ul>
        </div>
        <div class="col_allw300 col_last">

            <h4>About Us</h4>
            Pellentesque sed urna nec arcu placerat elementum quis vel quam. Nam massa nibh, ultrices lobortis convallis et. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer"
                rel="nofollow"><strong>CSS</strong></a>.
            <div class="cleaner h10"></div>

            Copyright © 2048 <a href="#">Company Name</a>

        </div>

        <div class="cleaner"></div>


    </div>

    <div class="cleaner"></div>
</div>

</body>

</html>