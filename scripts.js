document.querySelector("form").addEventListener("submit", function(event) {
  event.preventDefault();

  const user = document.querySelector('input[type="text"]').value;
  const password = document.querySelector('input[type="password"]').value;

  if (user === "admin" && password === "123") {
    alert("Login bem-sucedido!");
    window.location.href = "home.html";
  } else {
    alert("Usuário ou senha incorretos!");
  }
});