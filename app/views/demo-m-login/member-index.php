<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css' integrity='sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==' crossorigin='anonymous'/>
<style>
     *, *:before, *:after {
  box-sizing: bprder-box;
}
body {
  margin: 0;
  padding: 0;
  height: 300vh;
}
.inner img {
  width: 100%;
  height: 600px;
}
.topic {
  display: flex;
  background: grey;
  justify-content: space-between;
  height: 100px;
 
}
#headerTopicContainer {
  width: 100%;
  height: 600px;
  
}
.nav-wrapper.fixed{
    position: fixed;
    top:0;
    right:0;
    left:0;
   }

#navigation {
  width: 100%;
  height: 150px;
  
}

#navigation ul{
  display: flex;
  list-style-type: none;
  justify-content: flex-end;
 
  
}
#navigation ul li {
    margin: 10px auto;

}
#navigation ul li a {
  text-decoration:none;
  color: white;
  display: block;
  padding: 20px 30px;
  
}



</style>

<body>
<div id="headerTopicContainer">
   <div class="inner">
   <img class="imgtop" src="https://img.51miz.com/Element/00/96/02/58/bb24c244_E960258_3755dd98.jpg" alt="">
    </div>
 </div>
<header id="headerContainer">
  <div class="nav-wrapper">
    <div class="topic">
  <h1 id="siteID">
    <span class="small"></span>
  </h1>
  <nav id="navigation">
    <ul>
      <li><a class="btn btn-primary" href="./member-login.php">會員登入</a></li>
    </ul>
  </nav>
  </div>
  </div>
  
</header>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' integrity='sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==' crossorigin='anonymous'></script>

<script>
  let navtop = $('#headerContainer').offset().top;
$(window).scroll(function() {
  let scrollTop = $(this).scrollTop();
  if(navtop <= scrollTop) {
    $('.nav-wrapper').addClass('fixed');
  } else {
    $('.nav-wrapper').removeClass('fixed');
  }
})


</script>
</body>
</html>