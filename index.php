

<?php
/*

Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

*/


echo"<pre>";
var_dump($_GET);
echo"</pre>";

$censura= $_GET['censura'];

$testo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, ut, optio repellendus quis itaque eius cumque autem eveniet fuga blanditiis esse iusto facere assumenda tempore quisquam nihil enim odio corporis omnis quasi, hic velit? Laboriosam totam quisquam quaerat assumenda hic distinctio sint laudantium eum ipsum, consequatur dicta amet odit, expedita quae ipsa velit officia, voluptas quidem. Cupiditate suscipit atque aperiam ratione dolorum cumque odio. Tempore quis dicta esse quos pariatur veritatis blanditiis nobis repellendus eaque dolor explicabo autem laboriosam eum, nostrum dolorum fugit odio? Recusandae suscipit nam, reprehenderit quasi repellat officia quidem nostrum? Alias, illo deleniti. Aut quas vel veniam.";

$lunghezza=strlen($testo);

$testo_censurato=str_replace( $censura, '***', $testo );

$lunghezza_censurata=strlen($testo_censurato);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-Badwords</title>
</head>
<body>
  <h1>PHP Badwords</h1>

  <hr>
  <h2>Testo non censurato</h2>
  <p>
    <?php echo $testo; ?>
  </p>
  <p> la lunghezza di questo testo è di <strong> <?php echo $lunghezza; ?> </strong> </p>

  <hr>

  <h2>Testo censurato</h2>
  <p><?php echo $testo_censurato; ?></p>
  <p> la lunghezza di questo testo è di <strong> <?php echo $lunghezza_censurata; ?> </strong> </p>

  <hr>
</body>
</html>