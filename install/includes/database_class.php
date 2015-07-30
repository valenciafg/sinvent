<?php

class Database {

    // Function to the database and tables and fill them with the default data
    function create_database($data) {
        //pg sql connection start


        echo $host = "host=" . $data['hostname'] . "";
        echo $port = "port=5432";
        echo $dbname = "dbname=" . $data['database'] . "";
        echo $credentials = "user=" . $data['username'] . " password=" . $data['password'] . "";

        $db = pg_connect("$host $port  $credentials");

        if (!$db) {
            echo "Error : Unable to open database\n";
        } else {
            echo "Opened database successfully\n";
        }
        // Check for errors
        if (mysqli_connect_errno())
            return false;

        // Create the prepared statement
        $query = "CREATE DATABASE " . $data['database'] . "";

        $ret = pg_query($db, $query);

        pg_close($db);


        // Close the connection


        return true;
        //pg sql connection end
//                // Connect to the database
//		$mysqli = new mysqli($data['hostname'],$data['username'],$data['password'],'');
//
//		// Check for errors
//		if(mysqli_connect_errno())
//			return false;
//
//		// Create the prepared statement
//		$mysqli->query("CREATE DATABASE IF NOT EXISTS ".$data['database']);
//
//		// Close the connection
//		$mysqli->close();
//
//		return true;
    }

    // Function to create the tables and fill them with the default data
    function create_tables($data) {



//
//                // Connect to the database
//		$mysqli = new mysqli($data['hostname'],$data['username'],$data['password'],$data['database']);
//
//		// Check for errors
//		if(mysqli_connect_errno())
//			return false;
        //pgsql connection 
        // Connect to the database
        echo $host = "host=" . $data['hostname'] . "";
        echo $port = "port=5432";
        echo $dbname = "dbname=" . $data['database'] . "";
        echo $credentials = "user=" . $data['username'] . " password=" . $data['password'] . "";

        $db = pg_connect("$host $port $dbname $credentials");

        // Check for errors
        if (mysqli_connect_errno())
            return false;

        // Open the default SQL file
        $query = file_get_contents('assets/install.sql');

        pg_query($db, $query);
        //insert into roles
        $admin_role = "INSERT INTO roles (name,description)
      VALUES ('admin', 'all previllages')";
        pg_query($db, $admin_role);
        $write_role =  "INSERT INTO roles (name,description)
      VALUES ('write', 'write previllages')";
        pg_query($db, $write_role);
        $read_role =  "INSERT INTO roles (name,description)
      VALUES ('read', 'read previllages')";
       pg_query($db, $read_role);



        //insert into groups
         $admin_group = "INSERT INTO groups (name,role_id)
      VALUES ('admin', 1)";
        pg_query($db, $admin_group);
        //insert into users
        $admin_user = "INSERT INTO users (username,password,language,email,group_id)
      VALUES ('admin', '0192023a7bbd73250516f069df18b500','spanish', 'admin@mail.com',1 )";
      pg_query($db, $admin_user);


        // Execute a multi query
        //$mysqli->multi_query($query);
        // Close the connection
        //$mysqli->close();
        pg_close($db);

        return true;
    }

}
