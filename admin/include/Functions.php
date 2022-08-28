<?php
	
	session_start();
	class Functions
	{
		private $con;

		function __construct()
		{
			require_once('DbCon.php');
			$db = new Dbcon;
			$this->con = $db->connect();
		}

		function getPosts()
		{
			$posts = array();
			$postsData = array();
			$query = "SELECT * FROM posts ORDER BY postTimestamp desc";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			$stmt->bind_result($postId,$postTitle,$postContent,$postImage,$postTimestamp,$endDate,$no);
			while ($stmt->fetch()) 
			{
				$posts['postId'] =			$postId;
				$posts['postTitle'] =		$postTitle;
				$posts['postContent'] =		$postContent;
				$posts['postImage'] =		$postImage;
				$posts['postTimestamp']	=	$postTimestamp;
				$post['endDate'] =			$endDate;
				$post['num'] =				$no;
				array_push($postsData, $posts);
			}
			$postsData = json_encode($postsData);
			$postsData = json_decode($postsData);
			return $postsData;
		}

		function login($email,$password)
		{
			$query = "SELECT userId FROM users WHERE userEmail=? AND userPassword=?";
			$stmt =  $this->con->prepare($query);
			$stmt->bind_param("ss",$email,$password);
			$stmt->execute();
			$stmt->bind_result($userId);
			$stmt->fetch();
			if (!empty($userId))
			{
				session_start();
				$_SESSION['userId'] = $userId;
				header("LOCATION:dashboard.php");
			}
			else
			{
				echo "<script>alert('Invalid Email or Password')</script>";
			}
		}

		function getUsers()
		{
			$users = array();
			$query = "SELECT userId,userName,userEmail,userBio,userImage FROM users";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			$stmt->bind_result($userId,$userName,$userEmail,$userBio,$userImage);
			while ($stmt->fetch()) 
			{
				$user['userId'] = $userId;
				$user['userName'] = $userName;
				$user['userEmail'] = $userEmail;
				$user['userBio'] = $userBio;
				$user['userImage'] = $userImage;
				array_push($users, $user);
			}
			$users = json_encode($users);
			$users = json_decode($users);
			return $users;
		}

		function getUser()
		{
			$userId = $_SESSION['userId'];
			$users = array();
			$query = "SELECT userId,userName,userEmail,userBio,userImage FROM users WHERE userId=?";
			$stmt = $this->con->prepare($query);
			$stmt->bind_param("s",$userId);
			$stmt->execute();
			$stmt->bind_result($userId,$userName,$userEmail,$userBio,$userImage);
			$stmt->fetch();
			$user['userId'] = $userId;
			$user['userName'] = $userName;
			$user['userEmail'] = $userEmail;
			$user['userBio'] = $userBio;
			$user['userImage'] = $userImage;
			$users = json_encode($user);
			$users = json_decode($users);
			return $users;
		}

		function getPostsCount()
		{
			$query = "SELECT * FROM posts";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			$stmt->store_result();
			return $stmt->num_rows;
		}

		function getUsersCount()
		{
			$query = "SELECT * FROM users";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			$stmt->store_result();
			return $stmt->num_rows;
		}

		function deletePostById($postId)
		{
			$query = "DELETE FROM posts WHERE postId=?";
			$stmt = $this->con->prepare($query);
			$stmt->bind_param("s",$postId);
			if($stmt->execute())
			{
				header("LOCATION:posts");
			}
		}

		function getPostByPostId($postId)
		{
			$posts = array();
			$query = "SELECT * FROM posts WHERE postId=?";
			$stmt = $this->con->prepare($query);
			$stmt->bind_param("s",$postId);
			$stmt->execute();
			$stmt->bind_result($postId,$postTitle,$postContent,$postImage,$postTimestamp,$endDate,$no);
			$stmt->fetch();
			$posts['postId'] =			$postId;
			$posts['postTitle'] =		$postTitle;
			$posts['postContent'] =		$postContent;
			$posts['postImage'] =		$postImage;
			$posts['postTimestamp']	=	$postTimestamp;
			$post['endDate'] =			$endDate;
			$post['num'] =				$no;
			$result = json_encode($posts);
			$result = json_decode($result);
			return $result;
		}

		function getPostByPostTitle($postTitle)
		{
			$posts = array();
			$query = "SELECT * FROM posts WHERE postTitle=?";
			$stmt = $this->con->prepare($query);
			$stmt->bind_param("s",$postTitle);
			$stmt->execute();
			$stmt->bind_result($postId,$postTitle,$postContent,$postImage,$postTimestamp,$endDate,$no);
			$stmt->fetch();
			$posts['postId'] =			$postId;
			$posts['postTitle'] =		$postTitle;
			$posts['postContent'] =		$postContent;
			$posts['postImage'] =		$postImage;
			$posts['postTimestamp']	=	$postTimestamp;
			$post['endDate'] =			$endDate;
			$post['num'] =				$no;
			$result = json_encode($posts);
			$result = json_decode($result);
			return $result;
		}

		function postPost($postTitle,$postContent,$postImage,$endDate,$no)
		{
			$imageUrl = "";
			if (!empty($postImage['name'])) 
			{
				$imageUrl = $this->uploadImage($postImage);
			}
			else
			{
				$imageUrl = "";
			}
			$query = "INSERT INTO posts (postTitle,postContent,postImage,endDate,num) VALUES (?,?,?,?,?)";
			$stmt = $this->con->prepare($query);
			$stmt->bind_param("sssss",$postTitle,$postContent,$imageUrl,$endDate,$no);
			if ($stmt->execute())
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function updatePost($postTitle,$postContent,$postImage,$postId,$endDate,$no)
		{
			$imageUrl = "";
			if (!empty($postImage['name'])) 
			{
				$imageUrl = $this->uploadImage($postImage);
			}
			else
			{
				$imageUrl = "";
			}
			$query = "UPDATE posts SET postTitle=?, postContent=?, postImage=?, endDate=?,num=? WHERE postId=?";
			$stmt = $this->con->prepare($query);
			$stmt->bind_param("ssssss",$postTitle,$postContent,$imageUrl,$postId,$endDate,$no);
			if ($stmt->execute())
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function uploadImage($postImage)
		{
		    $imageUrl ="";
		    if ($postImage!=null) 
		    {
		        $imageName = $postImage['name'];
		        $image = $postImage['tmp_name'];
		        $targetDir = "../uploads/";
		        $targetFile = uniqid().'.'.pathinfo($imageName,PATHINFO_EXTENSION);
		        if (move_uploaded_file($image,$targetDir.$targetFile)) 
		        {
		            $imageUrl = $targetFile;
		        }
		    }
		    return $imageUrl;
		}

	}
	?>