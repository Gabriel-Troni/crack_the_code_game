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
                if($id != ""){
                    return mysqli_fetch_assoc($result);
                }else{
                    return $result;
                    
                }
            } else {
                return [];
            }
        }
        function getTeamsPoints($conn, $id = ""){
            if($id != ""){
                $sql = "SELECT C.nomeEquipe,C.idEquipe, SUM(points) AS PTS FROM partidas A INNER JOIN users B ON A.email = B.email INNER JOIN equipes C on C.idEquipe = B.equipe WHERE C.idEquipe = ".$id." GROUP BY B.equipe ORDER BY PTS DESC";

            }else{
                $sql = "SELECT C.nomeEquipe,C.idEquipe, SUM(points) AS PTS FROM partidas A INNER JOIN users B ON A.email = B.email INNER JOIN equipes C on C.idEquipe = B.equipe GROUP BY B.equipe ORDER BY PTS DESC";
            }
            

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                if($id != ""){
                    return mysqli_fetch_assoc($result);
                }else{
                    return $result;
                    
                }
                
            } else {
                return [];
            }
        }
        function getUserHistory($conn, $id){
            $sql = "SELECT data, pontuação 
                    FROM partidas 
                    WHERE partidas.idUser = ".$id." 
                    ORDER BY data DESC;";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                return mysqli_fetch_assoc($result);
            } else {
                return [];
            }
        }
        function getUserTotalPoints($conn, $id){
            $sql = "SELECT SUM(points) 
                    FROM partidas 
                    WHERE partidas.idUser = ".$id." 
                    GROUP BY partidas.idUser;";

            $result = $conn->query($sql);
            if ($result->num_rows == 1) {
                return $result;
            } else {
                return 0;
            }
        }
        function getUserWeeklyTotalPoints($conn, $id){
            $sql = "SELECT SUM(points) 
                    FROM partidas 
                    WHERE partidas.idUser = ".$id."  
                          AND data >= (SELECT SUBDATE(CURRENT_DATE(), WEEKDAY(CURRENT_DATE())))
                    GROUP BY partidas.idUser;";

            $result = $conn->query($sql);
            if ($result->num_rows == 1) {
                return $result;
            } else {
                return 0;
            }
        }
        function getGlobalUsersRanking($conn){
            $sql = "SELECT  users.nomeUser, 
                            SUM(partidas.points), 
                            (SELECT SUM(partidas.points) 
                            FROM partidas 
                            WHERE data >= (SELECT SUBDATE(CURRENT_DATE(), WEEKDAY(CURRENT_DATE())))
                                AND partidas.idUser = users.idUser
                            GROUP BY partidas.idUser)
                    FROM users 
                    INNER JOIN partidas ON users.idUser = partidas.idUser
                    GROUP BY users.idUser
                    ORDER BY 3 DESC;";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                return mysqli_fetch_assoc($result);
            } else {
                return [];
            }
        }
        function getTeamUsersRanking($conn, $equipe){
            $sql = "SELECT 	users.nomeUser, 
                            SUM(partidas.points), 
                            (SELECT SUM(partidas.points) 
                            FROM partidas 
                            WHERE 	data >= (SELECT SUBDATE(CURRENT_DATE(), WEEKDAY(CURRENT_DATE())))
                                    AND partidas.idUser = users.idUser
                                    AND users.equipe = ".$equipe." 
                            GROUP BY partidas.idUser)
                    FROM users INNER JOIN partidas ON users.idUser = partidas.idUser
                    WHERE users.equipe = ".$equipe." 
                    GROUP BY users.nomeUser
                    ORDER BY 3 DESC;";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                return mysqli_fetch_assoc($result);
            } else {
                return [];
            }
        }
    }
?>