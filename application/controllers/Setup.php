<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        echo '<pre>';
        print_r($this->db);
		echo '</pre>';
    }
    protected function drop_table_from_db()
    {
        $this->conn->query('SET foreign_key_checks = 0');
        if ($result = $this->conn->query("SHOW TABLES"))
        {
            while($row = $result->fetch_array(MYSQLI_NUM))
            {
                $this->conn->query('DROP TABLE IF EXISTS '.$row[0]);
            }
        }

        $this->conn->query('SET foreign_key_checks = 1');
        // $this->conn->close();
        return TRUE;
    }
    public function imports()
    {
        $tes;
        $this->drop_table_from_db();
        // Connect to MySQL server
        
        // Temporary variable, used to store current query
        $templine = '';
        // Read in entire file
        $lines = file($this->db['sqldump']);
        // Loop through each line
        foreach ($lines as $line) {
        // Skip it if it's a comment
            if (substr($line, 0, 2) == '--' || $line == '')
                continue;

        // Add this line to the current segment
            $templine .= $line;
        // If it has a semicolon at the end, it's the end of the query
            if (substr(trim($line), -1, 1) == ';') {
                // Perform the query
                $tes= $this->conn->query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . $this->conn->error() . '<br /><br />');
                // Reset temp variable to empty
                $templine = '';
            }
        }
        // echo "Tables imported successfully";
        // $this->conn->close($this->conn);
        return TRUE;
    }
}
