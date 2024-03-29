<?php require __DIR__ . '/header.php' ?>

<div class="container">
    <h2>Calculadora de Impostos</h2>

    <form action="index.php" method="post">
        <input type="text" name='productValue' placeholder='Valor do Produto'><br><br>

        <input type="text" name='taxValue' placeholder='Taxa de imposto(em %)'><br><br>

        <button>Calcular</button>
    </form>
</div>

<div class="container">
    <p>Valor final do Produto: <br>
        <span>
            <?php echo ($product->getTax()) ? $product->totalPrice() : '' ?>
        </span>
    </p>
    <p>Porcentagem do Imposto: <br>
        <span>
            <?php echo ($product->getTax()) ? $product->getTax() : '' ?>
        </span>
    </p>

    <p>Valor do imposto: <br>
        <span>
            <?php echo ($product->getTaxValue()) ? ($product->getTaxValue()) : '' ?>
        </span>
    </p>
    <p>Valor do produto(sem taxas): <br>
        <span>
            <?php echo ($product->getValue()) ? ($product->getValue()) : '' ?>
        </span>
    </p>
</div>

<?php require __DIR__ . '/footer.php' ?>