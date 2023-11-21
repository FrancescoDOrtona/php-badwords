<?php

$text = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam velit et error esse, nam reiciendis dolor nisi. Molestias voluptate asperiores corrupti voluptatem, fugiat rem quidem id blanditiis ducimus, soluta ratione at ab? Omnis perferendis accusantium dolorum modi non esse quod doloribus repellat quidem corrupti quae, magni ea quibusdam blanditiis laborum ullam fugit tempore ipsa totam explicabo amet aspernatur ipsum expedita! Expedita nulla iste sit sapiente a culpa vitae minima doloremque excepturi dignissimos voluptatum nisi nemo dolorem voluptatem veritatis laudantium sint assumenda error fugit eum ratione, optio tempora? Quae modi minima quis, ex mollitia veritatis eum sapiente voluptas cumque necessitatibus soluta voluptatem accusamus hic iusto laboriosam? Inventore, veritatis amet quaerat dolores temporibus saepe itaque perspiciatis exercitationem sint consectetur tenetur aspernatur odio officia vero, nulla at provident natus? Minima porro consequuntur ducimus reiciendis, totam dolor fugit nihil quod, accusantium corporis atque, officia quidem? Distinctio est a, vero quidem, animi dolorem optio deleniti, eius eaque molestias nam omnis eos aut perferendis esse! Iusto enim autem delectus, ipsa minus suscipit dolore incidunt quasi repellat. Eos aspernatur aut ea modi alias veritatis? Ad harum optio consectetur non exercitationem commodi eveniet, itaque voluptates quasi quam repellat velit magni atque dignissimos modi voluptatibus illo eos voluptatem sunt accusamus. Ea recusandae deserunt porro. Exercitationem libero numquam labore rem animi facilis. Ipsa ipsum nobis laboriosam rem excepturi minus labore consectetur itaque delectus quod ab sed, libero repellat ratione at molestias porro a! Iure neque at repellat magnam unde optio praesentium tempore, ex corrupti, quae aut molestiae a ipsum aliquid nisi doloremque esse accusamus nam atque veniam eaque provident corporis cum maiores. Soluta itaque harum perspiciatis non deserunt voluptatum quam quia odio ad adipisci, praesentium incidunt magnam fugit eligendi! Delectus, incidunt quae alias, dignissimos accusantium nulla velit provident officia adipisci quod ad magnam expedita repudiandae nesciunt obcaecati voluptas sed! Nobis!';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Censura una parola</h1>
    <h4>Scegli una parola da censurare nel testo e scrivila nel campo sottostante</h4>
    <p>
        <?php echo $text ?>
    </p>
    <small>Il testo è lungo <?php echo strlen($text); ?> caratteri</small>
    <form action="text.php">
        <input type="text" placeholder="Inserisci qui la parola">
        <input type="submit" value="Invia">
    </form>
</body>
</html>