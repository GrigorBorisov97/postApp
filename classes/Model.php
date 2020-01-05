<?php

class Model{
    public $table = 'articles';

    public function open(){
        if(isset($_GET['id'])){
            return $this->getArticle($_GET['id']);
        }
        else{
            return $this->getAll();
        }
    }

    public function getAll(){

        $conn = Db::connect();

        $sql = "SELECT * FROM $this->table";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                extract($row);
                // Cut body for intro

                $smallBody = array_slice( 
                    explode(" ", $row['body']),
                    0,
                    10 );

                $smallBody = implode(" ", $smallBody);

                $post_items[] = array(
                    'Id' => $Id,
                    'header' => $header,
                    'body' => $body,
                    'intro' => $smallBody
                );
            }
        } else {
            echo "0 results";
        }
        $conn->close();

        return $post_items;
    }

    public function getArticle($id){
        $conn = Db::connect();

        $sql = "SELECT * FROM $this->table
                WHERE Id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();
                extract($row);
                $post_items = array(
                    'Id' => $Id,
                    'header' => $header,
                    'body' => $body,
                    
                );

                
            } else {
            echo "0 results";
        }
        $conn->close();

        return $post_items;
    }

}