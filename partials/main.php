<main>
    <?php foreach ($database as $card) { ?>
        <div class="card">
            <img class="poster" src=<?php echo $card["poster"] ?> alt="">
            <h2 class="title"><?php echo $card["title"] ?></h2>
            <p><?php echo $card["author"] ?></p>
            <p><?php echo $card["year"] ?></p>
        </div>
    <?php } ?>
</main>