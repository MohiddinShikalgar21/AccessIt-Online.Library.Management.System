<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AccessIt!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        
        nav
    {
        float: right;
        word-spacing: 30px;
        padding: 20px;
    }
        nav li
    {  
        display: inline-block;   
        line-height: 70px;
    }    



        .box-wrapper {
            height: 100vh;
            width: 100vw;
        }
  
        #boxA
            {
            height: 400px;
            width: 750px;
            background-color: rgba(20, 8, 4, 0.664);
            margin: 30px auto;
            border: chocolate;
            }
        #boxB
            {
            height: 400px;
            width: 750px;
            background-color:  rgba(20, 8, 4, 0.664);
            margin: 30px auto;
            border: chocolate;
            }
        #boxC
            {
            height: 400px;
            width: 750px;
            background-color: rgba(20, 8, 4, 0.664);
            margin: 30px auto;
            border: chocolate;
            }

        .box-wrapper {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:13px;width:13px;padding:0}    
        </style>

    </head>
    <body>
        <div class="wrapper">
         <header>
            <div class="logo">
                        <img src="images/logo.png" alt="AccessIt!" style="width: 250px; height: 100px;">
                    </div>
                    <nav>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="books.html">Books</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="registration.html">Registration</a></li>
                            <li><a href="feedback.html">Feedback</a></li>
                        </ul>
                    </nav>  
        </header>
        <section>
            <div class="feedback_img">
                <br><br>
            <div class="w3-content w3-display-container" style="max-width:750px">
                
                <div class="box-wrapper" id="boxA" style="width:100%">
                   <br><br><h1 style="text-align: center; font-size: large; color: rgb(157 113 53);">“In the case of good books, the point is not to see how many of them you can get through, <br> but rather how many can get through to you.”</h1>
                        <h1 style="text-align: right; font-size: large; color: rgb(157 113 53);">-Mortimer J. Adler &nbsp&nbsp .</h1>
                        <h1 style="text-align: center; font-size: 1cm; color: #c1a35e;">Welcome to AccessIt!</h1><br>
                        <h2 style="text-align: center; font-size: large; color: rgb(163 122 60);">A Paradise for Readers and Home of Hundreds of Books that connect People to People, <br> People to Places, People to Learning and Help You Take Your Dreams Off The Shelf.</h2>
                </div>

                <div class="box-wrapper" id="boxB" style="width:100%">
                    <br><br><h1 style="text-align: center; font-size: large; color: rgb(157 113 53);"></h1>
                        <h1 style="text-align: right; font-size: large; color: rgb(157 113 53);"></h1><br>
                        <h1 style="text-align: center; font-size: 1cm; color: #c1a35e;"></h1><br>
                        <h2 style="text-align: center; font-size: large; color: rgb(163 122 60);"></h2>
                </div>

                <div class="box-wrapper" id="boxC" style="width:100%">
                    <br><br><h1 style="text-align: center; font-size: large; color: rgb(157 113 53);"></h1>
                        <h1 style="text-align: right; font-size: large; color: rgb(157 113 53);"></h1><br>
                        <h1 style="text-align: center; font-size: 1cm; color: #c1a35e;"></h1><br>
                        <h2 style="text-align: center; font-size: large; color: rgb(163 122 60);"></h2>
                </div>

                <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                </div>
            </section>
            <footer>
                <p>
                    
                </p>
            </footer>

        <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n)
        {
            showDivs(slideIndex += n);
        }

        function currentDiv(n)
        {
            showDivs(slideIndex = n);
        }

        function showDivs(n) 
        {
            var i;
            var x = document.getElementsByClassName("box-wrapper");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) 
            {
                x[i].style.display = "none";  
            }
        for (i = 0; i < dots.length; i++)
        {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        if(slideIndex>dots.length) { slideIndex=1 }
        x[slideIndex-1].style.display = "block"; 
        setTimeout(showDivs, 5000) 
        dots[slideIndex-1].className += " w3-white";
        }
        
</script>
    
    </body>
</html>