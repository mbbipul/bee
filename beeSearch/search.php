<?php 
    require '../assets/beeClasses/beeUserDetails.php';
    $searchObj = new beeUserDetails();
    $search = $_POST['search'];
            global $conn;
            $search_term = trim($search);
            if(!empty($search_term))
            {

                $terms = explode(" ",$search_term);
                $val = 0;
                foreach($terms as $k => $v)
                {
                    $val = $k + 1;
                }

                if($val==1)
                {
                    $table= 'users';
                    $sql = "SELECT userId FROM $table WHERE userFirstName REGEXP ? OR userTitle REGEXP ? OR loginUserEmail REGEXP ?";
                    $query = $conn->prepare($sql);
                    $query->bindParam(1,$terms[0]);
                    $query->bindParam(2,$terms[0]);
                    $query->bindParam(3,$terms[0]);
                    $query->execute();
                    if($query->rowCount()>0)
                    {
                        while($r=$query->fetch(PDO::FETCH_OBJ))
                        {
                            $searchObj->showSearchResult($r->userId);
                        }
                    }else
                    {
                        echo '<a class="bg-danger">Sorry! Nothing Found</a>';
                    }

                }

                if($val==2)
                {
                    $table= 'users';
                    $sql = "SELECT userId FROM $table WHERE userFirstName REGEXP ? OR userTitle REGEXP ?";
                    $query = $conn->prepare($sql);
                    $query->bindParam(1,$terms[0]);
                    $query->bindParam(2,$terms[1]);
                    $query->execute();
                    if($query->rowCount()>0)
                    {
                     while($r=$query->fetch(PDO::FETCH_OBJ))
                        {
                            $searchObj->showSearchResult($r->userId);
                        }
                    }else
                    {
                        echo '<a class="bg-danger">Sorry! Nothing Found</a>';
                    }

                }
             }
             else{
                echo '<a class="bg-danger">Type a name or email</a>';
             }


 
    ?>

