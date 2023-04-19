<!DOCTYPE html>
<html>
  <head>
    <title>Flip Animation Login Success</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
  background-color: #efefef;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-page {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}

.login-form {
  background-color: white;
  padding: 30px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  transition: transform 0.5s ease;
}

.login-form h1 {
  margin: 0 0 20px 0;
  text-align: center;
  font-size: 24px;
  font-weight: bold;
}

.login-form input {
  display: block;
  margin: 20px 0;
  padding: 10px;
  width: 100%;
  border: none;
  border-radius: 5px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.login-form button {
  display: block;
  margin: 20px auto 0 auto;
  padding: 10px 20px;
  background-color: #0077c0;
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  font-weight: bold;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  transition: transform 0.5s ease;
}

.success-page {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #0077c0;
  z-index: 1;
}

.success-icon {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}

.success-icon i {
  color: white;
  font-size: 100px;
  animation: flipInX 0.5s;
}

.login-form.login-success {
  transform: rotateY(180deg);
}

.login-form.login-success button {
  transform: rotateY(180deg);
}

.login-form.login-success + .success-page {
  display: block;
}

.success-page.success-exit {
  animation: flipOutX 0.5s;
}

.success-page.success-exit-active {
  animation: flipOutX 0.5s;
  display: none;
}

@keyframes flipInX {
  from {
    transform: perspective(400px) rotateX(90deg);
    opacity: 0;
  }
  to {
    transform: perspective(400px) rotateX(0deg);
    opacity: 1;
  }
}

@keyframes flipOutX {
  from {
    transform: perspective(400px) rotateX(0deg);
    opacity: 1;
  }
  to {
    transform: perspective(400px) rotateX(90deg);
    opacity: 0;
  }
}

    </style>
</head>
  <body>
    <div class="login-page">
      <div class="login-form">
        <h1>Login</h1>
        <form>
          <input type="text" placeholder="Username" required>
          <input type="password" placeholder="Password" required>
          <button type="submit">Log In</button>
        </form>
      </div>
    </div>
    <div class="success-page">
      <div class="success-icon">
        <i class="fas fa-check"></i>
      </div>
    </div>
  </body>
</html>
