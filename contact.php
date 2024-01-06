<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="#"> 
<style>

*{
        margin:0;
        padding: 0;
        box-sizing:border-box;
        font-family: "Poppins",sans-serif;

}

.contact{
        position: relative;
        padding: 50px 100px;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: url(ok.jpeg);
        background-size: cover;
}

.contact .content{
    max-width: 800px;
    text-align: center;
}

.contact .content h2{
    font-size:45px ;
    font-weight: 500;
    color: black;
}

.contact .content p{
   
    font-weight:300 ;
    color: black;
}
.container{
        width: 100%;   
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
}

.container .contactInfo{
    width:50% ;
    display:flex ;
    flex-direction: column;
}

.container .contactInfo .box{
    position: relative;
    padding: 20px 0;
    display: flex;
}
.container .contactInfo .box .text{
    display: flex;
    margin-left:20px;
    font-size: 16px;
    font-weight: 300;
    flex-direction: column;
}

.container .contactInfo .box .text h3{
    font-weight: 500;
    color: brown;
}

.contactForm{
   width:40%;
   padding:40px;
   background: #fff;
}
.contactForm h2{
    font-size:30px ;
    color: #333;
    font-weight: 500;
}

.contactForm .inputBox{
    position: relative;
    width: 100%;
    margin-top: 10px;
}
.contactForm .inputBox input,
.contactForm .inputBox textarea
{
    width: 100%;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    border: none;
    border-bottom: 2px solid #333;
    outline: none;
    resize: none;
} 

.contactForm .inputBox span{

    position: absolute;
    left: 0;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    pointer-events: none;
    transition: 0.5s;
    color:#666;
}

.contactForm .inputBox input:focus ~ span,
.contactForm .inputBox input:valid ~ span,
.contactForm .inputBox textarea:focus ~ span,
.contactForm .inputBox textarea:valid ~ span
{
    color:e91e63;
    font-size:12px;
    transform:translateY(-20px);

}

.contactForm .inputBox input[type="submit"]{
    width:100px;
    background:#00bcd4 ;
    color:#fff ;
    border: none;
    cursor: pointer;
    padding:10px ;
    font-size:18px ;
}
.back-link {
      display: block;
      text-align: center;
      text-decoration: underline;
      font-size:30px;
      color:black;
      margin-top: 20px;
}

</style>
</head>

<body>

    <section class="contact">
        <div class="content">
            <h2><b>CONTACT US</b></h2>
            <p>You can contact us through and can send your messages</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>ADDRESS</h3>
                        <p>RGUKT,Basar,Nirmal,504101</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>EMAIL</h3>
                        <p>rgukt.ac.in</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>PHONE NUMBER</h3>
                        <p>+917702124654</p>
                    </div>
                </div>
            </div>

            <div class="contactForm">
            <form action="save_message.php" method="post">
                <h2>Send Message</h2>
                <div class="inputBox">
                    <input type="text" name="full_name" required="required">
                        <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required="required">
                        <span>Email</span>
                </div>
                <div class="inputBox">
                    <textarea name="message" required="required"></textarea>
                        <span>Type your message</span>
                </div>
                <div class="inputBox">
                    <input type="submit" value="Send">
                </div>
            </form>
                  
            </div>
        </div>
        <a class="back-link" href="welcome.php"><b>Home</b></a>
    </section>
</body>


</html>