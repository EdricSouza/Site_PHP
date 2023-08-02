<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/zeus_logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/cards.css">
    <title>Jogos</title>
</head>
<body>
    <div id="page_content">
        <header>
            <nav>
                <a href="">
                <div id="logo">
                    <img src="../img/zeus_logo.png" alt="" width="90px" height="90px" class="logo">
                    <h1>Blitz</h1>
                </div>
                </a>
                <ul>
                    <a href="../index.php"><li>Home</li></a>
                    <a href="catalog/game.php"><li>Jogos</li></a>
                    <a href=""><li>Sobre</li></a>
                    <a href=""><li>Suporte</li></a>
                    <li id="row"><a href=""></a></li>
                </ul>
            </nav>
        </header>
        <main>
            <br>
            <form action="" method="post">
                <input type="text" placeholder="Buscar" id="search">
            </form>

            <h2><div class="title">Todos os jogos</div></h2>

            <?php
                include('../php/conexao.php');
                $result = mysqli_query($conn, "SELECT * FROM cards");
            ?>

            <div id="wrapper">
                
                <?php $reversedResult = array_reverse(mysqli_fetch_all($result, MYSQLI_ASSOC));
                foreach ($reversedResult as $row) {?>
                        
                            <div class="cards">
                            <a href="pag_game.php?id= <?= $row["name"]; ?>" class="link">
                                <h3><?php echo $row['name']; ?></h3>
                                    <div class="img">
                                        <img src="<?php echo $row['img']; ?>" alt="jogo_<?php echo $row['name']; ?>" width="190px" height="267px">
                                    </div>
                                <h3>R$ <?php echo $row['price']; ?></h3>
                                </a>
                            </div>
                
                <?php } ?>

            </div>
        </main>
        <footer></footer>
    </div>
</body>
</html>