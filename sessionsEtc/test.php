<!DOCTYPE html>
<html>
<head>
	<title>
  </title>
</head>
<body>
  <meta name="keywords" content="Mac user Ultan Casey TheCompuGeeks UltanKC">
  <title>Ultan.me - <?echo $title;?></title>

  <link rel="stylesheet" href="css/styles.css" type="text/css" />
  <script type="text/javascript"
  src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
  <script type="text/javascript"
  src="js/jquery.labelify.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $(":text").labelify();
  });
  </script>
  <style>
  a {text-decoration:none}

  </style>
  </head>
  <body>
  <div id="main">

  <!-- Menu Start -->
  <div id="menu">
  <ul>
  <li><a href="index.php">home</a></li>
  <li><a href="index.php">about me</a></li>
  <li><a href="index.php">archives</a></li>
  <li><a href="index.php">contact</a></li>
  <li><a href="index.php">gallery</a></li>

  </ul>
  </div>
  <!-- Menu End -->

  <img src="images/banner.png" />
  <div id="content">
  <div id="posts">
  <?php

  if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
      die("Invalid ID specified.");
  }

  $id = (int)$_GET['id'];
  $sql = "SELECT * FROM php_blog WHERE id='$id' LIMIT 1";

  $result = mysql_query($sql) or print ("Can't select entry from table php_blog.<br />" . $sql . "<br />" . mysql_error());

  while($row = mysql_fetch_array($result)) {

      $date = date("l F d Y", $row['timestamp']);

      $title = stripslashes($row['title']);
      $entry = stripslashes($row['entry']);
      $get_categories = mysql_query("SELECT * FROM php_blog_categories WHERE `category_id` = $row[category]");
      $category = mysql_fetch_array($get_categories);


      ?>
  <p><?php echo "<p id='post-title'><strong><a href=\"post.php?id=". $id . "\">" . $title . "</a></strong></p>"; ?><br /><br />
  <div id="entry"><?php echo $entry; ?>
  </div><br /><br />
  <p id="date">Posted in <a href="category.php?category=<?php echo $row['category']; ?>"><?php echo $category['category_name']; ?></a> on <?php echo $date; ?></p>
  </p>
  <h2 id="share-title">Share This Post</h2>
  <div id="social-share">
  <li id="link-right"><a href="http://twitter.com/home?status=
  I just read <?php echo $title; ?> at http://ultan.me/post.php?id=<?php echo $id; ?>"><center>Twitter</center></a></li>
  <li id="link-left"><a href="http://digg.com/submit?url=http://ultan.me/post.php?id=<?php echo $id; ?>"><center>Digg</center></a></li>
  <br>
  <li id="link-right"><a href="http://www.facebook.com/sharer.php?u=http://ultan.me/post.php?id=<?php echo $id; ?>&t=<?php echo $title; ?>"><center>Facebook</center></a></li>
  <li id="link-left"><a href="http://www.google.com/buzz/post?url=http://ultan.me/post.php?id=<?php echo $id; ?>
  "><center>Google Buzz</center></a></li>
  <div class="clr"></div>
  </div>
  <h2 id="comments-title">Comments</h2>
   <div id="comment-list">
      <?php

  }
  $commenttimestamp = strtotime("now");

  $sql = "SELECT * FROM php_blog_comments WHERE entry='$id' ORDER BY timestamp";
  $result = mysql_query ($sql) or print ("Can't select comments from table php_blog_comments.<br />" . $sql . "<br />" . mysql_error());
  while($row = mysql_fetch_array($result)) {
      $timestamp = date("l F d Y", $row['timestamp']);
        printf("<div class='comment-ind'><p id='comments'><a id='username' href=\"%s\">%s</a> %s</p>", stripslashes($row['url']), stripslashes($row['name']), $timestamp);
      print("<p class='comments'>" . stripslashes($row['comment']) . "</p><div class='clr'><br></div></div>");

    }
  ?>
  <div class="clr"></div>
  <form id="commentform" method="post" action="process.php">

  <p><input type="hidden" name="entry" id="entry" value="<?php echo $id; ?>" />

  <input type="hidden" name="timestamp" id="timestamp" value="<?php echo $commenttimestamp; ?>">

  <input type="text" name="name" id="name" title="Name (required)" /><br />

  <input type="text" name="email" id="email" title="Mail (will not be published) (required)" /><br />

  <input type="text" name="url" id="url" title="Website" value="http://" /><br />

  <br />
  <textarea  title="Your Comment Goes Here" name="comment" id="comment"></textarea></p>

  <p><input type="submit" name="submit_comment" id="submit_comment" value="Add Comment" /></p>

  </form>
  </div>
  <div id="pages">

  <?php
  $total_results = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS num FROM php_blog"));
  $total_pages = ceil($total_results['num'] / $blog_postnumber);
  if ($page > 1) {
      $prev = ($page - 1);
      echo "<a href=\"?page=$prev\">&lt;&lt;  Newer</a> ";
  }
  for($i = 1; $i <= $total_pages; $i++) {
      if ($page == $i) {
          echo "$i ";
      }
      else {
          echo "<a href=\"?page=$i\">$i</a> ";
      }
  }
  if ($page < $total_pages) {
     $next = ($page + 1);
     echo "<a href=\"?page=$next\">Older &gt;&gt;</a>";
  }

  ?>
  </div>
  </div>
  </div>
  <!-- Sidebar Start -->
  <div class="sidebar">

  <!-- Item 1 -->
  <div id="side-item">
  <h2>
  <a href="http://www.dailybooth.com/UltanCasey">
  <img src="images/db-icon.jpg">Dailybooth
  </a></h2>
  <div id="side-item-content">
  <center>
  <img src="http://dailybooth.com/UltanCasey/latest/medium.jpg" />
  </center>
  </div>

  </div>

  <!-- Item 2 -->

  <div id="side-item">
  <h2><img src="images/connect.jpg" />Connect</h2>
  </div>
  <div id="side-item-content">
  <div class="tweet-title"><p><a href="http://www.twitter.com/UltanKc">Latest Tweet:</a></p></div>
  <div id="tweet">
  <?php

  function getTwitterStatus($userid){
  $url = "http://twitter.com/statuses/user_timeline/$userid.xml?count=1";

  function auto_link_twitter ($text)
  {
      // properly formatted URLs
      $urls = "/(((http[s]?:\/\/)|(www\.))?(([a-z][-a-z0-9]+\.)?[a-z][-a-z0-9]+\.[a-z]+(\.[a-z]{2,2})?)\/?[a-z0-9._\/~#&=;%+?-]+[a-z0-9\/#=?]{1,1})/is";
      $text = preg_replace($urls, " <a href='$1'>$1</a>", $text);

      // URLs without protocols
      $text = preg_replace("/href=\"www/", "href=\"http://www", $text);

      // Twitter usernames
      $twitter = "/@([A-Za-z0-9_]+)/is";
      $text = preg_replace ($twitter, " <a href='http://twitter.com/$1'>@$1</a>", $text);

      // Twitter hashtags
      $hashtag = "/#([A-Aa-z0-9_-]+)/is";
      $text = preg_replace ($hashtag, " <a href='http://hashtags.org/$1'>#$1</a>", $text);
      return $text;
  }

  $xml = simplexml_load_file($url) or die("could not connect");

         foreach($xml->status as $status){
         $text = $status->text;
         }
         echo auto_link_twitter ($text);
   }


  getTwitterStatus("UltanKC");

  ?>
  </div>
  <br>
  <ul>
  <li id="social"><a href="#">YouTube</a></li>
  <li id="social"><a href="#">Twitter</a></li>
  <li id="social"><a href="#">LastFM</a></li>
  <li id="social"><a href="#">Email</a></li>
  </ul>

  </div>
  <!-- Item 2 End-->
  <div id="side-item">
  <h2><img src="images/archive.jpg" />Archives</h2>
  </div>
  <div id="archive-side">
  <?php
  mysql_connect ('localhost', 'root', 'root') ;
  mysql_select_db ('ultankc');

  $result = mysql_query("SELECT FROM_UNIXTIME(timestamp, '%Y') AS get_year, COUNT(*) AS entries FROM php_blog GROUP BY get_year");

  while ($row = mysql_fetch_array($result)) {
      $get_year = $row['get_year'];
      $entries = $row['entries'];

      echo "<li id='tag'><a href=\"archives.php?year=" . $get_year . "\">Entries from " . $get_year . "  (" . $entries . ")<br /></a></li>";
  }

  $result1 = mysql_query("SELECT * FROM php_blog_categories ORDER BY category_name ASC");

  while($row = mysql_fetch_array($result1)) {

      $result2 = mysql_query("SELECT COUNT(`id`) AS entries FROM php_blog WHERE category = $row[category_id]");
      $num_entries = mysql_fetch_array($result2);

      echo '<li id="tag"><a href="category.php?category=' . $row['category_id'] . '">' . $row['category_name'] . ' (' . $num_entries['entries'] . ')</a></li>';

  }
  ?>
  </div>

  </div>

  <div class="clr" />
  </div>
  <!-- Sidebar End  -->
  <div id="footer">
  <p> &copy; Ultan Casey 2010</p>
  <p style="margin-top: -18px; float:right"><a href="index.php">Home</a> | <a href="about.php">About Me</a> | <a href="mailto:ultankc@thecompugeeks.com">Email Me</a></p>
  </div>
  </div>
  </div>
  </body>
  </html>
  ?>
