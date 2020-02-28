<?PHP

namespace App\DB;

/**
 * Classe para fornecer um Objeto de Acesso aos Dados( DAO) da tabela cliente
 * lembrando que já herda metodos de select e delete, ver classe DataAcesseObject
 */
class ClienteDAO extends \App\DB\interfaces\DataAccessObject
{
    public function __Construct(){
        parent::__Construct("cliente");
    }

    function INSERT(array $cliente): bool
    {
        $campos = "(nome, responsavel, endereco, numero, cidade_UF_id, cep, telefone, tipo_instituicao)";
        $values = "VALUES  ( ?, ?, ?, ?, ?, ?, ? )";
        $sql = "INSERT INTO $this->table $campos $values";

        $stmt = $this->dataBase->prepare($sql);
        $stmt->bind_param("sssssssss");
        $resultado = $stmt->execute();
        return $resultado;
    }

    function UPDATE(array $cliente): bool
    {
        $set  ="nome = ?, responsavel = ?, endereco = ?, numero = ?, cidade_UF_ID =? , 
                cep = ?, telefone = ?, tipo_Instituicao = ?";//campos copiados de outra query, depois mudar para os corretos
        $sql  = "UPDATE $this->table SET $set WHERE id = ?";

        $stmt = $this->dataBase->prepare($sql);
       
        $stmt->bind_param("ssssssssi", ...$params);
        
        return $stmt->execute();
    }

}