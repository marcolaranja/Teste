<footer class="bg-info">

    <div class="container">

      <ul>
        <li><a href="./index.php">Home</a></li>
        <li><a href="./quem-somos.php">Quem Somos</a></li>
        <li><a href="./portfolio.php">Portfólio</a></li>
        <li><a href="./servicos.php">Serviços</a></li>
        <li><a href="./clientes.php">Clientes</a></li>
        <li><a href="./contato.php">Contato</a></li>
      </ul>

    </div>

  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="./bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript">


    $(document).ready(function(){

      $('#cadastro').submit(function(){

        if($('#nome').val() == '' || $('#email').val() == '' || $('#idade').val() == ''){
          alert('Todos os campos são obrigatórios');
          return false;
        }

      });

    });

  </script>
</body>
</html>
