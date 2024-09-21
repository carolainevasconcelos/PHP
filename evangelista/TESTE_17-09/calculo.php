<?php
    class ManutencaoCarro{
        private $servico;
        private $valorServico;
        private $qtd;
        private $valorPeca;

        public function __construct($servico, $valorServico, $qtd, $valorPeca){
            $this->servico = $servico;
            $this->valorServico = $valorServico;
            $this->qtd = $qtd;
            $this->valorPeca = $valorPeca;
        }

        public function calcularCustoManutencao(){
            return $this -> valorServico + ($this -> qtd * $this -> valorPeca);
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $servico = $_POST['servico'];
        $valorServico = (float) $_POST['valorServico'];
        $qtd = (int) $_POST['qtd'];
        $valorPeca = (float) $_POST['valorPeca'];
        $manutencao = new ManutencaoCarro($servico, $valorServico, $qtd, $valorPeca);
        $custoTotal = $manutencao -> calcularCustoManutencao();
?>

<!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado da Manutenção</title>
        <link rel="stylesheet" href="../TESTE_17-09/style.css">
    </head>

    <body>
        <div class="container">
            <h1>Resultado da Manutenção</h1>
            <p><strong>Serviço:</strong> <?php echo htmlspecialchars($servico); ?></p>
            <p><strong>Valor do Serviço:</strong> R$ <?php echo number_format($valorServico, 2, ',', '.'); ?></p>
            <p><strong>Quantidade de Peças:</strong> <?php echo $qtd; ?></p>
            <p><strong>Valor por Peça:</strong> R$ <?php echo number_format($valorPeca, 2, ',', '.'); ?></p>
            <p><strong>Custo Total:</strong> R$ <?php echo number_format($custoTotal, 2, ',', '.'); ?></p>

            <center>
            <a href="index.html">
                <button type="button">Voltar</button>
            </a>
            </center>
        </div>
    </body>
    </html>

<?php
    }
?>