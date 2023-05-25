<?php

$secoesPaginas= buscaSecaoPagina($paginaDados['idPagina']);

// Secoes antes da pagina
$ordem = 0;
foreach ($secoesPaginas as $secaoPagina){
      
   if($secaoPagina["arquivoFonte"]=="pagina") {
      break;
    }

    include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
    $ordem = $secaoPagina["ordem"];

}


?>


<section id="home" class="onfocus mt-4" ><!--  style=" height:70vh" -->
      <div class="container-fluid p-0" data-aos="fade-up" >

        <div class="row g-0">
          <div class="col-lg-6">
            <div class="content d-flex flex-column justify-content-center h-100" >
              <h1 style="font-weight: 900; color: #333333">Soluções em Sistema</h1>
              <p class="fst-italic">
              Desenvolvemos sistemas com a melhor qualidade
              ...
            
              </p>
              
              <a href="#contato" class="read-more align-self-start"><span>Solicite um Orçamento</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-6 position-relative">
           <!--  <img src="<?php echo URLROOT?>/img/brand/temp2.png" class="img-fluid" alt=""> -->
           <div class="content d-flex flex-column justify-content-center h-100" >
           <img src="<?php echo URLROOT?>/img/brand/temp2.png">
             
            </div>
          </div>
        </div>

      </div>
    </section>


    <!-- ======= Features Section ======= -->
    <section id="quem_somos" class="features" style="background-color: #D1D0D7"> <!-- #24AAC3 #bec3bc -->
      <div class="container" data-aos="fade-up">
        <div class="about row g-0">

            <div class="col-lg-6  position-relative">
           <!--  <img src="<?php echo URLROOT?>/img/brand/temp2.png" class="img-fluid" alt=""> -->
           <div class="content d-flex flex-column justify-content-center h-100" >
           <img src="<?php echo URLROOT?>/img/brand/temp1.png">
             
            </div>
          </div>

          <div class="col-lg-6 ">
            <div class="content d-flex flex-column justify-content-center h-100" >
              <h1 style="font-weight: 900; color: #333333">Quem Somos</h1>
              <p class="fst-italic">
              <br>
              <br>
              <br>
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic labore vero eos officiis blanditiis laboriosam fugit suscipit accusamus animi a rem, libero sequi dolores alias unde quis. Veniam, recusandae voluptate.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic labore vero eos officiis blanditiis laboriosam fugit suscipit accusamus animi a rem, libero sequi dolores alias unde quis. Veniam, recusandae voluptate.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic labore vero eos officiis blanditiis laboriosam fugit suscipit accusamus animi a rem, libero sequi dolores alias unde quis. Veniam, recusandae voluptate.
              </p>
              
              <a href="#" class="btn btn-primary"><span>Solicite um Orçamento</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          
        </div>
        
      </div>
    </section><!-- End Features Section -->




    <!-- ======= Values Section ======= -->
    <section id="servicos" class="values">

      <div class="container" data-aos="fade-up">

      <div class="section-header">
          <h2>Nossos Serviços</h2>
          <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="<?php echo URLROOT?>/img/brand/temp3.png" class="img-fluid" alt="">
              <h3>Sistema de Controle</h3>
              <p>Melhore a performace de sua empresa com sitemas de controle atualizados</p>
              <div class="read-more mt-auto align-self-end">
                  <a href="servicos">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="<?php echo URLROOT?>/img/brand/temp4.png" class="img-fluid" alt="">
              <h3>Multi-Server</h3>
              <p>Trabalhe com sistemas que utilizam APIs, melhorando a performance do seu sistema</p>
              <div class="read-more mt-auto align-self-end">
                  <a href="servicos">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="<?php echo URLROOT?>/img/brand/temp5.png" class="img-fluid" alt="">
              <h3>Sustentação</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
              <div class="read-more mt-auto align-self-end">
                  <a href="servicos">Saiba mais</a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="cta" class="cta">
      <div class="container-fluid shadow" data-aos="zoom-out" style="background-color: #686868;">

        <div class="row g-0">

       <p></p>

        </div>

      </div>
    </section><!-- End Call To Action Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contato" class="contact">

      <div class="container shadow p-4" data-aos="fade-up" style="border-radius: 25px;">

        <div class="section-header">
          <h2>Fale Conosco</h2>
        </div>

        <div class="row gy-4">

          <div class="col-lg-12">
            <form action="#" method="post">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nome Completo">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="subject" placeholder="Telefone">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="mensagem" rows="6" placeholder="Mensagem" ></textarea>
                </div>

                <div class="col-md-12 text-center mt-3">

                  <button class="btn btn-primary" type="submit">Enviar</button>
                  
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section>


     <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

<div class="footer-content">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-4">
        <div class="footer-info">
        <!-- <img src="img/imgPerfil/<?php echo $perfil["logo"] ?>" alt="" width="300" height="120"> -->
        <span style="font-size: 40px; font-weight:600;">Tradesis</span>
          <br>
          <br>
          <br>
          
        </div> 
      </div>

      
      <div class="col-lg-4 col-md-4 footer-newsletter">
        <h4>Links</h4>
          <strong><a href="#home">Inicio</a></strong><br>
          <br>
          <strong><a href="#quem_somos">Quem Somos</a></strong><br>
          <br>
          <strong><a href="#servicos">Serviços</a></strong><br>
            

      </div>

      <div class="col-lg-4 col-md-4 footer-newsletter">
        <h4>Contato</h4>
        <i class="bi bi-geo-alt"></i>&nbsp;<strong>Porto Alegre/RS</strong><br>
          <br>
        <i class="bi bi-telephone"></i>&nbsp;<strong>Whatsapp:</strong>&nbsp;<?php echo $perfil["whatsapp"] ?><br>
          <br>
        <i class="bi bi-envelope"></i>&nbsp;<strong>Email:</strong>&nbsp;<?php echo $perfil["email"] ?><br>
            

      </div>


    </div>
  </div>
</div>

<div class="footer-legal text-center">
  <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

    <div class="d-flex flex-column align-items-center align-items-lg-start">
      <div class="copyright">
         
      </div>

    </div>

    <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
      
        <samp>Tradesis - Soluções em Sistemas</samp>
     
    </div>
    <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
    
  </div>

  </div>
</div>

</footer><!-- End Footer -->
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>