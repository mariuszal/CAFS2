<?php
require_once "conf.php";

if (!function_exists('dd')) {
	function dd() {
		array_map(function($x) {
			var_dump($x);
		}, func_get_args());

		die(0);
	}
}

function connect()
{
    $host = env('DB_HOST');
    $db   = env('DATABASE_NAME');
    $user = env('DB_USERNAME');
    $pass = env('DB_PASSWORD');

    $dsn = "mysql:host=$host;dbname=$db;";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    try {
        return new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        // echo "Connection failed: " . $e->getMessage() . '<br>';
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}

function validateTableName($table)
{
    if (!in_array($table, ALLOWED_TABLE_NAMES)) {
        throw new \Exception("$table is not a valid table name");
    }
    return $table;
}

function getQuestions($page)
{
    $table = validateTableName('questions');
    $connect = connect();
    $statement = $connect->prepare("SELECT * FROM $table WHERE `chapter_nr` = ?");
    // $chapter_name = $connect->query("SELECT chapter_name FROM questions WHERE chapter_nr = $page")->fetch();
    $statement->execute([$page]);
    $result = $statement->fetchAll();
    $connect = '';
    return $result;
}

function getAnswers($user_id)
{
    $table = validateTableName('answers');
    $connect = connect();
    $statement = $connect->prepare("SELECT * FROM $table WHERE `user_id` = ?");
    // $chapter_name = $connect->query("SELECT chapter_name FROM questions WHERE chapter_nr = $page")->fetch();
    $statement->execute([$user_id]);
    $result = $statement->fetchAll();
    $connect = '';
    return $result;
}

function getChapter($page)
{
    $connect = connect();
    $chapter_r = $connect->query("SELECT * FROM chapters")->fetchAll();
    $connect = '';
    return $chapter_r;
}

function getChapterName($page, $user_id)
{
    $connect = connect();
    $chapter_name = $connect->query("SELECT chapter_name FROM chapters WHERE chapter_nr = $page")->fetchAll();
    $connect = '';
    return $chapter_name;
}

function get($table, $user_id)
{
    $table = validateTableName($table);
    $connect = connect();
    $statement = $connect->prepare("SELECT * FROM $table WHERE `user_id` = ?");
    $statement->execute([$user_id]);
    $result = $statement->fetch();
    $connect = '';

    return $result;
}

function makeUpdateQuestions($data, $user_id, $page)
{   
    $answ = get('answers', $user_id);
    $id = $answ['id'];
    $array = json_encode($data);
    // dd($array);
    $r = "UPDATE answers SET `content` = $array  WHERE `id` = :id";
    $connect = connect();
    $statement = $connect->prepare("$r");
    $result = $statement->execute([$id]);
    $connect = '';
    return $result;
}

function getUsers($user_id)
{
    $connect = connect();
    $statement = $connect->prepare("SELECT * FROM users WHERE `user_id` = ?");
    $statement->execute([$user_id]);
    $result = $statement->fetch();
    $connect = '';
    return $result;
}

function getUserExists($email)
{
    $connect = connect();
    $statement = $connect->prepare("SELECT * FROM users WHERE `email` = ?");
    $statement->execute([$email]);
    $result = $statement->fetchAll();
    $connect = '';
    return $result;
}

function updateRow(string $table,array $data, string $user_id): void
{
    $table = validateTableName($table);
    $connect = connect();
    $sql = makeUpdateStatement($table, $data);
    $statement = $connect->prepare($sql);
    $statement->execute($data + ['user_id' => $user_id]);
    $connect = '';
}

function deleteRow(string $table, string $user_id): void
{
    $table = validateTableName($table);
    $connect = connect();
    $sql = "DELETE FROM $table WHERE `user_id` = ?";
    $statement = $connect->prepare($sql);
    $statement->execute([$user_id]);
    $connect = '';
}

function makeUpdateStatement($table, $data) 
{
    $set =  '';
    $count = count($data); 
    $i = 1;

    foreach ($data as $name => $value) {
        $set .= "`$name`= :$name";

        if ($i < $count) {
            $set .= ', ';
        }
        $i++;
    }
    return "UPDATE $table SET $set WHERE `user_id` = :user_id";
}

function insertRow(string $table, array $data): int
{
    
    $table = validateTableName($table);
    $connect = connect();
    $sql = makeInsertStatement($table, $data);
    $statement = $connect->prepare($sql);
    $statement->execute($data);
    $result = $connect->lastInsertId();
    $connect = '';

    return $result;
}

function makeInsertStatement($table, $data)
{
    $columns = $values =  '';
    $count = count($data);
    $i = 1;

    foreach ($data as $name => $value) {
        $columns .= "`$name`";
        $values .= ":$name";

        if ($i < $count) {
            $columns .= ', ';
            $values .= ', ';
        }
        $i++;
    }

    return "INSERT INTO $table ($columns) VALUES ($values)";
}

function insertUser(string $table, array $data): int
{
    $passwd = md5($data['email']);
    //validate table name
    $table = validateTableName($table);
    $table2 = validateTableName('answers');
    //open connection
    $connect = connect();
    $statement = $connect->prepare(
        "INSERT INTO $table (`first_name`, `last_name`, `email`, `user_id`, `short_description`)
        VALUES (:first_name, :last_name, :email, :user_id, :short_description)
        ");
    $statement2 = $connect->prepare(
        "INSERT INTO $table2 (`user_id`)
        VALUES (:user_id)");
    //execute statement
    $statement->execute(
        ['first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'email' => $data['email'],
        'user_id' => $passwd,
        'short_description' => $data['short_description']]);
    $statement2->execute(['user_id' => $passwd]);
    //get id of inserted row
    $result = $connect->lastInsertId();
    $connect = '';

    return $result;
}

function getAnswersNr()
{
    $connect = connect();
    $result = $connect->query("SELECT question_nr FROM questions")->fetchAll();
    $connect = '';
    return $result;
}

function getAll(string $table)
{
    $table = validateTableName($table);
    $connect = connect();
    $result = $connect->query("SELECT * FROM $table WHERE deleted_at IS NULL")->fetchAll();
    $connect = '';
    return $result;
}

function getAllDeleted(string $table)
{
    $table = validateTableName($table);
    $connect = connect();
    $result = $connect->query("SELECT * FROM $table WHERE deleted_at IS NOT NULL")->fetchAll();
    $connect = '';

    return $result;
}
