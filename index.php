<!doctype html>
<html lang="pt-br">
    
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="assets/dist/css/bootstrap.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="assets/dist/css/dashboard.css">
        <link rel="stylesheet" href="assets/dist/css/style.css">
        
        <title>Chat</title>

    </head>
    
    <body>
        
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Chat</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <ul class="navbar-nav px-3">
              <li class="nav-item text-nowrap">
                    <a class="nav-link" href="#">Desconectar</a>
              </li>
            </ul>
        </nav>

        <div class="container-fluid">
            
            <div class="row">
                
                <nav id="sidebarMenu" class="col-md-4 col-lg-4 d-md-block bg-light sidebar collapse ">
                    
                    <div class="col-lg-12 text-center chat-ajust-1">
                        <i class="fa fa-comments-o fa-5x" aria-hidden="true"></i>
                    </div>
                    
                    <form id="formChat">
                        
                        <div class="col-lg-12 text-center chat-ajust-2" style="">
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" >
                        </div>
                    
                        <div class="col-lg-12 text-center chat-ajust-3">
                            <input type="text" class="form-control" id="mensagem" name="mensagem" placeholder="Digite a mensagem" >                       
                        </div>   
                        
                        <div class="col-lg-12 text-center chat-ajust-3">
                            <button type="button" id="bt-enviar" class="btn btn-outline-secondary btn-sm btn-block">Enviar</button>                  
                        </div> 
                        
                    </form>
                                       
                   
                </nav>

                <main role="main" class="col-md-8 ml-sm-auto col-lg-8 px-md-4">
                    
                    <section id="area-chat">
                        
                       
                        
                    </section>      
                    <!--    
                    <section id="content">

                       <div class="row me">    
                            <i class="fa fa-commenting-o fa-2x" aria-hidden="true"></i>    
                            <p class="b-me">Saulo Frauches.:</p>
                            <p>Mensagem digitada por saulo...</p>
                        </div>
                        
                        <div class="row other">    
                            <i class="fa fa-commenting-o fa-2x" aria-hidden="true"></i>   
                            <p class="b-me">Saulo Frauches.:</p>
                            <p>Mensagem digitada por saulo...</p>                           
                        </div>
                    
                    </section>
                    -->
                </main>
            </div>
        </div>

      
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/dist/js/jquery-3.5.1.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="assets/dist/js/bootstrap.js" ></script>
        <script src="chat.js"> </script>
    </body>
</html>
