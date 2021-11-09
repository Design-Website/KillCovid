<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Covid-19 Website Design Tutorial</title>
    
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">

    <!--link for api -->
    <!-- <link rel="" href="./covin/api.php"> -->
    
    <style>
        .live-case{
            margin-top:8.5rem;
            
        }
        table {
             border-collapse: collapse;
        }
    </style>
</head>
<body  >
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo"><span>kill</span> c<span class="fas fa-virus"></span>vid</a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="index.php">home</a></li>
            <li><a href="#protect">protect</a></li>
            <li><a href="#symtoms">symtoms</a></li>
            <li><a href="#prevent">prevent</a></li>
            <li><a href="api.php">spread</a></li>
            <li><a href="https://selfregistration.cowin.gov.in/">register</a></li>

        </ul>
    </nav>

</header>
<!-- header section ends -->

<div class="live-case" >
    <h1> Indias corona live Cases</h1>
    <table>
        <tr>
            <th>state</th>
             <th>lastupdate</th>
            <th>comformed</th>
            <th>active</th>
            <th>recovered</th>
            <th>death</th>
        </tr>
        <?php
            $data = file_get_contents('https://data.covid19india.org/data.json');
            $coronalive = json_decode($data,true);
            // echo "<pre>";
            // print_r($coronalive);
            // echo "</pre>";
            $statecount = count($coronalive['statewise']);

            // print_r( $statecount);

            $i = 1;
            while($i < $statecount){
            ?>

            <tr>
                <td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
                <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
                <td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
                <td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
                <td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
                <td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
                
            </tr>
                
                
                
                
                
                
            <?php   
            $i++;
            
            }

           
        ?>
        
    </table>

</div>







<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio rerum explicabo impedit aperiam non quod. Velit sunt voluptatem nemo beatae.</p>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">Maharastra</a>
            <a href="#">UP</a>
            <a href="#">Bihar</a>
            <a href="#">Dilhi</a>
            <a href="#">MP</a>
            <a href="#">Himachal</a>
            <a href="#">Panjab</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">protect</a>
            <a href="#">symtoms</a>
            <a href="#">prevent</a>
            <a href="#">spread</a>
            <a href="#">register</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-phone"></i> +123-456-7890. </p>
            <p> <i class="fas fa-envelope"></i> waradeservises@gmail.com </p>
            <p> <i class="fas fa-map-marker-alt"></i> Kurha Panche - 425311. </p>
            <div class="share">
                <a href="#" class="fab fa-youtube"></a>
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>

    </div>

    <h1 class="credit">Copyright <a href="#"> @ 2021 WaradeServises  </a> all rights reserved! </h1>

</section>

<!-- footer section ends -->

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="./javascript/script.js"></script>


</body>
</html>












<!-- 
 -->