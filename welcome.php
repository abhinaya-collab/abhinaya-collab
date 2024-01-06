<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta http-equi="X-UA-Compatible" content=""IE=edge>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
<style>
    *{
        margin:0;
        padding: 0;
        box-sizing:border-box;
        font-family: "Poppins",sans-serif;
        

    }
    header{
        z-index: 999;
        position: absolute;
        top : 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 200px;
        transition: 0.5s ease;
    }

    header .brand{
         color: #fff;
         font-size: 2em;
         font-weight: 700;
         text-transform: uppercase;
         text-decoration: none;
    }

    header .navigation{
        display: none;
    }

    header .navigation.active{
        position: fixed;
        width: 100%;
        height:100vh;
        top: 0;
        left:0 ;
        display: flex;
        justify-content: center;
        align-items:center ;
        background: rgba(1, 1, 1, 0.5);
    }


    header .navigation .navigation-items a{
        
        color: #222;
         font-size: 1.2em;
         margin: 20px;
         text-decoration: none;
         transition: 0.5s ease-in-out;
         
    }

    header .navigation .navigation-items a::before{
        background: #222;
        height: 5px;        
    }

    header .navigation .navigation-items a::after{
        content: '';
        position:absolute;
        transform: translateY(10px);
        opacity:0;
        transition : .5s;
    }


    header .navigation.active .navigation-items{
        background: #fff;
        width: 600px;
        max-width: 600px;
        margin:20px;
        padding:40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 5px;
        box-sizing: 0 5px 25px rgb(1 1 1/ 20%);
    }


   
    
    header .navigation .navigation-items a:hover:before{
        width: 100%;
    }


    section{
        padding: 100px 200px;

    }
    .home{
       
        position: relative;
        width: 100%;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        flex-direction: column;
        background-color: #2696e9;


    }
    .home ::before{
        position: absolute;
        z-index: 777;
        content: '';
        background: rgba(192, 192, 192, 0.1);
        width:100%;
        height: 100%;
        top: 0;
        left:0;

    }


    .home .content{
        z-index: 800;
        color: #fff;
        width: 70;
        margin-top: 50px;
        } 

    .home .content .active{
        display: block;
    }

        .home .content h1{
                font-size: 4em;
                font-weight: 800;
                text-transform: uppercase;
                letter-spacing: 2px;
                line-height: 75px;
                margin-bottom: 40px;
                color: #fff;
               
        }

        .home .content h1 span{
                font-size: 1.2em;
                font-weight: 600;
                color: #fff;
                
        }

        .home .content p{
            margin-bottom: 65px;
            color : #fff;
            
        }

        .home .content a{
            background: #fff;
            padding: 15px 35px;
            color: #1680AC;
            font-size: 1.1em;
            font-weight: 500;
            text-decoration: none;
            border-radius: 2px;
        }


        .home video{
            z-index:000;
            position:absolute;
            top:0;
            left: 0;
            width: 100%;
            height:100%;
            object-fit: cover;

        }



        @media(max-width: 1040px){
            header{
                padding: 12px 20px;
            }
            section{
                padding: 100px 20px;
            }
            .home .media-icons{
                right:15px;

            }
         
            }
            .menu-btn{
                background: url(menu.png)no-repeat;
                background-size:30px;
                background-position: center;
                width: 40px;
                height: 40px;
                cursor: pointer;
                transition: 0.3s ease;
               

            }
            .menu-btn.active{
                z-index: 999;
                background: url(back.png)no-repeat;
                background-size: 25px;
                background-position: center;
                transition: 0.3s ease;
                
            }
        
        
        

       </style>
</head>
<body>
<header>
    <a href="logo-removebg-preview.png" class="brand">RGUKT-B</a>
    
    <div class="menu-btn "></div>
    <div class="navigation ">
        <div class="navigation-items">
         <a href="welcome.php">Home</a>   
         <a href="explore.php">Explore</a>
         <a href="gallery.php">Gallery</a>
         <a href="contact.php">Contact Us</a>
         <a href="logout.php">Logout</a>
        </div>
        </div> 
</header>
<section class="home">
    <video class ="video-slide" src="db.mp4" autoplay muted loop></video>
    <div class="content">
    <h1>Alumni<br><span>Management</span></h1>
    <p>This website is aimed at developing a repository for the alumni of the college, which is of importance to a college.  Anyone can access the Search Engine to know about any Alumni of our college but can't able to add. Alumni can only update the database when they are in the college.The website is envisaged to be completed in two phases. The initial phase will be the creation of a simple system that will be used to capture data from current final year students before the end of term. The second phase of development will extend the functionality of the system to allow past alumni to register.</p>
    <a href="configuration.php">Open</a>
    </div>
   
</section>
<script type="text/javascript">
  const menuBtn = document.querySelector(".menu-btn"); 
  const navigation = document.querySelector(".navigation");
  
  menuBtn.addEventListener("click", () =>{
    menuBtn.classList.toggle("active");
    navigation.classList.toggle("active");
  });

   

</script>
</body>
</html>