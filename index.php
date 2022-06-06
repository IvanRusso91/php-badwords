

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

$testo_censurato=str_replace( $censura, '( *** )', $testo );

$lunghezza_censurata=strlen($testo_censurato);

//  -------------------------------------------------------------------------------

$blocco= $_GET['blocco'];

$testo_extra="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, quae repudiandae labore pariatur molestias a. Suscipit error possimus maiores dolores consequuntur debitis quo exercitationem? Illo, est debitis voluptates dolorem inventore nulla? Est vel odio perferendis repellendus sapiente obcaecati! Sint quidem rerum dolores! Distinctio eum sunt illum officiis fuga iure, quisquam natus, numquam architecto mollitia harum accusantium dolores maxime voluptatum, repellendus ex iste deleniti rem minus quam laboriosam. Assumenda quaerat, hic suscipit eum et ipsam ullam sunt adipisci voluptate repellendus aut fugiat architecto magnam unde doloremque impedit, sint eos sit fuga! Aliquid fugiat iure veniam, delectus, corporis ad animi rerum blanditiis, laboriosam exercitationem possimus? Nostrum sunt aspernatur ad culpa. Distinctio eius facere dolores explicabo esse non nisi aspernatur neque, ex sunt animi id adipisci ipsum. Porro, quam nostrum repellendus dignissimos doloremque fugiat recusandae pariatur perspiciatis nemo adipisci, ut velit iste voluptatum, quas magnam molestiae at! Nemo, asperiores laudantium debitis, neque perspiciatis sed exercitationem ut aperiam nobis, optio aspernatur. Nostrum tempora sint, perferendis incidunt provident labore eaque facilis, eveniet error vel natus veritatis impedit nobis aperiam nulla laborum. Magni nisi dolor dicta natus voluptatibus expedita at omnis, quam, eum molestiae voluptates consectetur necessitatibus ullam, commodi odit. Voluptatum, ex alias iure vero necessitatibus veritatis minus vitae aperiam delectus laudantium adipisci omnis porro et exercitationem nam in accusantium dolores optio deserunt numquam nulla voluptates tenetur. Laboriosam similique labore doloribus a quibusdam, nesciunt reprehenderit facere quam animi voluptate adipisci, itaque at illo inventore dolorum modi excepturi nemo delectus non? Voluptas nobis suscipit voluptates ea, quibusdam quae voluptate repellendus praesentium velit amet necessitatibus aspernatur sapiente molestias animi accusamus nisi minus dolores doloremque vero tempora recusandae assumenda error modi itaque. Ratione rerum quibusdam omnis exercitationem blanditiis fugit, facilis cupiditate sunt delectus consequuntur quis adipisci placeat esse ipsa mollitia animi illum in iusto. Ipsa rem quis deserunt earum alias, provident sint modi magnam quaerat cupiditate illo similique ratione, voluptates, iusto suscipit neque ab dolores sit nam adipisci quasi impedit eos at iure. Itaque atque doloribus labore dolorem, tenetur doloremque at aliquid possimus dolores optio ut, voluptas odio nesciunt velit laboriosam nisi expedita quos culpa consectetur placeat excepturi esse ab! Facilis voluptatibus quam assumenda unde inventore quo? Doloribus eos laudantium rerum error voluptates facilis. Expedita, eveniet. Sint velit exercitationem modi quia laudantium reprehenderit corrupti neque odio aperiam enim magni laboriosam harum illo eligendi quis fugit sequi sed inventore, quaerat at explicabo! Laboriosam hic blanditiis fugit ratione? Accusamus, commodi ipsam quaerat deserunt sit non obcaecati veniam? Veniam voluptatem, facilis impedit expedita id velit nesciunt quae labore quidem sunt debitis rem blanditiis ut! Blanditiis officia nesciunt cupiditate facere? Eaque atque amet necessitatibus suscipit aliquid ad doloremque officia, quo quibusdam temporibus ipsa cupiditate harum unde fugit tempora. Saepe obcaecati unde consequuntur beatae optio necessitatibus accusantium voluptate sapiente voluptates, omnis ab quod delectus dolore voluptatem mollitia rem impedit temporibus possimus vero in recusandae, qui eum. Laboriosam ipsa enim, expedita sunt aut atque voluptate eligendi eaque officia magnam eveniet quo quaerat quis et obcaecati facilis laudantium eius quidem aperiam magni! Sunt quis in sapiente.";


$lunghezza_extra= strlen($testo_extra);

$censurato_extra= str_replace( $blocco, '( XXX )', $testo_extra);

$extra_length= strlen($censurato_extra);


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

  <h2>Testo extra esteso</h2>
  <p><?php echo $testo_extra; ?></p>
  <p> la lunghezza di questo testo è di <strong> <?php echo $lunghezza_extra; ?> </strong> </p>

  <hr>

  <h2>Testo extra censurato</h2>
  <p><?php echo $censurato_extra; ?></p>
  <p> la lunghezza di questo testo è di <strong> <?php echo $extra_length; ?> </strong> </p>

  <hr>
</body>
</html>