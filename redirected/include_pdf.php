<?php
  header( "refresh:5;url=wherever.php" );
  echo 'You\'ll be redirected in about 5 secs. If not, click <a href="wherever.php">here</a>.';
?> 
<?php
// We'll be outputting a PDF
header('Content-Type: application/pdf');

//this is fucking awesome. now to think how to use this
// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="book.pdf"');

// The PDF source is in original.pdf
readfile('digital_book_which_is_cool.pdf');
?>
