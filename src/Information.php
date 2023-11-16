<?php 
    class Information{
        function getUsers($conn){
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return $result;
            } else {
                return [];
            }
        }
        function getTeams($conn){
            $sql = "SELECT * FROM equipes";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return $result;
            } else {
                return [];
            }
        }
        function getTeamsPoints($conn){
            $sql = "SELECT B.*, SUM(points) AS PTS FROM users A INNER JOIN equipes B on A.equipe = B.idEquipe GROUP BY A.equipe ORDER BY PTS DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return $result;
            } else {
                return [];
            }
        }
    }
?>