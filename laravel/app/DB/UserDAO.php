<?PHP

namespace App\DB;

/**
 * Classe para fornecer um Objeto de Acesso aos Dados( DAO) da tabela usuario
 * lembrando que já herda metodos de select e delete, ver classe DataAcesseObject
 */
class UserDAO extends \App\DB\interfaces\DataAccessObject
{
    public function __Construct(){
        parent::__Construct("usuario");
    }

    function INSERT(array $pessoa): bool
    {
        //nesse projeto não vamos precisar do insert
    }

    function UPDATE($usuario): bool
    {
        //nesse projeto não vamos precisar do update
    }

    /**
     * função para realizar a consulta no banco de determinado usuario para o login;
     *
     * @param string $user
     * @param string $senha
     * @return array
     */
    function UserLogin(string $user, string $senha): array{
        $select = "ID";
        $sql = "SELECT $select FROM $join WHERE usuario = ? AND senha = ?";
        $stmt = $this->dataBase->prepare($sql);
        $stmt->bind_param("ss", $user, $senha);
        $stmt->execute();
        $row = $stmt->get_result()->fetch_assoc();

        if ($row == []) {
            throw new \Exception("Usuario não encontrado ou senha errada");
        }

        return $row;
    }
}
