<?php
require '../config/databases.php';

if (isset($_GET['id'])) {
    $user_id = intval($_GET['id']);

    // Comprobar si el ID es válido
    if ($user_id > 0) {
        $query_delete = "DELETE FROM users WHERE id = $user_id";
        $result_delete = pg_query($conn, $query_delete);

        if ($result_delete) {
            // Redirigir a la lista de usuarios después de la eliminación
            header("Location: list_users.php");
            exit();
        } else {
            echo "Error deleting user.";
        }
    } else {
        echo "Invalid user ID.";
    }
} else {
    echo "User ID not provided.";
}
?>
