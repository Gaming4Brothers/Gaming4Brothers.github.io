<!DOCTYPE html>
<html>
  <body>
    <?php
      if($_POST['von']!="" and $_POST['mail']!="" and $_POST['betreff']!="" and $_POST['nachricht']!="") {
      $empf = "questions2help@gmail.com";
      $betreff = $_POST['betreff'];
      $from = "FROM: ";
      $from .= $_POST['von'];
      $from .= " <";
      $from .= $_POST['mail'];
      $from .= ">\n";
      $from .= "Reply-To: ";
      $from .= $_POST['mail'];
      $from .="\n"
      $from .= "Content-Type: text/html\n";
      $text .= $_POST['nachricht'];

      mail($emp, $betreff, $text, $from);
      echo "Vielen Dank";
    } else {
      echo "Bitte alle Felder ausf&uuml;llen...";
    }
     ?>
  </body>
</html>
