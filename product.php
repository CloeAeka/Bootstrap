<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="product.css">
    
    <title>Fashion UINITY product</title>
</head>

<body>
    <?php include("menu.php");?>

    <main>
        <!--titre femme start-->
        <div class="container">
            <div class="row">
              <div class="col">
               
              </div>
              <div class="col-6 text-center"> <br> <br>
                <h2>Fashion product name</h2>
                <p>Women/Dress</p>
              </div>
              <div class="col">
                
              </div>
            </div>
        </div>
        <!--titre femme end-->

    
        <div class="container">
            <div class="row">
                
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"> <!--colonne gauche-->
                    <img src="immg/robe.jpg" alt="robe">
                    <img src="immg/articles robes2.png" class="mt-5" alt="robe couleur">
                </div>
                    
                
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"><!--colonne droite-->

                    <!--price start-->
                    <div class="row">
                        <div class="col-12">
                            <b class="fs-4">$500</b>
                            <span class="badge bg-danger">30% Off</span> 
                            <span class="text-secondary">5 pièces left</span> <br>

                            <div class="col-12"></div>
                            <p class="text-decoration-line-through text-secondary text-start">$1000</p>
                            <div class="row border secondary"></div>               
                        </div>
                    </div>
                    <!--price end-->

                    <p class="text-start">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit... </p>

                    <!--size start-->
                    <div class="row justify-content-between">
                        <div class="col-6">
                        <p class="text-start">Size</p>
                        </div>

                        <div class="col-6 text-end">
                        <button type="button" class="btn btn-outline-dark">S</button>
                        <button type="button" class="btn btn-dark">M</button>
                        <button type="button" class="btn btn-outline-dark">L</button>
                        <button type="button" class="btn btn-outline-secondary">XL</button>
                        </div>
                    </div>
                    <!--size end-->

                    <!--color start-->
                    <div class="row justify-content-between">
                        <div class="col-6 mt-2">
                        <p class="text-start">Color</p>
                        </div>

                        <div class="col-6 mt-2 text-end">
                            <button type="button" class="mybutton rounded-circle btn btn-warning rose"></button>
                            <button type="button" class="mybutton rounded-circle btn btn-warning"></button>
                            <button type="button" class="mybutton rounded-circle btn btn-danger"></button>
                        </div>
                    </div>
                    <!--color end-->

                    <!--quantité start-->
                    <div class="row justify-content-between">
                        <div class="col-6 mt-2">
                        <p class="text-start">Quantity</p>
                        </div>

                        <div class="col-6 mt-2 text-end">
                            <div class="dropdown">
                                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  Quantity
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="#">1</a></li>
                                  <li><a class="dropdown-item" href="#">2</a></li>
                                  <li><a class="dropdown-item" href="#">3</a></li>
                                  <li><a class="dropdown-item" href="#">4</a></li>
                                  <li><a class="dropdown-item" href="#">5</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--quantité start-->

                    <!--shipping start-->
                    <div class="row justify-content-between">
                        <div class="col-6 mt-2">
                            <p class="text-start">Color</p>
                        </div>

                        <div class="col-6 mt-2 text-end">
                            <p class="happy">US & Canada <span class="badge bg-success">FREE SHIPPING</span> <br>
                            $10 Worldwide</p>
                        </div>
                    </div>
                    <!--shipping end-->

                    <!--button ADD-->
                    <div class="row ">
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-dark text-start">ADD TO MY CART
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!--button ADD-->

                    <!-- reseaux-->
                    <div class="row mt-2">
                        <div class="col-12">
                           <p class="text-secondary text-start" > Share On :</p> 

                            <div class="col-12 mt-2">
                            <button type="button" class="btn btn-outline-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                              </svg></button>
                            <button type="button" class="btn btn-outline-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                              </svg></button>
                            <button type="button" class="btn btn-outline-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                              </svg></button>
                            </div> 
                        </div>
                    </div>
                    <!-- reseaux-->

                    <!--paragraphe product-->
                    <div class="row ">
                        <div class="col-12">
                            <p class="fs-4 text-start mt-5">Product Detail</p>
                        </div>
                    </div>    
                    <div class="row border secondary"></div> 

                    <p class="text-start mt-2">Lorem ipsum dolor sit amet, tellus enim, varius nec magna lobortis neque, aenean tempor, arcu magnam nisl nulla a, sed nec. Ac elit consequat et integer. Sed in lobortis. Pulvinar nulla viverra orci ullamcorper faucibus fermentum,</p> <br>
                    <p class="text-start mt-2">Tincidunt vitae eget, vivamus velit viverra. Magnis scelerisque posuere hymenaeos quis ut non. llamcorper faucibus fermentum, tincidunt vitae eget, vivamus velit viverra. Magnis scelerisque posuere hymenaeos quis ut non. </p>
                     <!--paragraphe product-->

                    <!--paragraphe size-->
                    <div class="row">
                        <div class="col-12">
                            <p class="fs-4 text-start mt-5">Size</p>
                    </div>    
                        <div class="row border secondary"></div> 

                    <!--TABLEAU-->
                    <table class="table mt-4 table-striped">
                            <thead>
                              <tr>
                                <th scope="col">Size</th>
                                <th scope="col">Shoulder</th>
                                <th scope="col">Armhome</th>
                                <th scope="col">Sleeve</th>
                                <th scope="col">Cuff</th>
                                <th scope="col">Bust</th>
                                <th scope="col">Lenght</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">S (Small)</th>
                                <td>24</td>
                                <td>20</td>
                                <td>20</td>
                                <td>20</td>
                                <td>20</td>
                                <td>20</td>
                              </tr>
                              <tr>
                                <th scope="row">M (Medium)</th>
                                <td>24</td>
                                <td>20</td>
                                <td>20</td>
                                <td>20</td>
                                <td>20</td>
                                <td>20</td>
                              </tr>
                              <tr>
                                <th scope="row">L (Large)</th>
                                <td>24</td>
                                <td>20</td>
                                <td>20</td>
                                <td>20</td>
                                <td>20</td>
                                <td>20</td>
                              </tr>
                              <tr>
                                <th scope="row">XL (Extra Large)</th>
                                <td>24</td>
                                <td>20</td>
                                <td>20</td>
                                <td>20</td>
                                <td>20</td>
                                <td>20</td>
                              </tr>
                            </tbody>
                    </table>
                    <!--TABLEAU fin-->
                    
                    <!--FAQ-->
                    <div class="row">
                        <div class="col-12">
                            <p class="fs-4 text-start mt-5">FAQ</p>
                        </div>    

                        <div class="row border secondary"></div> 

                        <b class="text-start mt-2">Lorem ipsum dolor sit amet, tellus enim, varius nec magna lobortis neque ? </b> 
                        <p class="text-start">Tincidunt vitae eget, vivamus velit viverra. Magnis scelerisque posuere hymenaeos quis ut non. llamcorper faucibus fermentum, tincidunt vitae eget, vivamus</p>
           
                        <b class="text-start mt-2">Lorem ipsum dolor sit varius nec magna lobortis neque ? </b> 
                        <p class="text-start">incidunt vitae eget, vivamus velit viverra. Magnis scelerisque posuere hymenaeos quis ut non. llamcorper faucibus fermentum, </p>
                    </div> 
                    <!--FAQ-->

                    <div class="row">
                        <div class="col-12">
                            <p class="fs-4 text-start mt-5">You May Also Like</p>
                        </div> 
                        <div class="row border secondary"></div>
                        <img src="immg/articles robes.png" class="mt-5" alt="article">
                    </div>   
                    
                    

             </div><!--<--div à ne pas toucher-->
        </div><!--<--div à ne pas toucher-->
    </main>

    <footer>
        <div class="container mt-3">
            <div class="row justify-content-between">
                
                    <div class="col">
                        <a href="#" class="link-dark">About us</a>
                        <a href="#" class="link-dark">Contact us</a>
                    </div>
                    <div class="col">
                        <p class="text-secondary text-end happy">
                            &copy; Copyright 2016 Graphicstall. Trademark and brands are the property of their respective owners.
                        </p>
                    </div>
            </div>
        </div>
    </footer>


    


</body>