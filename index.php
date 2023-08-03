<?php
    include('php/conexao.php');
    $result = mysqli_query($conn, "SELECT * FROM cards WHERE position = 'promocional'");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/zeus_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Blitz</title>
</head>
<body>
    <div id="page_content">
        <header>
            <nav>
                <a href="">
                <div class="logo">
                    <img src="img/zeus_logo.png" alt="" width="90px" height="90px" class="logo">
                </div>
                </a>
                <ul>
                    <a href="#"><li>Home</li></a>
                    <a href="pagina/catalog.php"><li>Jogos</li></a>
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

            <section class="container">
                <div class="slider-wrapper">
                    <div class="slider">
                        <img id="slide-1" src="https://images.unsplash.com/photo-1656464868371-602be27fd4c2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80" alt="3D rendering of an imaginary orange planet in space" />
                        <img id="slide-2" src="https://gearbox.imgix.net/https%3A%2F%2Fix-www.imgix.net%2Fsolutions%2Fwindmills.jpg?q=100&auto=format&fm=pjpg&fit=crop&w=456&h=342&ixlib=js-2.0.0&s=4478dd27bd60612e2d73f9a006724b71" alt="3D rendering of an imaginary green planet in space" />
                        <img id="slide-3" src="https://images.unsplash.com/photo-1656077217715-bdaeb06bd01f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80" alt="3D rendering of an imaginary blue planet in space" />
                        <img id="slide-1" src="https://images.unsplash.com/photo-1656464868371-602be27fd4c2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80" alt="3D rendering of an imaginary orange planet in space" />
                        <img id="slide-2" src="https://gearbox.imgix.net/https%3A%2F%2Fix-www.imgix.net%2Fsolutions%2Frabbit.jpg?cs=strip&auto=format&fm=pjpg&fit=crop&w=456&h=342&ixlib=js-2.0.0&s=014122dcc5df82b4f77c3b6f52c1a4c4" alt="3D rendering of an imaginary green planet in space" />
                    </div>
                    <div class="slider-nav">
                        <a href="#slide-1"></a>
                        <a href="#slide-2"></a>
                        <a href="#slide-3"></a>
                        <a href="#slide-1"></a>
                        <a href="#slide-2"></a>
                    </div>
                </div>

                <script src="js/script.js"></script>
            </section>

            <h2><div class="title">Promoções</div></h2>

            <section>
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
            </section>

            <div id="more--link"><a href="pagina/catalog.php" id="btn_link">Mais Jogos 🠖</a></div>
            <br><br><b></b><br><br><b></b>
            <br><br><b></b><br><br><b></b>
            <br><br><b></b><br><br><b></b>
        </main>
        <footer></footer>
    </div>
</body>
</html>