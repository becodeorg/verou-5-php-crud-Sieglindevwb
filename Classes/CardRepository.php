<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(): void
    {
        $name = $_POST['name'] ?? '';
        $color = $_POST['color'] ?? '';
        try {
            $query = "INSERT INTO collection (name, color) VALUEs (?, ?)";
            $statement = $this->databaseManager->connection->prepare($query);
            $statement->execute([$name, $color]);
        } catch (PDOException $error) {
            echo $error->getMessage();
        }

    }

    // Get one
    public function find(int $id): array
    {
        try {
            $query = "SELECT * FROM collection WHERE ID = ?";
            $statement = $this->databaseManager->connection->prepare($query);

            $statement->execute([$id]);
            return $statement->fetch(PDO::FETCH_ASSOC) ?: null;
        } catch (PDOException $error){
            echo $error->getMessage();
            return null;
        }
    }

    // Get all
    public function get(): array
    {
        try {
            $query = "SELECT * FROM collection";
            $statement = $this->databaseManager->connection->query($query);
            $data = $statement->fetchAll();
            return $data;
        } catch (PDOException $error) {
            echo $error->getMessage();
            return [];
        }
        // TODO: Create an SQL query
        // TODO: Use your database connection (see $databaseManager) and send your query to your database.
        // TODO: fetch your data at the end of that action.
        // TODO: replace dummy data by real one
        /*
        return [
            ['name' => 'dummy one'],
            ['name' => 'dummy two'],
        ];
        */

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update(string $name, string $color, int $id): void
    {
        echo "Update function is executed.";
        try {
            $query = "UPDATE collection SET name = ?, color = ? WHERE id = ?";
            $statement = $this->databaseManager->connection->prepare($query);
            $statement->execute([$name, $color, $id]);
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
        
    }

    public function delete(): void
    {

    }

}