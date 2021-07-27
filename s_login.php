<?php
session_start();

if (isset($_POST['signin'])) {

  $list_username = [
    'rudaz',
    'admin',
    'root',
    'sontol',
    'kepo'
  ];
  $list_password = [
    'rahasia',
    'kepolu',
    'admin',
    'indonesia',
    'rudi ganteng',
    'rudi manis',
    'rudi paling ganteng'
  ];

  $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
  $password = htmlspecialchars($_POST['password'], ENT_QUOTES);

  if (empty($username) || empty($password)) {
    $_SESSION['flashdata'] = ['alerts' => 'danger',
      'message' => 'Harap isi semua inputnya sayang!'];
    exit(header("Location:login"));
  } else if (!in_array($username, $list_username)) {
    $_SESSION['flashdata'] = ['alerts' => 'danger',
      'message' => 'Username tidak ditemukan!'];
    exit(header("Location:login"));
  } else {
    if (!in_array($password, $list_password)) {
      $_SESSION['flashdata'] = ['alerts' => 'danger',
        'message' => 'Password salah!'];
      exit(header("Location:login"));
    } else {
      $_SESSION['flashdata'] = ['alerts' => 'success',
        'message' => 'Login Berhasil!'];
      exit(header("Location:login"));
    }
  }
} else {
  exit(header("Location:login"));
}

?>