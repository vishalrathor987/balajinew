    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/balaji/balaji.css">
    <link rel="stylesheet" href="phone.css">
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-red fixed-top" style="background-color: rgb(39, 39, 88);">
        <div class="container-fluid ">
          <a class="navbar-brand text-white" href="#">BALAJI MOBILES</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="index.html">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">TOP MODALS</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  OUR SERVISES
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">MOBILE-COVERS</a></li>
                  <li><a class="dropdown-item" href="#">SPEAKERS</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">SHOP DETIALS</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white">CONTACT US</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    
    
  <div class="product-page">
    <div class="container product-container">
        <div class="display">
            <div class="productitem">
                <img src="img/productimages/oppo/oppo-a57-na-original-1.jpeg" class="simg" onclick="clickimg(this)"><br>
                <img src="img/productimages/oppo/oppo-a57-na-original-2.jpeg" class="simg" onclick="clickimg(this)"><br>
                <img src="img/productimages/oppo/oppo-a57-na-original-1.jpeg" class="simg" onclick="clickimg(this)"><br>
            </div>
            <div class="box">
                <div class="produkt">
                    <img src="img/productimages/oppo/oppo-a57-na-original-1.jpeg" id="bimg">
                </div>
            <div class="textdt">
            <div class="brand">
                <p class="brandname">OPPO A32</p>
            </div>
            <div class="ram">
                <h2 class="rom">OPPO 32 (GOLD,64 GB)</h2>
            </div>
            <div class="reviwu">
                <span>(4.9)</span>
                <span class="fa fa-star"></span>
            </div><br>
            <div class="prize-box">
                <h3 class="prize">&#8377; 32,900</h3>
            </div>
            
               <p class="size"> Color:
                <select name="selectcolor">select color
                    <option value="Gold">Gold</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Black">Black</option>
                </select></p>
                <div class="quantity-box">
                    <p class="quantity">Quantity
                    <input type="number" size="1" value="0" class="text-center" id="qvalue">

                </div>
                
                    <button class="cart">
                        <span class="fa fa-shopping-cart">
                      Add to cart</span>
                    </button>
                    <button class="buy ">
                        <span class="fa fa-shopping-cart">
                        Buy Now</span>
                    </button>
                </div>
                </div>
            </div>
     
  </div>        

    <div class="container product-2">
      <div class="row">
        <div class="col-3 m-1 border text-center fs-3">
        <img src="img/productimages/samsung/samsung-galaxy-on5-sm-3.jpeg" class="product mx-auto d-block" id="pimg2" onclick="pimg2img(this)" alt="...">
         <a href="product.html"><h5 class="card-title">HEADPHONES</h5>
          <p class="card-text">content is a little bit longer.</p>
          <h3>Rs.800</h3> </a>
        </div>

        <div class="col-3 m-1 border text-center fs-3">
        <img src="img/productimages/lenova2/lenovo-k5-note-pa330010in-1.jpeg" class="product mx-auto d-block" id="pimg2" onclick="pimg2img(this)" alt="...">
         <a href="product.html"><h5 class="card-title">HEADPHONES</h5>
          <p class="card-text">content is a little bit longer.</p>
          <h3>Rs.800</h3> </a>
        </div>

        <div class="col-3 m-1  border text-center fs-3">
        <img src="img/productimages/micromax/micromax-canvas-mega-4g-1.jpeg" class="product mx-auto d-block" id="pimg2" onclick="pimg2img(this)" alt="...">
         <a href="product.html"><h5 class="card-title">HEADPHONES</h5>
          <p class="card-text">content is a little bit longer.</p>
          <h3>Rs.800</h3> </a>
        </div>
        <div class="col-3 m-1 border text-center fs-3">
        <img src="img/productimages/lenova2/lenovo-k5-note-pa330116in-3.jpeg" class="product mx-auto d-block" id="pimg2" onclick="pimg2img(this)" alt="...">
         <a href="product.html"><h5 class="card-title">HEADPHONES</h5>
          <p class="card-text">content is a little bit longer.</p>
          <h3>Rs.800</h3> </a>
        </div>
      </div>

      


      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
           
              <img src="img/productimages/headphones/head3.jpg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/headphones/head3.jpg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/headphones/head3.jpg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/headphones/head3.jpg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/headphones/head3.jpg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/headphones/head3.jpg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
          </div>
          <div class="carousel-item">
           
              <img src="img/productimages/headphones/head3.jpg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/headphones/head3.jpg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/headphones/head3.jpg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/headphones/head3.jpg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/headphones/head3.jpg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/headphones/head3.jpg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
          </div>
          <div class="carousel-item">
           
              <img src="img/productimages/lenova2/lenovo-k5-note-pa330116in-3.jpeg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/lenova2/lenovo-k5-note-pa330116in-3.jpeg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/lenova2/lenovo-k5-note-pa330116in-3.jpeg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/lenova2/lenovo-k5-note-pa330116in-3.jpeg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/lenova2/lenovo-k5-note-pa330116in-3.jpeg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
           
              <img src="img/productimages/lenova2/lenovo-k5-note-pa330116in-3.jpeg" class="ppt img-thumbnail" onclick="pimg2img(this)" alt="...">
            
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>



      
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>
</html>