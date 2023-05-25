
<Style>
  #faixaDeCima{
    background-color: #fff;
    height: 42px;
    text-align: right;
  }
  #faixaDeCima a{
    float: right;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    /* font-size: 18px;  */
    line-height: 25px;
    border-radius: 4px;
  }

  @media screen and (max-width: 500px) {
  #faixaDeCima {
    display: none;
  }
  #faixaDeCima a{
    display: none;
  }
}

@media screen and (max-width: 900px) {
  #faixaDeCima a{
    display: none;
  }
}

.logo img{
    display: block;
    /* width: 300px; */
    height: 120px;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}


.header-right {
  float: right;
}
</Style>

<div class="container-fluid" id="faixaDeCima">
    <a href="">Instagram</a><!-- <i class="bi bi-instagram"></i> -->
    <a href="">Email: helio@tradesis.com.br</a>
    <a href="">Telefone: (51) 99999-9999</a>
</div>
<div class="container">
    <div class="header">
    <a href="#default" class="logo">CompanyLogo</a>
    <div class="header-right">
        <a href="#home">Home</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>
    </div>
</div>

