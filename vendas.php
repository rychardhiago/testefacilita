<?phprequire_once("session.php");?><!DOCTYPE HTML><html><head><title>Teste Facilita | Vendas </title><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="keywords" content="" /><script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script><link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' /><!-- Custom CSS --><link href="css/style.css" rel='stylesheet' type='text/css' /><!-- Graph CSS --><link href="css/font-awesome.css" rel="stylesheet"><!-- jQuery --><link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'><!-- lined-icons --><link rel="stylesheet" href="css/icon-font.min.css" type='text/css' /><!-- //lined-icons --><script src="js/jquery-2.1.1.min.js"></script><script src="js/amcharts.js"></script><script src="js/serial.js"></script><script src="js/light.js"></script><script src="js/radar.js"></script><link href="css/fabochart.css" rel='stylesheet' type='text/css' /><!--clock init--><script src="js/css3clock.js"></script><script src="js/skycons.js"></script><script type="text/javascript" language="javascript" src="js/dataTables.js"></script><script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script><script type="text/javascript" language="javascript" src="js/bootstrap-select.js"></script><script type="text/javascript" language="javascript" src="js/moment.min.js"></script></head> <body>   <div class="page-container">	<div class="left-content">	   <div class="inner-content">		<!-- header-starts -->			<div class="header-section">						<div class="top_menu">							<!--/profile_details-->								<div class="profile_details_left">							</div>							<div class="clearfix"></div>								<!--//profile_details-->						</div>						<!--//menu-right-->					<div class="clearfix"></div>				</div>					<!-- //header-ends -->						<div class="outter-wp">                            <h1>Vendas</h1>                            <div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                <div class="modal-dialog">                                    <div class="modal-content">                                        <div class="modal-header">                                            <button type="button" class="close second" data-dismiss="modal" aria-hidden="true">×</button>                                        </div>                                        <div class="modal-body">                                            <div class="mailbox-content">                                                <!--Compose New Message -->                                                <div class="compose-mail-box">                                                    <div class="compose-bg" id="divtitulo">                                                        Vendas                                                    </div>                                                    <div class="panel-body">                                                        <form id="formcadastro" method="post">                                                            <input type="hidden" id="vendaid" name="vendaid" class="classeid" value="0">                                                            Cliente <input type="text" name="cliente" id="cliente" maxlength="50" placeholder="Cliente" required="" class="form-control1 control3"><br>                                                            Carro <select name="carroid" id="carroid" class="form-control1 control3" required></select>                                                            Cor <select name="coreid" id="coreid" class="form-control1 control3" required></select>                                                            <div id="divrodas" class="hide">                                                                Rodas <select name="rodas" id="rodas" class="form-control1 control3">                                                                    <option value="S">Sim</option>                                                                    <option value="N" selected>Não</option>                                                                </select>                                                                <div id="valorrodas" class="hide">                                                                    Valor rodas <input type="number" step="0.01" value="0" name="vl_rodas" id="vl_rodas"  required="" class="form-control1 control3"><br>                                                                </div>                                                            </div>                                                            Valor Final <input type="text" name="valorfinal" id="valorfinal" placeholder="Valor final" disabled required class="form-control1 control3"><br>                                                            <input id="enviar" type="submit" value="Enviar" class="socadastro">                                                        </form>                                                    </div>                                                </div>                                            </div>                                        </div>                                    </div><!-- /.modal-content -->                                </div><!-- /.modal-dialog -->                            </div>                            <div id="carregando" class="center-block" align="center">                                <img src="images/carregando.gif">                            </div>                            <div id="resposta"></div><br>                            <div id="divtable" class="table-responsive">                                <table id="tabela_dados" class="table table-hover">                                    <thead>                                    <tr>                                        <th data-bSortable="true">#</th>                                        <th data-bSortable="true">Cliente</th>                                        <th data-bSortable="true">Carro</th>                                        <th data-bSortable="true">Data</th>                                        <th data-bSortable="true">Valor rodas</th>                                        <th data-bSortable="true">Desconto</th>                                        <th data-bSortable="true">Valor final</th>                                        <th class="noprint">Ações</th>                                    </tr>                                    </thead>                                </table>                            </div>                            <script type="text/javascript">                                var classe = 'vendas';                                var divresposta = '#resposta';                                var campos = 'vendaid, cliente, carros.nome as carro, data, vl_rodas as Rodas, desconto, valorfinal  ';                                var alias = '';                                var inner = 'carros';                                var campoI = 'carroid';                                var tabela = 'carros';                                var campo = 'carroid';                                var table = '#tabela_dados';                                var consulta = 'consultaI';                            </script>                        <!--//outer-wp-->                        </div>           <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">               <div class="modal-dialog">                   <div class="modal-content">                       <div class="modal-header">                           <button type="button" class="close second" data-dismiss="modal" aria-hidden="true">×</button>                           <h2 class="modal-title">Rychard Hiago - Desenvolvedor Web</h2>                       </div>                       <div class="modal-body">                           (62) 9 8425-8554 <br>                           rychardhiago@gmail.com                       </div>                       <div class="modal-footer">                           <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>                       </div>                   </div><!-- /.modal-content -->               </div><!-- /.modal-dialog -->           </div>           <!--footer section start-->           <footer>               <p>&copy 2019 Teste Facilita | Desenvolvido por <a href="#" data-toggle="modal" data-target="#myModal">Rychard Hiago</a></p>           </footer>           <!--footer section end-->								</div>							</div>				<!--//content-inner-->			<!--/sidebar-menu-->				<div class="sidebar-menu">					<header class="logo">					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="home.php"> <span id="logo"> <h1>Facilita</h1></span>					<!--<img id="logo" src="" alt="Logo"/>--> 				  </a> 				</header>			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>			<!--/down-->                    <div class="down">                        <a href="#"><h1><i class="glyphicon glyphicon-user"></i></h1></a>                        <a href="#"><span class=" name-caret"><?php echo $_SESSION['nome']; ?></span></a>                        <p>Profissional em Facilita</p>                        <ul>                            <li>                                <a class="tooltips" href="logout.php"><span>Sair</span><i class="lnr lnr-power-switch"></i></a>                            </li>                        </ul>                    </div>							   <!--//down-->                           <div class="menu">									<ul id="menu" >								  </ul>								</div>							  </div>							  <div class="clearfix"></div>									</div><!--js --><link rel="stylesheet" href="css/vroom.css"><script type="text/javascript" src="js/vroom.js"></script><script type="text/javascript" src="js/TweenLite.min.js"></script><script type="text/javascript" src="js/CSSPlugin.min.js"></script><script src="js/jquery.nicescroll.js"></script><script src="js/scripts.js"></script><script src="js/funcoes.js"></script><script src="js/bootstrap.min.js"></script>   <script type="text/javascript">       table_carregar(table,classe);       preencher('carroid','carros','carroid','nome',0,0,0,true);       preencher('coreid','cores','coreid','nome',0,0,0,true);       var nomeMarca = '';       function getValorFinal() {           var dados = 'classe=vendas&acao=getValorFinal&valor=0&carroid='+$('#carroid').val()+'&coreid='+$('#coreid').val()+'&vl_rodas='+$('#vl_rodas').val();           $.post("acoes.php", dados, function (json) {               var resultado = jQuery.parseJSON(json);               nomeMarca = '';               if(typeof resultado.dados[0].dados.erro == "undefined"){                   if(resultado.dados[0].dados.valorfinal > 0){                       $('#valorfinal').val(resultado.dados[0].dados.valorfinal);                       nomeMarca = resultado.dados[0].dados.nomeMarca;                   }                   else{                       $('#valorfinal').val('Não foi possível calcular o valor');                   }               }               else {                   $('#valorfinal').val(resultado.dados[0].dados.erro);               }           });       }       $('#coreid').on('change', function () {           if(($("#coreid option:selected").text().toUpperCase() == 'PRETO')){               $('#divrodas').removeClass('hide');           }           else{               $('#divrodas').addClass('hide');           }           getValorFinal();       });       $('#carroid').on('change', function () {           getValorFinal();       });       $('#rodas').on('change', function () {           if(($(this).val() == 'S') && nomeMarca == 'FIAT'){               $('#valorrodas').removeClass('hide');           }           else{               $('#valorrodas').addClass('hide');           }       });       $('#vl_rodas').on('change', function () {           getValorFinal();       });   </script></body></html>