<?php
namespace agenda\DAO;

use PDO;

class Conexao
{

    private $conexao = null;
    private $bancoNome = "agenda";
    private $endereco = "localhost";
    private $usuario = "root";
    private $senha = "122436";
    private $porta = "3306";
    public $tabela = null;
    public $chave_primaria = null;

    /**
     * Inicia uma conexão com o banco de dados
     *
     * @return PDO
     */

    private function ligarConexao()
    {
        # instancia, uma nova comunicação com o banco de dados.
        $this->conexao = new PDO("mysql:host={$this->endereco};dbname={$this->bancoNome};port={$this->porta}", $this->usuario, $this->senha);
        # seta o modo de erro para exceções
        $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        # retorna a comunicao
        return $this->conexao;
    }
    private function desligarConexao()
    {
        if ($this->conexao != null) {
            $this->conexao = null;
        };
    }
    /**
     * Realiza uma busca no banco de dados, definindo os dados dentro de um array.
     * exemplo:
     *    $dados = [
     *   'tabela_a' => 'Giovanna',  
     *   'tabela_b' => 'Pedro',  
     *    ...
     * ];
     *
     * @param array $dados
     * @return void
     */
    public function buscar($dados = [])
    {

        try {
            $db = $this->ligarConexao();
            if($db == null || $this->tabela == null){
                return ['status' => 'error','msg' => "Banco de dados ou tabela, não foram definidos", 'data'=>[]];
            }
            $parametros = "";
            if (count($dados) > 0) {
                $parametros = "WHERE ";
                foreach ($dados as $key => $value) {
                    # adiciona um novo parametro.
                    $parametros .= " {$key} = :{$value}";
                    # verifica se não é o ultimo indice adiciona AND, se não  ;
                    $parametros .= $key != array_key_last($dados) ? " AND" : ";";
                }
            }
            // cria o script
            $q = "SELECT * FROM {$this->tabela} $parametros";
            // prepara o script criado para rodar no banco de dados
            $query = $db->query($q);
            // executa o script
            $query->execute($dados);
            // pega o resultado
            $resultado = $query->fetchAll(\PDO::FETCH_OBJ);
            $this->desligarConexao();
            return $resultado;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Insere dados no banco de dados
     */


     /**
      * Atualiza dados no banco de dados
      */


     /**
      * Deleta dados no banco de dados
      */
}
