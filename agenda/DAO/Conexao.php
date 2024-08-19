<?php

namespace Comunicacao\DAO;

use Exception;
use PDO;

class Conexao
{

    private $conexao = null;
    private $bancoNome = DB['banco'];
    private $endereco = DB['host'];
    private $usuario = DB['user'];
    private $senha = DB['pass'];
    private $porta = DB['porta'];
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
     *   'coluna_a' => 'Giovanna',  
     *   'coluna_b' => 'Pedro',  
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
            if ($db == null || $this->tabela == null) {
                return ['status' => 'error', 'msg' => "Banco de dados ou tabela, não foram definidos", 'data' => []];
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
    public function inserir($dados)
    {

        try {
            //conecta ao banco de dados
            $db = $this->ligarConexao();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if ($db == null || $this->tabela == null) {
                return ['status' => 'error', 'msg' => "Banco de dados ou tabela, não foram definidos", 'data' => []];
            }
            //colunas irá receber dados 
            $colunas = array_keys($dados);
            //coluna é a chave que ira receber os dados
            /**
             * Coluna = nome 
             * dados = "Pedro"
             */
            
            $recebe_dados = "";
            foreach ($dados as $colunas => $valor) {
                //adiciona o nome da coluna a string colunas
                $recebe_dados .= ":$colunas => $valor,";
            }
            $recebe_dados = rtrim($recebe_dados, ", ");
            $prepara_para_inserir = [];
            foreach ($dados as $colunas => $valor){
                $prepara_para_inserir [":$valor"] = $colunas;
            }

            //script SQL para inserir dados
            $inserir = ("INSERT INTO {$this->tabela} $recebe_dados VALUE $prepara_para_inserir");
            //prepara para inserir dados
            $stmt = $db->prepare($inserir);
            //executa 
            $stmt->execute($prepara_para_inserir);
            //executa o banco de dados
            $stmt->execute();
            //desconecta do banco de dados
            $db = $this->desligarConexao();
            $deu_certo = $stmt->rowCount();
            return ['status' => $deu_certo ? 'sucesso' : 'error', 'msg' => $deu_certo ? 'Dados atualizado' : 'Erro ao atualizar informação', 'data' => []];
        }
        // caso houver algo errado retorna erro
        catch (\PDOException $e) {
            //exibe qulquer mensgem de erro do PDO
            return ['status' => 'error', 'msg' => $e->getMessage(), 'data' => []];
        }
    }



    /**
     * Atualiza dados no banco de dados
     */
    public function atualizar($dados)
    {
        try {
            //conecta ao banco de dados
            $db = $this->ligarConexao();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if ($db == null || $this->tabela == null) {
                return ['status' => 'error', 'msg' => "Banco de dados ou tabela, não foram definidos", 'data' => []];
            }
            //colunas irá receber dados 
            $colunas = array_keys($dados);
            // Verifica se há a chave primária nos dados
            if (!isset($dados['id'])) {
                // Se não houver chave primária, retorna um erro
                return ['status' => 'error', 'msg' => 'Chave primária não fornecida', 'data' => []];
            }

            // Inicializa variáveis para construção da consulta SQL
            // Prepara as colunas para receber informações da atualização.
            $prepare_colunas = "";
            foreach ($colunas as $coluna) {
                $prepare_colunas .= "$coluna= :{$coluna},";
            }
            // Remove a última vírgula e espaço
            $prepare_colunas = rtrim($prepare_colunas, ", ");
            // Prepara as informações que será utilizada
            $prearacao_de_dados_para_atualizar = [];
            foreach ($dados as $coluna => $valor) {
                $prearacao_de_dados_para_atualizar[":$coluna"] = $valor;
            }
            //prepara para atualizar dados
            $atualiza = (" UPDATE {$this->tabela} SET $prepare_colunas WHERE {$this->chave_primaria} = :{$this->chave_primaria}");
            $stmt = $db->prepare($atualiza);
            $stmt->execute($prearacao_de_dados_para_atualizar);
            //executa o banco
            $stmt->execute();
            //desconecta do banco de dados
            $this->desligarConexao();
            $deu_certo = $stmt->rowCount();
            return ['status' => $deu_certo ? 'sucesso' : 'error', 'msg' => $deu_certo ? 'Dados atualizado' : 'Erro ao atualizar informação', 'data' => []];
        }
        // caso houver algo errado retorna erro
        catch (\PDOException $e) {
            //exibe qulquer mensgem de erro do PDO
            return ['status' => 'error', 'msg' => $e->getMessage(), 'data' => []];
        }
    }



    /**
     * Deleta dados no banco de dados
     * @param array $parametros
     *  ['coluna_a' => 'valor_a', 'coluna_b' => 'valor_b']
     */
    function deletar($parametros = [])  {

        
        
        if(count($parametros) <= 0){
            return ['status' => 'error', 'msg' => 'Parametros obrigatórios', 'data' => []];
        }

        try {

            $db = $this->ligarConexao();

        if ($this->tabela == null) {
            $this->desligarConexao();
            return ['status' => 'error', 'msg' => 'Tabela não definida', 'data' => []];
        }

            $query_where = " WHERE ";
            foreach ($parametros as $coluna => $valor) {
                $query_where .= "$coluna= :{$valor}, AND ";
            }
            # Remove o último AND existente da string.
            $query_where = rtrim($query_where, " AND ");

            //Cria a string SQL que será executada para deletar registros
            $sql = "DELETE FROM {$this->tabela} $query_where";
        //Prepara o querry para ser executado    
        $stmt = $db->prepare($sql);

        //Cria um array associativo que mapeia placeholders para valores reais
        $parametros_binding = [];
        foreach ($parametros as $coluna => $valor) {
            $parametros_binding[":$coluna"] = $valor;
        }
        
        //Executa o querry
        $stmt->execute($parametros_binding);

        //Desliga a conexão
        $this->desligarConexao();
 
        //Verifica as linha afetadas
        $deu_certo = $stmt->rowCount();
        return ['status' => $deu_certo ? 'sucesso' : 'error', 'msg' => $deu_certo ? 'Dados deletados com sucesso' : 'Erro ao deletar dados', 'data' => []];
    } 
        catch(Exception $e){

            if (isset($db)) {
                $this->desligarConexao();
            }
            return ['status' => 'error', 'msg' => $e->getMessage(), 'data' => []];
        }
    }
}
