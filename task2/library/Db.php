<?php



class Db
{
	private $db;
	private $result;
	public $error = false;
	public $sql_query;

	public function __construct()
	{
		$host = '127.0.0.1'; // сервер
		$user = 'root'; // пользователь сервера
		$password = ''; // пароль
		$db_name = 'example_db'; // название базы
		/*
			Создаем экземпляр класса mysqli для работы с базой и передаем параметры в конструктор
		*/
		$this->db = new mysqli($host, $user, $password, $db_name);
	}


	public function setQuery($sql)
	{
		$this->sql_query = $sql;
		$this->result = $this->db->query($sql); // запрос к базе
		$this->error = $this->result === false ? true : false;
	}

	public function getObject($limit = 0)
	{
		$out = array();
		if ($limit == 1) {
			return $this->result->fetch_object();
		}
		while ($row = $this->result->fetch_object()) {
			$out[] = $row;
		}
		return $out;
	}

	public function getNumRows()
	{
		return $this->result->num_rows;
	}

	public function close()
	{
		$this->db->close();
	}
}



/*
$db = new \Db(); // Создаем экзмепляр класса Db
$db->setQuery('SELECT * FROM `products`'); // Запускаем метод для исполнения запроса

$res = $db->getObject(1);

var_dump($db->getNumRows());

$db->close(); // закрываем соединение с базой
*/