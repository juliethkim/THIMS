<?php
public function search($searchterm)
{
    $sql = "SELECT provider_type as provider_type, regions as regions 
    FROM `edubooks` 
    WHERE title LIKE '$searchterm' OR author LIKE '$searchterm'";


    $q = $this->db->query($sql);
    if($q->num_rows() > 0)
    {
        foreach($q->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
    else
    {
        return 0;
    }
}
?>