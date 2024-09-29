<?php
// ---------------- Wallets ----------------
// Get all Wallets
function getWallets() {
	$query = "select * FROM wallet ORDER BY id";
	try {
	global $db;
		$wallets = $db->query($query);  
		$wallets = $wallets->fetchAll(PDO::FETCH_ASSOC);
		header("Content-Type: application/json", true);
		echo '{"wallet": ' . json_encode($wallets) . '}';
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
// Get wallet by ID
function getWallet($id) {
	$query = "SELECT * FROM wallet WHERE id = '$id'";
    try {
		global $db;
		$wallets = $db->query($query);  
		$wallet = $wallets->fetch(PDO::FETCH_ASSOC);
        header("Content-Type: application/json", true);
        echo json_encode($wallet);
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}

// Get wallet by token
function findByToken($token) {
	$query = "SELECT * FROM wallet WHERE UPPER(token) LIKE ". '"%'.$token.'%"'." ORDER BY token";
		try {
			global $db;
			$wallets = $db->query($query);  
			$wallet = $wallets->fetch(PDO::FETCH_ASSOC);
			header("Content-Type: application/json", true);
			echo json_encode($wallet);
		} catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}
	}

// Add new Wallet
function addWallet() {
    global $app;
	$request = $app->request();
	$wallet = json_decode($request->getBody());
	$name = $wallet->name;
	$token = $wallet->token;
	$network = $wallet->network;
	$utility = $wallet->utility;
	$quantity = $wallet->quantity;
	$totalSupply = $wallet->totalSupply;
	$picture = $wallet->picture;
	$description = $wallet->description;
	$query= "INSERT INTO wallet
                 (name, token, network, utility, quantity, totalSupply, picture, description)
              VALUES
                 ('$name', '$token', '$network', '$utility','$quantity', '$totalSupply','$picture', '$description')";
	try {
		global $db;
		$db->exec($query);
		$wallet->id = $db->lastInsertId();
		echo json_encode($wallet); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

// Delete a Token
function deleteToken($id) {
	$query = "DELETE FROM wallet WHERE id=$id";
	try {
		global $db;
		$db->exec($query);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

// Edit wallet
function updateWallet($id) {
	global $app;
	$request = $app->request();
	$wallet = json_decode($request->getBody());
	$name = $wallet->name;
	$token = $wallet->token;
	$network = $wallet->network;
	$utility = $wallet->utility;
	$quantity = $wallet->quantity;
	$totalSupply = $wallet->totalSupply;
	$picture = $wallet->picture;
	$description = $wallet->description;
	$query = "UPDATE wallet SET name='$name', token='$token', network='$network', quantity='$quantity', totalSupply='$totalSupply', picture='$picture', description='$description' WHERE id='$id'";
	try {
		global $db;
		 $db->exec($query); 
		 echo json_encode($wallet);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
// ---------------- Users ----------------

//	Get all Users
function getUsers() {
	$query = "select * FROM user_details ORDER BY id";
	try {
	global $db;
		$users = $db->query($query);  
		$users = $users->fetchAll(PDO::FETCH_ASSOC);
		header("Content-Type: application/json", true);
		echo '{"user_details": ' . json_encode($users) . '}';
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

//	Get a User by ID
function getUser($id) {
	$query = "SELECT * FROM user_details WHERE id = '$id'";
    try {
		global $db;
		$users = $db->query($query);  
		$user = $users->fetch(PDO::FETCH_ASSOC);
        header("Content-Type: application/json", true);
        echo json_encode($user);
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}

// Find user by Name
function findByUser($name) {
$query = "SELECT * FROM user_details WHERE UPPER(name) LIKE ". '"%'.$name.'%"'." ORDER BY name";
	try {
		global $db;
		$users = $db->query($query);  
		$user = $users->fetch(PDO::FETCH_ASSOC);
		header("Content-Type: application/json", true);
		echo json_encode($user);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}';
	}
}

// Add a new User
function addUser() {
	global $app;
	$request = $app->request();
	$user_details = json_decode($request->getBody());
	$name = $user_details->name;
	$username = $user_details->username;
	$password = $user_details->password;
	$image = $user_details->image;
	$query= "INSERT INTO user_details (name, username, password, image)
				VALUES
				('$name', '$username', '$password', '$image')";
	try {
		global $db;
		$db->exec($query);
		$user_details->id = $db->lastInsertId();
		echo json_encode($user_details); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

// Delete a user
function deleteUser($id) {
	$query = "DELETE FROM user_details WHERE id=$id";
	try {
		global $db;
		$db->exec($query);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

// Edit a User
function updateUser($id) {
	global $app;
	$request = $app->request();
	$user_details = json_decode($request->getBody());
	$name = $user_details->name;
	$username = $user_details->username;
	$password = $user_details->password;
	$image = $user_details->image;
	$query = "UPDATE user_details SET name='$name', username='$username', password='$password', image='$image' WHERE id='$id'";
	try {
		global $db;
		 $db->exec($query); 
		 echo json_encode($user_details);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
?>