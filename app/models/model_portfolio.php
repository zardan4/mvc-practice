<?php

class Model_Portfolio extends Model
{
    public function get_data() {
        $res = $this->db->query("SELECT Year, Site, Description FROM portfolio;");

        return mysqli_fetch_all($res);
    }
}
