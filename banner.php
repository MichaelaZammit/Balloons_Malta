<?php    
    include 'header.php';
?>




      <br>
      
      <div class="row">
        <div class="card" style="width: 18rem;">
          <img src="banner.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Banner</h5>
            <p class="card-text">50 euro</p>
            <a href="basket.php" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="banner.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Banner</h5>
            <p class="card-text">50 euro</p>
            <a href="basket.php" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="banner.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Banner</h5>
            <p class="card-text">50 euro</p>
            <a href="basket.php" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="banner.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Banner</h5>
            <p class="card-text">50 euro</p>
            <a href="basket.php" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>

        <br>
  
        <div class="row">
        <div class="card" style="width: 18rem;">
          <img src="banner.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Banner</h5>
            <p class="card-text">50 euro</p>
            <a href="basket.php" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="banner.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Banner</h5>
            <p class="card-text">50 euro</p>
            <a href="basket.php" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="banner.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Banner</h5>
            <p class="card-text">50 euro</p>
            <a href="basket.php" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="banner.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">Banner</h5>
            <p class="card-text">50 euro</p>
            <a href="basket.php" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>

        

        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 8px;
        }

        textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        button {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .comments {
            list-style: none;
            padding: 0;
        }

        .comment {
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            padding: 10px;
        }
    </style>

<div class="container">
        <form id="commentForm">
            <label for="commentText">Leave a comment:</label>
            <textarea id="commentText" name="commentText" rows="4" required></textarea>

            <button type="submit">Submit Comment</button>
        </form>

        <hr>

        <ul class="comments">
            <li class="comment">
                <p><strong>UserBalloon:</strong> This is great!</p>
            </li>
        </ul>
    </div>

        </body>

<?php
    include 'footer.php';
?>