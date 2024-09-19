<?php 
$name=$_POST['name'];
$job=$_POST['job'];
$about=$_POST['About'];
$communication1 =$_POST['communication1'];
$communication2 =$_POST['communication2'];
$communication3 =$_POST['communication3'];
$url1 =$_POST['url1'];
$url2 =$_POST['url2'];
$url3 =$_POST['url3'];
$Image =$_FILES['img'];
$skill1=$_POST['skill1'];
$skill2=$_POST['skill2'];
$skill3=$_POST['skill3'];
$skill4=$_POST['skill4'];
$nskill1=$_POST['nskill1'];
$nskill2=$_POST['nskill2'];
$nskill3=$_POST['nskill3'];
$nskill4=$_POST['nskill4'];
$img_courent_location = $Image['tmp_name'];
$new_name= $Image['name'];
$location = "./file/$new_name";
move_uploaded_file($img_courent_location, $location);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo $location; ?>" type="image/x-icon">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/all.css">
    <link rel="stylesheet" href="./main.css">
    <title><?php echo $name?></title>
</head>
<body>
<div class="container-sm|md|lg|xl|xxl text-light">
        <aside class="d-flex flex-sm-column justify-content-evenly col-12 col-sm-1 h-auto h-sm-100 position-fixed text-light pe-2 z-1">
            <img src="<?php echo $location ?>" class="d-none d-sm-block mb-4" alt="photo" id="img1">
            <a href="#HOME" class="btn text-light d-sm-flex flex-column my-5" id="a1"><i class="fa-solid fa-house-chimney d-none d-sm-block mx-sm-auto"></i>HOME</a>
            <a href="#ABOUT" class="btn text-light d-sm-flex flex-column my-5" id="a1"><i class="fa-solid fa-user d-none d-sm-block mx-sm-auto"></i>ABOUT</a>
            <a href="#CONTACT" class="btn text-light d-sm-flex flex-column my-5" id="a1"><i class="fa-regular fa-envelope d-none d-sm-block mx-sm-auto"></i>CONTACT</a>
        </aside>
        <section class="pt-3 text-bg-dark col-12 coll-sm-11">
            <div class="container" id="HOME">
                <img src="<?php echo $location ?>" alt="photo" id="img2" class="anm img-fluid pe-5 w-100">
                <h1 class="d-flex justify-content-center my-5 my-md-3"><?php echo $name; ?></h1>
                <p class="d-flex justify-content-center"><?php echo $job;?></p>
            </div>
            <div class="container">
                <h3 class="ps-5">About Him</h3>
                <hr style="width: 20%;">
                <p style="opacity: 0.4;" class="ps-5" id="ABOUT"><?php echo $about?></p>
                <h3 class="ps-5">My Skills</h3>
                <div class=" d-flex justify-content-center">
                <div class="d-flex col-6 justify-content-evenly my-3">
                    <i class="disl ic1 fa-brands fa-<?php echo $skill1; ?>" title="<?php echo $skill1; ?>"></i>
                    <i class="disl ic2 fa-brands fa-<?php echo $skill2; ?>" title="<?php echo $skill2; ?>"></i>
                    <i class="disr ic3 fa-brands fa-<?php echo $skill3; ?>" title="<?php echo $skill3; ?>"></i>
                    <i class="disr ic4 fa-brands fa-<?php echo $skill4; ?>" title="<?php echo $skill4; ?>"></i>
                </div>
                </div>
                <p id="f" class="ps-5"><?php echo $skill1;?></p>
                <div class="progress w-75 ms-5 bg-light">
                    <div class="ptogress-bar bg-primary" style="width:<?php echo $nskill1; ?>%;"></div>
                </div>
                <p id="f" class="ps-5 pt-2"><?php echo $skill2;?></p>
                <div class="progress w-75 ms-5 bg-light">
                    <div class="ptogress-bar bg-primary" style="width:<?php echo $nskill2; ?>%;"></div>
                </div>
                <p id="f" class="ps-5 pt-2"><?php echo $skill3;?></p>
                <div class="progress w-75 ms-5 bg-light">
                    <div class="ptogress-bar bg-primary" style="width:<?php echo $nskill3; ?>%;"></div>
                </div>
                <p id="f" class="ps-5 pt-2"><?php echo $skill4;?></p>
                <div class="progress w-75 ms-5 bg-light">
                    <div class="ptogress-bar bg-primary" style="width:<?php echo $nskill4; ?>%;"></div>
                </div>
                
                <footer id="CONTACT" class="container-xxl w-100 d-flex justify-content-evenly mt-5 py-3 mb-1 text-bg-secondary">
                <?php if($url1){?>
                    <a href="<?php echo $url1; ?>" target="_blank"><i id="icon" class="fa-brands fa-<?php echo $communication1; ?>"></i></a>
                    <?php }?>
                    <?php if($url2){?>
                    <a href="<?php echo $url2; ?>" target="_blank"><i id="icon" class="fa-brands fa-<?php echo $communication2; ?>"></i></a>
                    <?php }?>
                    <?php if($url3){?>
                    <a href="<?php echo $url3; ?>" target="_blank"><i id="icon" class="fa-brands fa-<?php echo $communication3; ?>"></i></a>
                    <?php }?>
                </footer>
            </div>
        </section>
    </div>
<script src="./main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>