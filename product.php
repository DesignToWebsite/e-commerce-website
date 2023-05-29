
<?php session_start(); ?>
<?php include_once("./c_config_mysql.php"); 
    include_once("./c_user.php");
    include_once("./c_variables.php");
?>

<?php 
//on récupére tous le contenu de la table
$product_sql = 'SELECT * FROM e_com.products p WHERE id = :id';
$product_statement = $my_sql_client->prepare($product_sql);
$product_statement->execute([
    'id' => $_GET['id'],
    ]
)or die(print_r($my_sql_client->errorInfo()));
$product = $product_statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include_once("./style.php"); ?>
</head>

<body>
  <!-- navbar  -->
  <?php
  include_once("./nav.php");
  include_once("./prod_nav.php");
  ?>

  <div class="container"> 
    <div class="product">
      <div class="img">
        <img src=<?php echo $product[0]['img'] ?> alt="">
      </div>
      <div class="content">
        <div>
          <h2><?php echo $product[0]['name'] ?></h2>
          <div class="star">
            <img src="./images/star_active.png" alt="">
            <img src="./images/star_active.png" alt="">
            <img src="./images/star_active.png" alt="">
            <img src="./images/star.png" alt="">
            <img src="./images/star.png" alt="">
          </div>
        </div>

        <div class="desc">
          <?php echo $product[0]['description']; ?>
        </div>
        <div>
          <p class="price">$<?php echo $product[0]['price']; ?></p>
          <a href="./shopping_card.php?id_add=<?php echo $prod['id'] ?>">
                            <button class="dark">ADD TO CARD</button>
                            </a>
        </div>
      </div>
    </div>
    <hr />
    <div class="feadbacks">
      <h2>Customer Feedback</h2>
      <div class="comments">
        <div class="feadback">
          <div class="content">
            <div class="img">
              <img src="./images/cl_8.jpg" alt="">
            </div>
            <div class="desc">
              <h3>Zineb ess</h3>
              <div class="star">
                <img src="./images/star_active.png" alt="">
                <img src="./images/star_active.png" alt="">
                <img src="./images/star_active.png" alt="">
                <img src="./images/star.png" alt="">
                <img src="./images/star.png" alt="">
              </div>
              <div class="comment">
                <p>Awsome products I love it</p>
              </div>
            </div>
          </div>
          <div class="time">
            <p>09/02/2023</p>
          </div>
        </div>
        <div class="feadback">
          <div class="content">
            <div class="img">
              <img src="./images/cl_8.jpg" alt="">
            </div>
            <div class="desc">
              <h3>Zineb ess</h3>
              <div class="star">
                <img src="./images/star_active.png" alt="">
                <img src="./images/star_active.png" alt="">
                <img src="./images/star_active.png" alt="">
                <img src="./images/star.png" alt="">
                <img src="./images/star.png" alt="">
              </div>
              <div class="comment">
                <p>Awsome products I love it</p>
              </div>
            </div>
          </div>
          <div class="time">
            <p>09/02/2023</p>
          </div>

        </div>
        <div class="feadback">
          <div class="content">
            <div class="img">
              <img src="./images/cl_8.jpg" alt="">
            </div>
            <div class="desc">
              <h3>Zineb ess</h3>
              <div class="star">
                <img src="./images/star_active.png" alt="">
                <img src="./images/star_active.png" alt="">
                <img src="./images/star_active.png" alt="">
                <img src="./images/star.png" alt="">
                <img src="./images/star.png" alt="">
              </div>
              <div class="comment">
                <p>Awsome products I love it</p>
              </div>
            </div>
          </div>
          <div class="time">
            <p>09/02/2023</p>
          </div>

        </div>
      </div>
    </div>
    <div class="add_review">
      <h2>Add a review</h2>
      <p>Your email address will not be published. Required fields are marked *</p>
      <form action="">
        <div class="rating my-3">
          <p> Your rating *</p>
          <div class="star" id="start">
            <img src="./images/star_r.png">
            <img src="./images/star_r.png">
            <img src="./images/star_r.png">
            <img src="./images/star_r.png">
            <img src="./images/star_r.png">
          </div>
        </div>
        <div class="input my-3">
          <label for="review">Your review *</label>
          <textarea name="review" id="review" required></textarea>
        </div>
        <div class="input my-3 input_two">
          <div>
            <label for="name">Name *</label>
            <input type="text" name="name" id="name">
          </div>
          <div>
            <label for="email">email *</label>
            <input type="email" name="email" id="email">
          </div>
        </div>
        <button class="submit">Submit</button>
      </form>


    </div>
    <hr>
    <div class="customersView">
      <h2>Customers Also Viewed</h2>
      <div class="products_section">
        <a href="./product.php">
          <div class="card card_prod">
            <div class="img">
              <img src="./images/cl_1.jpg" alt="">
            </div>
            <div class="description">
              <h3>
                awsome dress for...
              </h3>
              <p class="price">$82.5</p>
              <button class="btn-add">ADD TO CARD</button>
            </div>
          </div>

        </a>
      </div>
    </div>
  </div>



  <?php include_once("./footer.php") ?>

  <?php include_once("./script.php"); ?>
</body>

</html>