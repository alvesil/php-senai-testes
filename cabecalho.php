<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0C1446;">
            <div class="container-fluid">
                <img width="40px" src="./img/logo.png" alt="Imagem não encontrada...">
                <a class="navbar-brand disabled" href="#">OutletNet</a>
                <button class="navbar-toggler pages" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item" id="nav1">
                            <a class="nav-link text-white" aria-current="page" href="./index.php">Principal</a>
                        </li>
                        <li class="nav-item" id="nav2">
                            <a class="nav-link text-white" href="./fornecedor.php">Fornecedor</a>
                        </li>
                        <li class="nav-item" id="nav3">
                            <a class="nav-link text-light" href="./produtos.php">Produtos</a>
                        </li>
                        <li class="nav-item" id="nav4">
                            <a class="nav-link text-light" href="./clientes.php">Clientes</a>
                        </li>
                        <li class="nav-item dropdown" id="nav5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Consultar
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="./consulta_clientes.php">Consultar Clientes</a></li>
                              <li><a class="dropdown-item" href="./consulta_fornecedores.php">Consultar Fornecedores</a></li>
                              <li><a class="dropdown-item" href="./consulta_produtos.php">Consultar Produtos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" id="nav6">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Movimento
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                              <li><a class="dropdown-item" href="./movimentacao.php">Entrada de Produtos</a></li>
                              <li><a class="dropdown-item" href="#">Saída de Produtos</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Baixa de Produtos</a></li>
                              <li><a class="dropdown-item" href="#">Devolução de Produtos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item" id="nav7">
                            <a class="nav-link" aria-disabled="true" href="relatorios.php">Relatórios</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Google" aria-label="Search">
                        <button id="btnsub" class="btn" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
</nav>