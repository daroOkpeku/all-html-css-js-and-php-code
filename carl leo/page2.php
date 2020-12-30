<!DOCTYPE html>
<html>
<?php include('include.php'); ?>




<head>
  <title>buy me</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
  <link rel="stylesheet" type="text/css" href="page.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" type="text/css" href="mediaquery.css?v=<?php echo time(); ?>" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
  <div class="body">
    <div class="cover">
      <div class="inside">
        <div class="slider">
          <div class="jack">
            <button type="button" class="prevBtn">
              <i class="fa fa-angle-left"></i>
            </button>
            <button type="button" class="nextBtn">
              <i class="fa fa-angle-right"></i>
            </button>
          </div>
          <div class="slide">
            <img src=<?php echo $imageOne; ?> />
          </div>
          <div class="slide">
            <img src=<?php echo $imageTwo; ?> />
          </div>
          <div class="slide">
            <img src=<?php echo $imageThree; ?> />
          </div>
        </div>
        <article class="details">
          <ul class="in">
            <li>
              product name:
              <label><?php echo $name;


                      ?></label>
            </li>
            <li>
              price:
              <label><?php echo $price;


                      ?> naira</label>
            </li>
            <li>
              <?php echo $gender;

              ?> :
              <label>clothing</label>
            </li>
            <li>
              size available:
              <label>
                <button type="button" class="size">L</button>
                <button type="button" class="size">XL</button>
                <button type="button" class="size">XXL</button>
              </label>
            </li>
            <li>
              Colors Available:Red, Yellow, Black, White and Brown etc.
            </li>
            <li>
              <a href="orderform.php?item=<?php echo $name ?>"><button type="submit" class="buy" name="enter">Buy me

                </button></a>

            </li>
          </ul>
        </article>
      </div>
    </div>
    <div class="total">
      <header>
        <button class="link active" data-id="description">
          description
        </button>
        <button class="link" data-id="shipping">
          shipping
        </button>
        <button class="link" data-id="warranty">
          warranty
        </button>
      </header>
      <article class="road active" id="description">
        <h4>description</h4>
        <?php echo $desc; ?>
      </article>

      <article class="road" id="shipping">
        <h4>shipping</h4>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat
        nemo nam excepturi quidem doloribus praesentium, accusantium a at
        voluptatem voluptas fuga ut culpa veniam itaque fugiat temporibus, in
        quo molestias! Lorem ipsum dolor sit amet consectetur adipisicing
        elit. Repudiandae ipsum, ullam optio assumenda saepe nihil numquam
        natus nemo atque, autem ut at itaque rerum laboriosam ratione
        dignissimos, iusto dolore dicta!
      </article>

      <article class="road" id="warranty">
        <h4>warranty</h4>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat
        nemo nam excepturi quidem doloribus praesentium, accusantium a at
        voluptatem voluptas fuga ut culpa veniam itaque fugiat temporibus, in
        quo molestias! Lorem ipsum dolor sit amet consectetur adipisicing
        elit. Repudiandae ipsum, ullam optio assumenda saepe nihil numquam
        natus nemo atque, autem ut at itaque rerum laboriosam ratione
        dignissimos, iusto dolore dicta!
      </article>
    </div>
    <i class="down">Carl leo &copy;<span class="rod"></span> </i>
  </div>
</body>
<script type="module" src="design.js"></script>

</html>