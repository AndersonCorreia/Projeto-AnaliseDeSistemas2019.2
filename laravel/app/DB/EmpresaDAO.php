<?PHP

namespace App\DB;

/**
 * Classe para fornecer um Objeto de Acesso aos Dados( DAO) da tabela cliente
 * lembrando que já herda metodos de select e delete, ver classe DataAcesseObject
 */
class EmpresaDAO extends \App\DB\interfaces\DataAccessObject
{
    public function __Construct(){
        parent::__Construct("empresa");
    }

    function INSERT(array $e): bool
    {
        $campos = "(razaoSocial, nomeFantasia, CNPJ, site, inscricaoEstadual, matriz, estado, cidade,
                    endereco, CEP, telefone, numero)";
        $values = "VALUES  ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $sql = "INSERT INTO $this->table $campos $values";

        $stmt = $this->dataBase->prepare($sql);
        $stmt->bind_param("ssssssssssss", $e['razaoSocial'], $e['nomeFantasia'], $e['CNPJ'], $e['site'], 
                            $e['inscricaoEstadual'], $e['matriz'], $e['estado'], $e['cidade'], $e['endereco'],
                            $e['CEP'], $e['telefone'], $e['numero'] );

        $resultado = $stmt->execute();
        return $resultado;
    }

    function UPDATE(array $e): bool
    {
        $set  ="razaoSocial = ?, nomeFantasia = ?, CNPJ = ?, site = ?, inscricaoEstadual = ?, matriz = ?, 
        estado = ?, cidade = ?, endereco = ?, CEP = ?, telefone = ?, numero = ?";
        $sql  = "UPDATE $this->table SET $set WHERE ID = ?";

        $stmt = $this->dataBase->prepare($sql);
        $stmt->bind_param("ssssssssssssi", $e['razaoSocial'], $e['nomeFantasia'], $e['CNPJ'], $e['site'], 
                            $e['inscricaoEstadual'], $e['matriz'], $e['estado'], $e['cidade'], $e['endereco'],
                            $e['CEP'], $e['telefone'], $e['numero'], $e['ID'] );
        
        return $stmt->execute();
    }

}