<?php


class m0002_add_password_column_to_users
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $sql = "ALTER TABLE Users ADD password VARCHAR(255) NOT NULL;";
        $db->pdo->exec($sql);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $sql = "ALTER TABLE Users DROP COLUMN password;";
        $db->pdo->exec($sql);
    }
}