<a class="btn btn-success" href="?pagina=carrinho">
    <div>Carrinho</div>

    <?php if (isset($_SESSION['carrinho'])) {
        echo '(' . count($_SESSION['carrinho']) . ')';
    } ?>
</a>
<?php if (isset($_SESSION['autenticado'])) { ?>
<a class="btn btn-info" href="?pagina=meus_pedidos">Meus pedidos</a>
<?php }
?>