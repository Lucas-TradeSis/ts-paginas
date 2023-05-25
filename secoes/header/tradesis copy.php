<Style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap");

* {
  padding: 0;
  margin: 0;
  font-family: "Inter", sans-serif;
}

.root {
  display: flex;
  flex-direction: column;
  background: #212124;
  margin-bottom: -30px;

 /*  min-height: 100vh; */
}

header {
  display: flex;
  width: 100%;
  height: 68px;

  background: #d1d0d7;
}

header .container-header {
  display: flex;
  align-items: center;
  justify-content: space-between;

  width: 100%;
  height: 100%;

  padding: 0 2em;
}

header .container-header nav {
  display: flex;
  list-style-type: none;
}

header .container-header h2 {
  color: #fff;
}

header .container-header nav li a {
  color: #fff;
  font-weight: 400;
  color: #999;
  text-decoration: none;
  margin-left: 15px;
}

header .container-header nav li a.active {
  color: #fff;
  font-weight: 600;
  color: #fff;
  text-decoration: none;
  margin-left: 15px;
}


header .container-header .search-container {
  display: flex;
}


header .container-header .mobile-menu {
  display: none;
}

header .container-header .mobile-menu img {
  width: 30px;
  height: 30px;
  cursor: pointer;
}

@media (max-width: 768px) {
  
  header .container-header nav {
    display: none;
  }
  
   header .container-header .mobile-menu {
    display: block;
  }
  #faixaDeCima {
    display: none;
  }
  #faixaDeCima a{
    display: none;
  }
}
#faixaDeCima{
    background-color: #fff;
    height: 42px;
    text-align: right;
  }
  #faixaDeCima a{
    float: right;
    color: black;
    text-align: center;
    /* padding: 12px; */
    text-decoration: none;
    /* font-size: 18px;  */
    line-height: 25px;
    border-radius: 4px;
  }

.conteudoHamb{
  display: none;
}

.conteudoHamb.mostra{
  display: block;
  align-items: center;
  text-align: center;
}
.conteudoHamb.mostra a{
  position: absolute;
  align-items: center;
  text-align: center;
  display: flex;
  color: red;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
</Style>

<div class="container-fluid" id="faixaDeCima">
    <a href="">Instagram</a><!-- <i class="bi bi-instagram"></i> -->
    <a href="">Email: helio@tradesis.com.br</a>
    <a href="">Telefone: (51) 99999-9999</a>
   
</div>
<div class="root">
  <header>
    <div class="container-header">
      
      <img src="<?php echo URLROOT?>/img/brand/logo.png" alt="" width="300" height="60"></a>
      

      <nav>
        <li><a href="#" class="active">quem somos</a></li>
        <li><a href="#" >serviços</a></li>
        <li><a href="#" >Contato</a></li>
      </nav>

   <!--    <div class="search-container">
        <input placeholder="Procurar..." />
        <button>
          Pesquisar
        </button>
      </div> -->

      <div class="mobile-menu">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Hamburger_icon_white.svg/1024px-Hamburger_icon_white.svg.png" alt="close-icon" />
      </div>
    </div>

    
  </header>

  <div class="container">
    <!-- Conteudo aqui -->
  </div>
</div>
 
<div class="container conteudoHamb" style="text-align:center; background-color:pink">
    <div>
      <a href="#" class="active">quem somos</a>
      <a href="#" >serviços</a>
      <a href="#" >Contato</a>
   </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
  $('.mobile-menu').click(function(){
    $('.conteudoHamb').toggleClass('mostra');
    
});
</script>