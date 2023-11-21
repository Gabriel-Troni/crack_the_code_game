<?php 
    class Information{
        function getUsers($conn, $id = ""){
            if($id != ""){
                $sql = "SELECT * FROM users WHERE idUser = ".$id."";

            }else{
                $sql = "SELECT * FROM users";
            }
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return mysqli_fetch_assoc($result);
            } else {
                return [];
            }
        }
        function getTeams($conn, $id = ""){
            if($id != ""){
                $sql = "SELECT * FROM equipes WHERE idEquipe = ".$id."";

            }else{
                $sql = "SELECT * FROM equipes";
            }
          
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return mysqli_fetch_assoc($result);
            } else {
                return [];
            }
        }
        function getTeamsPoints($conn, $id = ""){
            if($id != ""){
                $sql = "SELECT B.*, SUM(points) AS PTS FROM users A INNER JOIN equipes B on A.equipe = B.idEquipe WHERE B.idEquipe = ".$id." GROUP BY A.equipe ORDER BY PTS DESC";

            }else{
                $sql = "SELECT B.*, SUM(points) AS PTS FROM users A INNER JOIN equipes B on A.equipe = B.idEquipe GROUP BY A.equipe ORDER BY PTS DESC";
            }
            

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return mysqli_fetch_assoc($result);
            } else {
                return [];
            }
        }
    }
?>