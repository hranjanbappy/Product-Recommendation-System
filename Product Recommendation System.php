<!DOCTYPE html>
<h1>Product Recommendation for Customers</h1>
<hr>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<body>



    <?php

        class Book
        {
          public $title;
          public $friction;
          public $story;
          public $business;

          function __construct($title,$friction,$story,$business){
            $this->title = $title;
            $this->friction = $friction;
            $this->story = $story;
            $this->business = $business;
          }

        }


        //Adding 3 products in our store
        $book1 = new Book("Harry Potter",30,100,0);
        $book2 = new Book("Marter Psychology",100,30,0);
        $book3 = new Book("Startup Secrets",30,10,100);




    ?>

  <?php

    class Customer
    {
      public $name;
      public $frictionScore;
      public $storyScore;
      public $businessScore;

      function __construct($name,$frictionScore,$storyScore,$businessScore){
        $this->name = $name;
        $this->frictionScore = $frictionScore;
        $this->storyScore = $storyScore;
        $this->businessScore = $businessScore;
      }



    }
    //Set weight factors for previous purchases,wishlist & looked products
    $purchase = 1;
    $wishlist = 0.8;
    $looked = 0.5;

    //For Customer1 weighted sum of features
    //here book1 is purchaded , book2 is looked and book3 is in wishlist
    $frictionScoreSum1 = ($book2->friction*$looked + $book1->friction*$purchase +$book3->friction*$wishlist);
    $storyScoreSum1 = ($book2->story*$looked + $book1->story*$purchase +$book3->story*$wishlist);
    $businessScoreSum1 = ($book2->business*$looked + $book1->business*$purchase +$book3->business*$wishlist);

    //Let's add data for custormer1
    $customer1 = new Customer("Sonika",$frictionScoreSum1,$storyScoreSum1,$businessScoreSum1);

    //Let's find recommendation score for each book for custormer1
    $book1Score = ($customer1->frictionScore*$book1->friction + $customer1->storyScore*$book1->story + $customer1->businessScore*$book1->business);
    $book2Score = ($customer1->frictionScore*$book2->friction + $customer1->storyScore*$book2->story + $customer1->businessScore*$book2->business);
    $book3Score = ($customer1->frictionScore*$book3->friction + $customer1->storyScore*$book3->story + $customer1->businessScore*$book3->business);

    //let's find the score in percentage for each book for custormer1
    $maxScore = max($book1Score,$book2Score,$book3Score);
    $book1finalScore = ($book1Score/$maxScore)*100;
    $book2finalScore = ($book2Score/$maxScore)*100;
    $book3finalScore = ($book3Score/$maxScore)*100;

    //Now let's show the final result for custormer1
    echo "Recommentation for $customer1->name (Customer1):"."<br>";
    echo "$book1->title Book recomendation percentage is $book1finalScore.<br>";
    echo "$book2->title Book recomendation percentage is $book2finalScore.<br>";
    echo "$book3->title Book recomendation percentage is $book3finalScore.<br>";
    echo ".<br>";

    //For Customer2 weighted sum of features
    //here book2 is purchaded , book1 is looked and book3 is in wishlist
    $frictionScoreSum2 = ($book1->friction*$looked + $book2->friction*$purchase +$book3->friction*$wishlist);
    $storyScoreSum2 = ($book1->story*$looked + $book2->story*$purchase +$book3->story*$wishlist);
    $businessScoreSum2 = ($book1->business*$looked + $book2->business*$purchase +$book3->business*$wishlist);

    //Let's add data for custormer1
    $customer2 = new Customer("Ranjan",$frictionScoreSum2,$storyScoreSum2,$businessScoreSum2);
    //Let's find recommendation score for each book for custormer2
    $book1Score = ($customer2->frictionScore*$book1->friction + $customer2->storyScore*$book1->story + $customer2->businessScore*$book1->business);
    $book2Score = ($customer2->frictionScore*$book2->friction + $customer2->storyScore*$book2->story + $customer2->businessScore*$book2->business);
    $book3Score = ($customer2->frictionScore*$book3->friction + $customer2->storyScore*$book3->story + $customer2->businessScore*$book3->business);

    //let's find the score in percentage for each book for custormer1
    $maxScore = max($book1Score,$book2Score,$book3Score);
    $book1finalScore = ($book1Score/$maxScore)*100;
    $book2finalScore = ($book2Score/$maxScore)*100;
    $book3finalScore = ($book3Score/$maxScore)*100;

    //Now let's show the final result for custormer2
    echo "Recommentation for $customer2->name (Customer2):"."<br>";
    echo "$book1->title Book recomendation percentage is $book1finalScore.<br>";
    echo "$book2->title Book recomendation percentage is $book2finalScore.<br>";
    echo "$book3->title Book recomendation percentage is $book3finalScore.<br>";






   ?>






</body>
</html>
